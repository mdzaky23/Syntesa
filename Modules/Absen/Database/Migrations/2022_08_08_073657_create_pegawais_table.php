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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama_pegawai')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tp_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('pendidikan_id')->nullable();
            $table->string('jk')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->string('jenispegawai_id')->nullable();
            $table->string('tgl_pengangkatan')->nullable();
            $table->string('jabatan_id')->nullable();
            $table->string('divisi_id')->nullable();
            $table->string('golongan_id')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('uangsaku_id')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('pegawais');
    }
};
