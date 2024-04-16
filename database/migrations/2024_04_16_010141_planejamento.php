<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Planejamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Planejamento', function (Blueprint $table) {
            $table->increments('plaPk');
            $table->string('plaDescricao');
            $table->date('plaDataInicio');
            $table->date('plaDataFinal');
            $table->boolean('plaPublicacao');
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
