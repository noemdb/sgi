<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfrecuenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afrecuencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mactividad_id')->unsigned();
            $table->integer('cantidad');
            // $table->integer('lapso');
            $table->enum('lapso', ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"]);            
            // $table->enum('frecuencia', ['DIARIO', 'SEMALNAL', 'MENSUAL', 'BIMENSUAL', 'TRIMESTRAL', 'CUATRIMESTRAL', 'SEMESTRAL', 'ANUAL']);
            // $table->integer('frecuencia');
            // $table->date('finicial');
            // $table->date('ffinal');
            $table->timestamps();
            $table->foreign('mactividad_id')
                  ->references('id')
                  ->on('mactividads')
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
        Schema::dropIfExists('afrecuencias');
    }
}
