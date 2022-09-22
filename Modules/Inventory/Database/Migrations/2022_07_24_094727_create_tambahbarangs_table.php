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
        Schema::create('tambahbarangs', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_inventaris')->nullable();
            $table->string('nama_brg');
            $table->string('merk_brg');
            $table->string('jumlah_brg');
            $table->string('harga_brg');
            $table->string('kategori_id');
            $table->string('lampiran')->nullable();
            $table->string('tipe_brg');
            $table->string('kategori_lokasi');
            $table->string('ruangan_lokasi');
            $table->string('lantai_lokasi');
            $table->string('tgl_beli');
            $table->string('tgl_peremajaan')->nullable();
            $table->string('umur_ekonomi');
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
        Schema::dropIfExists('tambahbarangs');
    }
};
