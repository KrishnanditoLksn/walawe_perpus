<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admins = [
            ['id' => 1, 'nama_admin' => 'admin1', 'password' => 'admin123', 'email' => 'admin1@gmail.com'],
            ['id' => 2, 'nama_admin' => 'admin2', 'password' => 'admin456', 'email' => 'admin2@gmail.com'],
            ['id' => 3, 'nama_admin' => 'admin3', 'password' => 'admin789', 'email' => 'admin3@gmail.com'],
        ];
        DB::table('admin')->insert($admins);
    }
}
