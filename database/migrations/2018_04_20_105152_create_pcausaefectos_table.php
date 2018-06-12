<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcausaefectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcausaefectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproblema_id')->unsigned();
            $table->string('causaefecto');
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
        Schema::dropIfExists('pcausaefectos');
    }
}
