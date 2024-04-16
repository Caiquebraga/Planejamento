<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndicativoAfericao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IndicativoAfericao', function (Blueprint $table){
            $table->increments('indAfePk');
            $table->unsignedBigInteger('indAfeIndFk')->references('indPk')->on('Indicativo');
            $table->unsignedBigInteger('indAfeAfeFk')->references('afePk')->on('Afericao');
            $table->unsignedBigInteger('indAfeMetFk')->references('metPK')->on('Metrica');
            $table->decimal('indAfeMeta', 18, 2);
            $table->decimal('indAfeResultado', 18, 2);
            $table->integer('indAfeEnviadoAssFk');
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
