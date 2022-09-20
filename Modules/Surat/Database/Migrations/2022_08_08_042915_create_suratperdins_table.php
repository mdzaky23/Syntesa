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
        Schema::create('suratperdins', function (Blueprint $table) {
            $table->id();
            $table->string('no_suratperdin')->nullable();
            $table->string('tgl_suratperdin')->nullable();
            $table->string('dasar')->nullable();
            $table->string('nama1')->nullable();
            $table->string('nama2')->nullable();
            $table->string('nama3')->nullable();
            $table->string('nama4')->nullable();
            $table->string('nama5')->nullable();
            $table->string('nama6')->nullable();
            $table->string('nama7')->nullable();
            $table->string('nama8')->nullable();
            $table->string('nama9')->nullable();
            $table->string('nama10')->nullable();
            $table->string('nama11')->nullable();
            $table->string('nama12')->nullable();
            $table->string('nama13')->nullable();
            $table->string('nama14')->nullable();
            $table->string('nama15')->nullable();
            $table->string('nama16')->nullable();
            $table->string('nama17')->nullable();
            $table->string('nama18')->nullable();
            $table->string('nama19')->nullable();
            $table->string('nama20')->nullable();
            $table->string('jabatan1')->nullable();
            $table->string('jabatan2')->nullable();
            $table->string('jabatan3')->nullable();
            $table->string('jabatan4')->nullable();
            $table->string('jabatan5')->nullable();
            $table->string('jabatan6')->nullable();
            $table->string('jabatan7')->nullable();
            $table->string('jabatan8')->nullable();
            $table->string('jabatan9')->nullable();
            $table->string('jabatan10')->nullable();
            $table->string('jabatan11')->nullable();
            $table->string('jabatan12')->nullable();
            $table->string('jabatan13')->nullable();
            $table->string('jabatan14')->nullable();
            $table->string('jabatan15')->nullable();
            $table->string('jabatan16')->nullable();
            $table->string('jabatan17')->nullable();
            $table->string('jabatan18')->nullable();
            $table->string('jabatan19')->nullable();
            $table->string('jabatan20')->nullable();
            $table->string('untuk')->nullable();
            $table->string('waktu_mulai')->nullable();
            $table->string('waktu_selesai')->nullable();
            $table->string('jml_hari')->nullable();
            $table->string('tertanda')->nullable();
            $table->string('tertanda2')->nullable();
            $table->string('tertanda3')->nullable();
            $table->string('ttd')->nullable();
            $table->string('instansi')->nullable();
            $table->string('perihal')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('dokumen')->nullable();
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
        Schema::dropIfExists('suratperdins');
    }
};
