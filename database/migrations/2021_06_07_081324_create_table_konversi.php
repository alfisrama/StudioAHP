<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKonversi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konversi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_studio')->primary('id_studio');
            $table->integer('kelengkapan_alat');
            $table->integer('kualitas_alat');
            $table->integer('kualitas_ruangan');
            $table->integer('harga');
            $table->integer('pelayanan');
            $table->integer('fasilitas');
            $table->integer('waktu_operasional');
            $table->integer('suasana_studio');
            $table->timestamps();

            $table->foreign('id_studio')->references('id')->on('studio')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konversi');
    }
}
