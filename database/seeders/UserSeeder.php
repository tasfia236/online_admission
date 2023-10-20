<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Premier University',
            'email' => 'premieruniversity@gmail.com',
            'password' => '123456',
            'number' => '01845632456',
            'role' => 'Super Admin',
        ]);
    }
}