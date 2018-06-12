<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aestados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mactividad_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('estado', ['INICIADA', 'REPROGRAMADA', 'FINALIZADA']);
            $table->timestamps();
            $table->foreign('mactividad_id')
                  ->references('id')
                  ->on('mactividads')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('aestados');
    }
}
