<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_booking')->index();
            $table->unsignedBigInteger('id_studio')->index();
            $table->integer('ruangan');
            $table->date('tanggal');
            $table->time('start');
            $table->time('end');
            $table->timestamps();

            $table->foreign('id_booking')->references('id')->on('booking')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('table_rooms');
    }
}
