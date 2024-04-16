<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Indicativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Indicativo', function (Blueprint $table){
            $table->increments('indPk');
            $table->unsignedBigInteger('indObjEstFk')->references('objEstPk')->on('ObjetivosEstrategico');
            $table->string('indDescricao');
            $table->integer('indSequencia');
            $table->boolean('indAcompanhamento'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
