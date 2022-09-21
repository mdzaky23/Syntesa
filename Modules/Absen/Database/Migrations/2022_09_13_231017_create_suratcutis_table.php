<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratcutis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('divisi')->nullable();
            $table->string('lama_cuti')->nullable();
            $table->string('tgl_cuti')->nullable();
            $table->string('akhir_tgl_cuti')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('serah_tugas')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_atas')->nullable();
            $table->string('nip_atas')->nullable();
            $table->string('jabatan_atas')->nullable();
            $table->string('divisi_atas')->nullable();
            $table->string('jumlah_cuti')->nullable();
            $table->string('ambil_cuti')->nullable();
            $table->string('sisa_cuti')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratcutis');
    }
};
