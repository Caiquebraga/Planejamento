<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndicativoSetor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IndicativoSetor', function (Blueprint $table) {
            $table->increments('indSetPk');
            $table->unsignedBigInteger('indSetIndFk')->references('indPk')->on('Indicativo');
            $table->unsignedBigInteger('indSetSetFk')->references('setPk')->on('Setor');
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
