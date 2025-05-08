<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'newadmin@komodo.com'],
            [
                'name' => 'Komodo Admin',
                'password' => Hash::make('password1234'),
                'is_admin' => true,
            ]
        );
    }
}
