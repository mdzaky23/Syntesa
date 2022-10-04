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
        Schema::create('uangtunjangans', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan_id')->nullable();
            $table->string('uang_jabatan')->nullable();
            $table->string('uang_transport')->nullable();
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
        Schema::dropIfExists('uangtunjangans');
    }
};
