<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Mas Admin',
                'username' => 'admin',
                'email' => 'admin@fajarr.tech',
                'level' => 'admin',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Mas Manajemen',
                'username' => 'manajemen',
                'email' => 'manajemen@fajarr.tech',
                'level' => 'manajemen',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Mas Peminjam',
                'username' => 'peminjam',
                'email' => 'peminjam@fajarr.tech',
                'level' => 'peminjam',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
