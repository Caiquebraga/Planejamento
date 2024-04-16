<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfericaoAcompanhamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AfericaoAcompanhamento', function (Blueprint $table){
            $table->increments('afeAcoPk');
            $table->unsignedBigInteger('afeAcoAcoFk')->references('AcoPk')->on('Acompanhamento');
            $table->unsignedBigInteger('afeAcoIndAfeFk')->references('indAfePk')->on('IndicativoAfericao');
            $table->decimal('afeAcoResultado');
            $table->unsignedBigInteger('afeAcoEnviadoAssFk')->references('assPk')->on('Assinatura');
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
