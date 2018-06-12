<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlogicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlogicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poa_id')->unsigned()->unique();
            $table->string('tipo',100);
            $table->string('resumen');
            $table->string('indicadores',100);
            $table->string('mverificacion');
            $table->string('supuestos');            
            $table->foreign('poa_id')
                  ->references('id')
                  ->on('poas')
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
        Schema::dropIfExists('mlogicos');
    }
}
