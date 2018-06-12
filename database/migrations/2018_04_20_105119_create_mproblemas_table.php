<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproblemas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poa_id')->unsigned();
            $table->integer('direccion_id')->unsigned();
            $table->string('problema');
            $table->foreign('poa_id')
                  ->references('id')
                  ->on('poas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('direccion_id')
                  ->references('id')
                  ->on('direccions')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('mproblemas');
    }
}
