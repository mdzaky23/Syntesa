<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UangsakuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uangsakus') -> insert([
            'id' => '1',
            'jabatan_id' => '1',
            'uang_saku' => '1500000',
            'uang_representatif' => '750000',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '2',
            'jabatan_id' => '2',
            'uang_saku' => '1400000',
            'uang_representatif' => '500000',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '3',
            'jabatan_id' => '3',
            'uang_saku' => '400000',
            'uang_representatif' => '',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '4',
            'jabatan_id' => '4',
            'uang_saku' => '400000',
            'uang_representatif' => '',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '5',
            'jabatan_id' => '5',
            'uang_saku' => '250000',
            'uang_representatif' => '',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '6',
            'jabatan_id' => '6',
            'uang_saku' => '125000',
            'uang_representatif' => '',
        ]);

        DB::table('uangsakus') -> insert([
            'id' => '7',
            'jabatan_id' => '7',
            'uang_saku' => '125000',
            'uang_representatif' => '',
        ]);
    }
}
