<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObjetivosEstrategico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ObjetivosEstrategico', function (Blueprint $table) {
            $table->increments('objEstPk');
            $table->unsignedBigInteger('objEstPlaFk')->references('plaPk')->on('Planejamento');
            $table->integer('objEstSequencial');
            $table->string('objEstDescricao');
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
