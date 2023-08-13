<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'r_name' => 'admin',
            'r_role' => '1',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'ketua jabatan',
            'r_role' => '2',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'pegawai kenderaan',
            'r_role' => '3',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'admin kenderaan',
            'r_role' => '4',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'setiausaha kenderaan',
            'r_role' => '5',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'setiausaha mesyuarat',
            'r_role' => '6',
        ]);

        DB::table('roles')->insert([
            'r_name' => 'staff',
            'r_role' => '7',
        ]);
    }
}
