<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Process;

class BackupController extends Controller
{
    protected string $backupPath;
    protected string $driver;

    public function __construct()
    {
        $this->backupPath = storage_path('app' . DIRECTORY_SEPARATOR . 'backups');
        $this->driver = config('database.default');

        // Ensure backup directory exists
        if (!File::isDirectory($this->backupPath)) {
            File::makeDirectory($this->backupPath, 0755, true);
        }
    }

    public function index()
    {
        $backups = $this->getBackups();
        $databaseInfo = $this->getDatabaseInfo();

        return view('admin.backups.index', compact('backups', 'databaseInfo'));
    }

    protected function getDatabaseInfo(): array
    {
        $driver = $this->driver;
        $config = config("database.connections.{$driver}");

        if ($driver === 'sqlite') {
            $path = $config['database'];
            $exists = File::exists($path);
            return [
                'driver' => 'SQLite',
                'name' => basename($path),
                'size' => $exists ? $this->formatBytes(File::size($path)) : 'N/A',
                'exists' => $exists,
                'path' => $path,
            ];
        }

        // MySQL or other
        return [
            'driver' => ucfirst($driver),
            'name' => $config['database'] ?? 'Unknown',
            'size' => 'N/A',
            'exists' => true,
            'host' => $config['host'] ?? 'localhost',
        ];
    }

    public function create()
    {
        try {
            if ($this->driver === 'sqlite') {
                return $this->createSqliteBackup();
            }

            if ($this->driver === 'mysql') {
                return $this->createMysqlBackup();
            }

            return back()->with('error', 'Backup wordt niet ondersteund voor database type: ' . $this->driver);
        } catch (\Exception $e) {
            return back()->with('error', 'Backup maken mislukt: ' . $e->getMessage());
        }
    }

    protected function createSqliteBackup()
    {
        $path = config('database.connections.sqlite.database');

        if (!File::exists($path)) {
            return back()->with('error', 'Database bestand niet gevonden.');
        }

        $filename = 'backup_' . date('Y-m-d_H-i-s') . '.sqlite';
        $destination = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

        File::copy($path, $destination);

        return back()->with('success', 'Backup succesvol aangemaakt: ' . $filename);
    }

    protected function createMysqlBackup()
    {
        $config = config('database.connections.mysql');
        $filename = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $destination = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s --port=%s %s > %s',
            escapeshellarg($config['username']),
            escapeshellarg($config['password']),
            escapeshellarg($config['host']),
            escapeshellarg($config['port']),
            escapeshellarg($config['database']),
            escapeshellarg($destination)
        );

        $result = Process::run($command);

        if ($result->failed()) {
            return back()->with('error', 'Backup maken mislukt: ' . $result->errorOutput());
        }

        return back()->with('success', 'Backup succesvol aangemaakt: ' . $filename);
    }

    public function download(string $filename)
    {
        $filepath = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

        if (!File::exists($filepath) || !$this->isValidBackupFile($filename)) {
            return back()->with('error', 'Backup bestand niet gevonden.');
        }

        return response()->download($filepath, $filename);
    }

    public function restore(string $filename)
    {
        $filepath = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

        if (!File::exists($filepath) || !$this->isValidBackupFile($filename)) {
            return back()->with('error', 'Backup bestand niet gevonden.');
        }

        try {
            // Determine type based on file extension
            $isSqlite = str_ends_with($filename, '.sqlite');
            $isSql = str_ends_with($filename, '.sql');

            if ($isSqlite && $this->driver === 'sqlite') {
                return $this->restoreSqliteBackup($filepath, $filename);
            }

            if ($isSql && $this->driver === 'mysql') {
                return $this->restoreMysqlBackup($filepath, $filename);
            }

            return back()->with('error', 'Backup type komt niet overeen met huidige database type.');
        } catch (\Exception $e) {
            return back()->with('error', 'Herstellen mislukt: ' . $e->getMessage());
        }
    }

    protected function restoreSqliteBackup(string $filepath, string $filename)
    {
        $databasePath = config('database.connections.sqlite.database');

        // Create a backup of current database before restoring
        $preRestoreBackup = 'pre_restore_' . date('Y-m-d_H-i-s') . '.sqlite';
        File::copy($databasePath, $this->backupPath . DIRECTORY_SEPARATOR . $preRestoreBackup);

        // Restore the backup
        File::copy($filepath, $databasePath);

        return back()->with('success', 'Database succesvol hersteld vanuit: ' . $filename . '. Een backup van de vorige staat is opgeslagen als: ' . $preRestoreBackup);
    }

    protected function restoreMysqlBackup(string $filepath, string $filename)
    {
        $config = config('database.connections.mysql');

        // Create a backup before restoring
        $this->createMysqlBackup();

        $command = sprintf(
            'mysql --user=%s --password=%s --host=%s --port=%s %s < %s',
            escapeshellarg($config['username']),
            escapeshellarg($config['password']),
            escapeshellarg($config['host']),
            escapeshellarg($config['port']),
            escapeshellarg($config['database']),
            escapeshellarg($filepath)
        );

        $result = Process::run($command);

        if ($result->failed()) {
            return back()->with('error', 'Herstellen mislukt: ' . $result->errorOutput());
        }

        return back()->with('success', 'Database succesvol hersteld vanuit: ' . $filename);
    }

    public function delete(string $filename)
    {
        $filepath = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

        if (!File::exists($filepath) || !$this->isValidBackupFile($filename)) {
            return back()->with('error', 'Backup bestand niet gevonden.');
        }

        try {
            File::delete($filepath);
            return back()->with('success', 'Backup verwijderd: ' . $filename);
        } catch (\Exception $e) {
            return back()->with('error', 'Verwijderen mislukt: ' . $e->getMessage());
        }
    }

    protected function getBackups(): array
    {
        if (!File::isDirectory($this->backupPath)) {
            return [];
        }

        $files = File::files($this->backupPath);
        $backups = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();
            if ($this->isValidBackupFile($filename)) {
                $backups[] = [
                    'filename' => $filename,
                    'size' => $this->formatBytes($file->getSize()),
                    'date' => date('d-m-Y H:i:s', $file->getMTime()),
                    'timestamp' => $file->getMTime(),
                ];
            }
        }

        // Sort by timestamp descending (newest first)
        usort($backups, fn($a, $b) => $b['timestamp'] <=> $a['timestamp']);

        return $backups;
    }

    protected function isValidBackupFile(string $filename): bool
    {
        // Only allow .sqlite and .sql files and prevent directory traversal
        return preg_match('/^[a-zA-Z0-9_\-]+\.(sqlite|sql)$/', $filename) === 1;
    }

    protected function formatBytes(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= (1 << (10 * $pow));

        return round($bytes, 2) . ' ' . $units[$pow];
    }
}
