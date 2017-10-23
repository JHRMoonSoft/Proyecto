<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionesAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones_almacens', function (Blueprint $table) {
            $table->increments('id');
			$table->string('des_acc_alm');
			$table->integer('tip_acc_alm'); //Tipo 1: Entrada(Suma) - Tipo 2: Salida(Resta)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acciones_almacens');
    }
}
