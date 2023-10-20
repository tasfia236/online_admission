<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'name' => 'Gazipur',
                'division_id' => 1
            ],
            [
                'name' => 'Narayanganj',
                'division_id' => 1
            ],
            [
                'name' => 'Rangamati',
                'division_id' => 2
            ],
            [
                'name' => 'Bandarban',
                'division_id' => 2
            ],
            [
                'name' => 'Sunamganj',
                'division_id' => 3
            ],
            [
                'name' => 'Sreemangal',
                'division_id' => 3
            ],            
            [
                'name' => 'Gaurnadi',
                'division_id' => 4
            ],
            [
                'name' => 'Banaripara',
                'division_id' => 4
            ],            
            [
                'name' => 'Paikgacha',
                'division_id' => 5
            ],
            [
                'name' => 'Chalna',
                'division_id' => 5
            ],            
            [
                'name' => 'Gauripur',
                'division_id' => 6
            ],
            [
                'name' => 'Fulbaria',
                'division_id' => 6
            ],            
            [
                'name' => 'Naohata',
                'division_id' => 7
            ],
            [
                'name' => 'Bhabaniganj',
                'division_id' => 7
            ],            
            [
                'name' => 'Pirganj',
                'division_id' => 8
            ],
            [
                'name' => 'Badarganj',
                'division_id' => 8
            ]
        ]);
    }
}