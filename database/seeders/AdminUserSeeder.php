<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@butimba.ac.tz'],
            [
                'name' => 'System Administrator',
                'phone' => '255689363690',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('Butimba@2026'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'teacher@butimba.ac.tz'],
            [
                'name' => 'Sample Teacher',
                'phone' => '255653144677',
                'role' => 'teacher',
                'status' => 'active',
                'password' => Hash::make('Teacher@2026'),
            ]
        );
    }
}
