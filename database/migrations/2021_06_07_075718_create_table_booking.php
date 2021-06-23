<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_studio')->index();
            $table->unsignedBigInteger('id_users')->index();
            $table->integer('ruangan');
            $table->date('tanggal');
            $table->time('start');
            $table->time('end');
            $table->enum('pembayaran', ['Ditempat','Transfer'])->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();

            //setFK penjualan --- studio
            $table->foreign('id_studio')->references('id')->on('studio')->onDelete('cascade')->onUpdate('cascade');
            
            //setFK penjualan --- customer
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
        Schema::dropIfExists('booking');
    }
}
