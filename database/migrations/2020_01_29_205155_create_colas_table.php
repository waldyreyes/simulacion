<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajero1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->timestamps();
        });

        Schema::create('cajero2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->timestamps();
        });
        Schema::create('cajero3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->timestamps();
        });
        Schema::create('cajero4s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
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
        Schema::dropIfExists('cajero1s');
        Schema::dropIfExists('cajero2s');
        Schema::dropIfExists('cajero3s');
        Schema::dropIfExists('cajero4s');
    }
}
