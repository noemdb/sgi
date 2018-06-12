<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestarias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobjetivo_id')->unsigned();
            $table->string('descripcion');
            $table->string('programa');
            $table->enum('asignacion', ['TOTAL', 'ORDINARIO']);
            // $table->string('asignacion');
            $table->timestamps();
            $table->foreign('mobjetivo_id')
                  ->references('id')
                  ->on('mobjetivos')
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
        Schema::dropIfExists('presupuestarias');
    }
}
