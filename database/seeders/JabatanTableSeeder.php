<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans') -> insert([
            'id' => '1',
            'nama_jabatan' => 'Direktur Utama',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '2',
            'nama_jabatan' => 'Direktur',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '3',
            'nama_jabatan' => 'Manager',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '4',
            'nama_jabatan' => 'Kepala Divisi',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '5',
            'nama_jabatan' => 'Junior Manager',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '6',
            'nama_jabatan' => 'Staff',
        ]);

        DB::table('jabatans') -> insert([
            'id' => '7',
            'nama_jabatan' => 'Sekretariat',
        ]);

    }
}
