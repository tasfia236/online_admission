<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            [
                'name' => 'Dhaka'
            ],
            [
                'name' => 'Chattrogram'
            ],
            [
                'name' => 'Sylhet'
            ],
            [
                'name' => 'Barishal'
            ],
            [
                'name' => 'Khulna'
            ],
            [
                'name' => 'Mymensingh'
            ],
            [
                'name' => 'Rajshahi'
            ],
            [
                'name' => 'Rangpur'
            ],

        ]);
    }
}