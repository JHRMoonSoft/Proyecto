<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosolicitudcomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosolicitudcompras', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			
			$table->double('cant_sol_prd');
			
			$table->integer('sol_comp_id')->unsigned()->index();
            $table->foreign('sol_comp_id')->references('id')->on('solicitudcompras') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('prod_id')->unsigned()->index();
            $table->foreign('prod_id')->references('id')->on('productos') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('unidad_emp_id')->unsigned()->index();
            $table->foreign('unidad_emp_id')->references('id')->on('unidads') ->onUpdate('cascade') ->onDelete('cascade');
			
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
        Schema::dropIfExists('productosolicitudcompras');
    }
}
