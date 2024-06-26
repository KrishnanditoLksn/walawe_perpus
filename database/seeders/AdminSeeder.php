<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'User Aldi',
                'email' => 'user1@example.com',
                'password' => Hash::make('123456'),
            ],
            // Anda dapat menambahkan data user lainnya di sini
        ];
        DB::table('users')->insert($users);
    }
}
