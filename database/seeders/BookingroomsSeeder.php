<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingroomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '1',
            'br_name' => 'Nayi',
            'br_purpose' => 'Meeting',
            'br_participants' => '10',
            'br_date' => '2023-07-23',
            'br_slot' => 'morning',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'lulus',
        ]);
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '2',
            'br_name' => 'Nayi',
            'br_purpose' => 'Meeting',
            'br_participants' => '20',
            'br_date' => '2021-07-23',
            'br_slot' => 'morning',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'tak lulus',
        ]);
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '3',
            'br_name' => 'Nayi',
            'br_purpose' => 'Meeting',
            'br_participants' => '20',
            'br_date' => '2021-07-25',
            'br_slot' => 'morning',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'lulus',
        ]);
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '4',
            'br_name' => 'Nayi',
            'br_purpose' => 'Ceramah',
            'br_participants' => '200',
            'br_date' => '2021-07-25',
            'br_slot' => 'morning',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'lulus',
        ]);
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '4',
            'br_name' => 'Nayi',
            'br_purpose' => 'Ceramah',
            'br_participants' => '200',
            'br_date' => '2021-07-25',
            'br_slot' => 'evening',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'lulus',
        ]);
        DB::table('bookingrooms')->insert([
            'br_user_id' => '1',
            'br_room_id' => '5',
            'br_name' => 'Nayi',
            'br_purpose' => 'Ceramah',
            'br_participants' => '200',
            'br_date' => '2021-07-25',
            'br_slot' => 'morning',
            'br_status' => '2',
            'br_datestatus' => '2023-07-23',
            'br_description' => 'tak lulus',
        ]);
    }
}
