<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Acompanhamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Acompanhamento', function (Blueprint $table) {
            $table->increments('acoPk');
            $table->unsignedBigInteger('acoAfeFk')->references('afePk')->on('Afericao');
            $table->string('acoDescricao');
            $table->date('acoDataInicial');
            $table->date('acoDataFinal');
            $table->date('acoPrazoInicial');
            $table->date('acoPrazoFinal');
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
