<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais') -> insert([
            'id' => '1',
            'nip' => '15007201',
            'nama_pegawai' => 'SUPRIADI JUFRI, SE., MM.',
            'alamat' => 'KP PAWENANG RT/RW 003/004  KADEMANGAN  MANDE CIANJUR',
            'tp_lahir' => '',
            'tgl_lahir' => '22/09/1972',
            'pendidikan_id' => '3',
            'jk' => 'LAKI-LAKI',
            'tgl_masuk' => '05/01/2015',
            'jenispegawai_id' => '',
            'tgl_pengangkatan' => '',
            'jabatan_id' => '1',
            'divisi_id' => '1',
            'golongan_id' => '',
            'no_hp' => '082292450001',
            'uangsaku_id' => '1',
            'user_id' => '1',
        ]);

        DB::table('pegawais') -> insert([
            'id' => '2',
            'nip' => '150079021',
            'nama_pegawai' => 'AMINUDIN, S.TP., M.Si.',
            'alamat' => 'PERUM BOGOR VIEW B-11 JL KALIMAYA RT/RW 005/002 SEMPLAK BOGOR',
            'tp_lahir' => '',
            'tgl_lahir' => '10/10/1979',
            'pendidikan_id' => '4',
            'jk' => 'LAKI-LAKI',
            'tgl_masuk' => '05/01/2015',
            'jenispegawai_id' => '',
            'tgl_pengangkatan' => '',
            'jabatan_id' => '2',
            'divisi_id' => '4',
            'golongan_id' => '',
            'no_hp' => '08111193931',
            'uangsaku_id' => '2',
            'user_id' => '2',
        ]);

        DB::table('pegawais') -> insert([
            'id' => '3',
            'nip' => '15006603',
            'nama_pegawai' => 'IR. IVAN FADILLA',
            'alamat' => 'JL. PASO NO. 60 RT/RW 005/004 JAGAKARSA JAKARTA',
            'tp_lahir' => '',
            'tgl_lahir' => '24/11/1966',
            'pendidikan_id' => '3',
            'jk' => 'LAKI-LAKI',
            'tgl_masuk' => '05/01/2015',
            'jenispegawai_id' => '',
            'tgl_pengangkatan' => '',
            'jabatan_id' => '2',
            'divisi_id' => '3',
            'golongan_id' => '',
            'no_hp' => '0816820145',
            'uangsaku_id' => '2',
            'user_id' => '3',
        ]);

        DB::table('pegawais') -> insert([
            'id' => '4',
            'nip' => '170169020',
            'nama_pegawai' => 'SUDRAJAT',
            'alamat' => 'JL. PINUS BARAT V BLOK B N0.2 RT/RW 001/024 PAMULANG TANGERANG SELATAN',
            'tp_lahir' => '',
            'tgl_lahir' => '10/06/1969',
            'pendidikan_id' => '3',
            'jk' => 'LAKI-LAKI',
            'tgl_masuk' => '06/11/2017',
            'jenispegawai_id' => '1',
            'tgl_pengangkatan' => '01/10/2020',
            'jabatan_id' => '3',
            'divisi_id' => '5',
            'golongan_id' => '',
            'no_hp' => '087884499066',
            'uangsaku_id' => '3',
            'user_id' => '4',
        ]);

        DB::table('pegawais') -> insert([
            'id' => '5',
            'nip' => '160176010',
            'nama_pegawai' => 'AGUNG DJATIWALUJO',
            'alamat' => 'TAMAN CIMANGGU BLOK Q10 NO.4 RT/RW 006/001 TANAH SAREAL BOGOR',
            'tp_lahir' => '',
            'tgl_lahir' => '24/01/1976',
            'pendidikan_id' => '4',
            'jk' => 'LAKI-LAKI',
            'tgl_masuk' => '04/04/2016',
            'jenispegawai_id' => '1',
            'tgl_pengangkatan' => '01/04/2020',
            'jabatan_id' => '4',
            'divisi_id' => '3',
            'golongan_id' => '',
            'no_hp' => '085892679054',
            'uangsaku_id' => '4',
            'user_id' => '5',
        ]);
    }
}
