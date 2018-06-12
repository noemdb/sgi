<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePverificadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pverificadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproducto_id')->unsigned();
            $table->string('verificador');
            $table->timestamps();
            $table->foreign('mproducto_id')
                  ->references('id')
                  ->on('mproductos')
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
        Schema::dropIfExists('pverificadors');
    }
}
