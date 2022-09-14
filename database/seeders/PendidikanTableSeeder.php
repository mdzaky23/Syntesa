<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikans') -> insert([
            'id' => '1',
            'nama_pendidikan' => 'SMA',
        ]);

        DB::table('pendidikans') -> insert([
            'id' => '2',
            'nama_pendidikan' => 'D3',
        ]);

        DB::table('pendidikans') -> insert([
            'id' => '3',
            'nama_pendidikan' => 'S1',
        ]);

        DB::table('pendidikans') -> insert([
            'id' => '4',
            'nama_pendidikan' => 'S2',
        ]);
    }
}
