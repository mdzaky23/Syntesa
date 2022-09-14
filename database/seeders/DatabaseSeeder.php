<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PegawaiTableSeeder::class,
            DivisiTableSeeder::class,
            GolonganTableSeeder::class,
            JabatanTableSeeder::class,
            JenispegawaiTableSeeder::class,
            PendidikanTableSeeder::class,
            UangsakuTableSeeder::class,
        ]);
    }
}
