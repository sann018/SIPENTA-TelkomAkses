<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passwords = [
            'super_admin' => env('SEED_SUPER_ADMIN_PASSWORD'),
            'viewer' => env('SEED_VIEWER_PASSWORD'),
            'readonly' => env('SEED_READONLY_PASSWORD'),
        ];

        foreach ($passwords as $role => $password) {
            if (blank($password)) {
                throw new \RuntimeException("Missing seed password for {$role}. Set the corresponding SEED_* variable in .env.");
            }
        }

        // Create Super Admin
        User::updateOrCreate(
            ['email' => 'admin@telkom.co.id'],
            [
                'nama' => 'Super Admin',
                'username' => 'admin01',
                'kata_sandi' => Hash::make($passwords['super_admin']),
                'peran' => 'super_admin',
                'email_terverifikasi_pada' => now(),
            ]
        );

        // Create Admin/Viewer (CRUD proyek)
        User::updateOrCreate(
            ['email' => 'viewer@telkom.co.id'],
            [
                'nama' => 'Admin Viewer',
                'username' => 'viewer01',
                'kata_sandi' => Hash::make($passwords['viewer']),
                'peran' => 'viewer',
                'email_terverifikasi_pada' => now(),
            ]
        );

        // Create Read Only User (hanya lihat)
        User::updateOrCreate(
            ['email' => 'readonly@telkom.co.id'],
            [
                'nama' => 'User Read Only',
                'username' => 'readonly01',
                'kata_sandi' => Hash::make($passwords['readonly']),
                // Role legacy "read_only" tidak digunakan. Gunakan viewer (read-only akses).
                'peran' => 'viewer',
                'email_terverifikasi_pada' => now(),
            ]
        );

        $this->command->info('=== Users created successfully! ===');
        $this->command->info('');
        $this->command->info('Super Admin:');
        $this->command->info('  Email: admin@telkom.co.id');
        $this->command->info('  Username: admin01');
        $this->command->info('');
        $this->command->info('Admin/Viewer (CRUD Proyek):');
        $this->command->info('  Email: viewer@telkom.co.id');
        $this->command->info('');
        $this->command->info('Read Only (Lihat Saja):');
        $this->command->info('  Email: readonly@telkom.co.id');
    }
}
