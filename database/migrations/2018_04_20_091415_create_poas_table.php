<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_id')->unsigned();
            $table->string('descripcion',1024);
            $table->string('objhistorico',1024);
            $table->string('objnacional',1024);
            $table->string('objestrategico',1024);
            $table->string('area')->nullable();;
            $table->string('estrategia',1024)->nullable();;            
            $table->year('periodo');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('institucion_id')
                  ->references('id')
                  ->on('institucions')
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
        Schema::dropIfExists('poas');
    }
}
