<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_predio');
            $table->foreign('id_predio')->references('id')->on('predios');
            $table->unsignedBigInteger('id_requisito');
            $table->foreign('id_requisito')->references('id')->on('requisitos');
            $table->date('data');
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
        Schema::dropIfExists('tabelas');
    }
}
