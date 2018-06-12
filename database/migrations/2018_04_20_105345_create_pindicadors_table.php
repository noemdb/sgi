<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePindicadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindicadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproducto_id')->unsigned();
            $table->string('indicador');
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
        Schema::dropIfExists('pindicadors');
    }
}
