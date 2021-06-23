<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBobot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot', function (Blueprint $table) {
            $table->id();
            $table->double('kelengkapan_alat');
            $table->double('kualitas_alat');
            $table->double('kualitas_ruangan');
            $table->double('harga');
            $table->double('pelayanan');
            $table->double('fasilitas');
            $table->double('waktu_operasional');
            $table->double('suasana_studio');
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
        Schema::dropIfExists('bobot');
    }
}
