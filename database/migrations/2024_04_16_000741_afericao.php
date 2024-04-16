<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Afericao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Afericao', function (Blueprint $table) {
           $table->increments('afePk');
           $table->unsignedBigInteger('afePlaFk')->references('plaPk')->on('Planejamento');
           $table->string('afeDescricao');
           $table->date('afeDataInicial');
           $table-> date('afeDataFinal');    
           $table-> date('aferPrazoInicial');    
           $table-> date('afePrazoFinal');    
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
