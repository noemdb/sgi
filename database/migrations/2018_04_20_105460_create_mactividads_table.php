<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMactividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mactividads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mproducto_id')->unsigned();
            $table->integer('responsable_id')->unsigned();
            // $table->integer('frecuencia_id')->unsigned();
            $table->integer('ractividada_id')->unsigned()->nullable();
            $table->string('descripcion');
            $table->string('ubicaion');
            // $table->date('finicial');
            // $table->date('ffinal');
            // $table->integer('frecuencia');
            $table->enum('frecuencia', ["1", "2", "3", "4", "6", "12"]);
            $table->timestamps();
            $table->foreign('mproducto_id')
                  ->references('id')
                  ->on('mproductos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('responsable_id')
                  ->references('id')
                  ->on('responsables')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            // $table->foreign('frecuencia_id')
                  // ->references('id')
                  // ->on('afrecuencias')
                  // ->onDelete('cascade')
                  // ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mactividads');
    }
}
