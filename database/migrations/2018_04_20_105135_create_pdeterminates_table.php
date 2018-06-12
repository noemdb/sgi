<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdeterminatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdeterminantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproblema_id')->unsigned();
            $table->string('determinante');
            $table->timestamps();
            $table->foreign('mproblema_id')
                  ->references('id')
                  ->on('mproblemas')
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
        Schema::dropIfExists('pdeterminantes');
    }
}
