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
            $table->string('pegawai_id')->nullable();
            $table->string('jabatan_id')->nullable();
            $table->string('lama_cuti')->nullable();
            $table->string('tgl_cuti')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('serah_tugas')->nullable();
            $table->string('jumlah_cuti')->nullable();
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
