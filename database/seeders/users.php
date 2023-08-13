<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'ic' => '123456789011',
            'email' => 'admin@admin.com',
            'phone' => '12345678901',
            'staffid' => 'k001',
            'status' => '0',
            'department' => '1',
            'section' => '1',
            'role_id' => 1,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'syah',
            'ic' => '123456789012',
            'email' => 'syah@admin.com',
            'phone' => '12345678902',
            'staffid' => 'k002',
            'status' => '1',
            'department' => '1',
            'section' => '1',
            'role_id' => 1,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'ketua jambatan',
            'ic' => '123456789013',
            'email' => 'kjambatan@admin.com',
            'phone' => '123456789013',
            'staffid' => 'k003',
            'status' => '0',
            'department' => '2',
            'section' => '2',
            'role_id' => 2,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'pegawai kenderaan',
            'ic' => '123456789014',
            'email' => 'pkenderaan@admin.com',
            'phone' => '12345678904',
            'staffid' => 'k004',
            'status' => '0',
            'department' => '3',
            'section' => '3',
            'role_id' => 3,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin kenderaan',
            'ic' => '123456789015',
            'email' => 'akenderaan@admin.com',
            'phone' => '12345678905',
            'staffid' => 'k005',
            'status' => '0',
            'department' => '4',
            'section' => '4',
            'role_id' => 4,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'setiausaha kenderaan',
            'ic' => '123456789016',
            'email' => 'stukenderaan@admin.com',
            'phone' => '12345678906',
            'staffid' => 'k006',
            'status' => '0',
            'department' => '5',
            'section' => '5',
            'role_id' => 5,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'setiausaha mesyuarat',
            'ic' => '123456789017',
            'email' => 'stumesyuarat@admin.com',
            'phone' => '12345678907',
            'staffid' => 'k007',
            'status' => '0',
            'department' => '6',
            'section' => '6',
            'role_id' => 6,
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'staff',
            'ic' => '123456789018',
            'email' => 'staff@admin.com',
            'phone' => '12345678908',
            'staffid' => 'k008',
            'status' => '0',
            'department' => '7',
            'section' => '7',
            'role_id' => 7,
            'password' => Hash::make('1234'),
        ]);
    }
}
