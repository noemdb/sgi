<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('afrecuencia_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('afrecuencia_id')
                  ->references('id')
                  ->on('afrecuencias')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funidads');
    }
}
