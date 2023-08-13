<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'r_name' => 'Bilik Mesyuarat 1',
            'r_type' => 'Bilik',
            'r_capacity' => '10',
            'r_facility' => 'Meja=1, Kerusi=10, Projektor=1',
            'r_description' => 'Bilik Mesyuarat 1',
            'r_is_available' => '1',
        ]);
        DB::table('rooms')->insert([
            'r_name' => 'Bilik Mesyuarat 2',
            'r_type' => 'Bilik',
            'r_capacity' => '20',
            'r_facility' => 'Meja=2, Kerusi=20, Projektor=1',
            'r_description' => 'Bilik Mesyuarat 2',
            'r_is_available' => '1',
        ]);
        DB::table('rooms')->insert([
            'r_name' => 'Bilik Mesyuarat 3',
            'r_type' => 'Bilik',
            'r_capacity' => '20',
            'r_facility' => 'Meja=10, Kerusi=20, Projektor=1',
            'r_description' => 'Bilik Mesyuarat 3',
            'r_is_available' => '1',
        ]);
        DB::table('rooms')->insert([
            'r_name' => 'Dewan Kuliah 1',
            'r_type' => 'Dewan',
            'r_capacity' => '200',
            'r_facility' => 'Meja=50, Kerusi=200, Projektor=2',
            'r_description' => 'Dewan Kuliah 1',
            'r_is_available' => '1',
        ]);
        DB::table('rooms')->insert([
            'r_name' => 'Dewan Kuliah 2',
            'r_type' => 'Dewan',
            'r_capacity' => '200',
            'r_facility' => 'Meja=50, Kerusi=200, Projektor=2',
            'r_description' => 'Dewan Kuliah 2',
            'r_is_available' => '1',
        ]);
    }
}
