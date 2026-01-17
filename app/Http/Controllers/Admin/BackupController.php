<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    protected string $backupPath;
    protected string $databasePath;

    public function __construct()
    {
        $this->backupPath = storage_path('app' . DIRECTORY_SEPARATOR . 'backups');
        $this->databasePath = database_path('database.sqlite');

        // Ensure backup directory exists
        if (!File::isDirectory($this->backupPath)) {
            File::makeDirectory($this->backupPath, 0755, true);
        }
    }

    public function index()
    {
        $backups = $this->getBackups();
        $databaseSize = File::exists($this->databasePath)
            ? $this->formatBytes(File::size($this->databasePath))
            : 'N/A';

        return view('admin.backups.index', compact('backups', 'databaseSize'));
    }

    public function create()
    {
        try {
            if (!File::exists($this->databasePath)) {
                return back()->with('error', 'Database bestand niet gevonden.');
            }

            $filename = 'backup_' . date('Y-m-d_H-i-s') . '.sqlite';
            $destination = $this->backupPath . DIRECTORY_SEPARATOR . $filename;

            File::copy($this->databasePath, $destination);

            return back()->with('success', 'Backup succesvol aangemaakt: ' . $filename);
        } catch (\Exception $e) {
            return back()->with('error', 'Backup maken mislukt: ' . $e->getMessage());
        }
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
            // Create a backup of current database before restoring
            $preRestoreBackup = 'pre_restore_' . date('Y-m-d_H-i-s') . '.sqlite';
            File::copy($this->databasePath, $this->backupPath . DIRECTORY_SEPARATOR . $preRestoreBackup);

            // Restore the backup
            File::copy($filepath, $this->databasePath);

            return back()->with('success', 'Database succesvol hersteld vanuit: ' . $filename . '. Een backup van de vorige staat is opgeslagen als: ' . $preRestoreBackup);
        } catch (\Exception $e) {
            return back()->with('error', 'Herstellen mislukt: ' . $e->getMessage());
        }
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
        // Only allow .sqlite files and prevent directory traversal
        return preg_match('/^[a-zA-Z0-9_\-]+\.sqlite$/', $filename) === 1;
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
