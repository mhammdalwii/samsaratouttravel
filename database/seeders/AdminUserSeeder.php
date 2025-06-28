<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            // Mencari pengguna berdasarkan email ini
            ['email' => 'admin@komodo.com'],

            // Data yang akan dibuat atau diperbarui
            [
                'name' => 'Admin Komodo',
                'password' => Hash::make('adminkomodo2025*'),
                'is_admin' => true,
            ]
        );
    }
}
