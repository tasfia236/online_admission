<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admissions')->insert([
            'session' => 'spring'
        ]);
        DB::table('admissions')->insert([
            'session' => 'fall'
        ]);
    }
}