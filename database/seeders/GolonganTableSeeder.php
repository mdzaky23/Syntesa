<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GolonganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('golongans') -> insert([
            'id' => '1',
            'pendidikan_id' => '1',
            'masa_kerja' => '0',
            'nama_golongan' => 'A1',
            'gaji' => '1986934',
        ]);
    }
}
