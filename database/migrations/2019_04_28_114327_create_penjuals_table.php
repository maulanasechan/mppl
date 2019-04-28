<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('nama_usaha');
            $table->string('alamat'); 
            $table->string('foto_usaha');
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
        Schema::dropIfExists('penjuals');
    }
}
