<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenispegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenispegawais') -> insert([
            'id' => '1',
            'nama_jenispegawai' => 'Tetap',
        ]);

        DB::table('jenispegawais') -> insert([
            'id' => '2',
            'nama_jenispegawai' => 'Kontrak',
        ]);
    }
}
