<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table with the default admin user.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]
        );
    }
}
