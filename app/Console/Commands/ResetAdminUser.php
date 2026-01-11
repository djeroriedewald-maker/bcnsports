<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ResetAdminUser extends Command
{
    protected $signature = 'admin:reset';
    protected $description = 'Reset the admin user credentials';

    public function handle()
    {
        $user = User::updateOrCreate(
            ['email' => 'djero@bcnsports.nl'],
            [
                'name' => 'Djero',
                'email' => 'djero@bcnsports.nl',
                'password' => bcrypt('Djero95586!@!'),
            ]
        );

        $this->info('Admin user reset successfully!');
        $this->info('Email: djero@bcnsports.nl');

        return Command::SUCCESS;
    }
}
