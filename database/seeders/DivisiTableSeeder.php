<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('divisis') -> insert([
            'id' => '1',
            'nama_divisi' => 'Keuangan',
        ]);

        DB::table('divisis') -> insert([
            'id' => '2',
            'nama_divisi' => 'SDM dan Umum',
        ]);

        DB::table('divisis') -> insert([
            'id' => '3',
            'nama_divisi' => 'Operasional',
        ]);

        DB::table('divisis') -> insert([
            'id' => '4',
            'nama_divisi' => 'Umum dan Keuangan',
        ]);

        DB::table('divisis') -> insert([
            'id' => '5',
            'nama_divisi' => 'Keuangan dan Akuntansi',
        ]);

        DB::table('divisis') -> insert([
            'id' => '6',
            'nama_divisi' => 'IT dan Umum',
        ]);

        DB::table('divisis') -> insert([
            'id' => '7',
            'nama_divisi' => 'Umum (Security)',
        ]);

        DB::table('divisis') -> insert([
            'id' => '8',
            'nama_divisi' => 'Umum (Driver)',
        ]);

        DB::table('divisis') -> insert([
            'id' => '9',
            'nama_divisi' => 'Kerumahtanggaan',
        ]);

        DB::table('divisis') -> insert([
            'id' => '10',
            'nama_divisi' => 'Perusahaan',
        ]);

        DB::table('divisis') -> insert([
            'id' => '11',
            'nama_divisi' => 'Pengembangan Bisnis',
        ]);
    }
}
