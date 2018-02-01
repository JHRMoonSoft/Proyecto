<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_almacens', function (Blueprint $table) {
            $table->increments('id');
			$table->date('fec_reg');
			$table->string('obs_reg');
			$table->double('cnt_prd');			
            $table->integer('lot_prd');
			$table->date('fec_ven')->nullable();
			$table->integer('almacen_id')->unsigned()->index();
            $table->foreign('almacen_id')->references('id')->on('almacens')->onDelete('cascade');
			
			
			$table->integer('accion_id')->unsigned()->index();
            $table->foreign('accion_id')->references('id')->on('acciones_almacens')->onDelete('cascade');
            
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
        Schema::dropIfExists('registro_almacens');
    }
}
