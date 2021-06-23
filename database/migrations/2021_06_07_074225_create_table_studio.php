<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studio', function (Blueprint $table) {
            $table->id();
            $table->string('nama_studio');
            $table->text('alamat');
            $table->string('telefon')->unique();
            $table->integer('jumlah_ruangan');
            $table->integer('fasilitas');
            $table->string('harga');
            $table->time('buka');
            $table->time('tutup');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_users')->index()->nullable();
            
            $table->timestamps();

             //setFK users
             $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studio');
    }
}
