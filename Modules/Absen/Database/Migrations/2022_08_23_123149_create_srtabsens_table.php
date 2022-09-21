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
        Schema::create('srtabsens', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama_pegawai')->nullable();
            $table->string('kategori')->nullable();
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('srtabsens');
    }
};
