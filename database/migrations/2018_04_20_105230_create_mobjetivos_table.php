<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobjetivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproblema_id')->unsigned();
            $table->string('objetivo');
            $table->foreign('mproblema_id')
                  ->references('id')
                  ->on('mproblemas')
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
        Schema::dropIfExists('mobjetivos');
    }
}
