<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosordencomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosordencompras', function (Blueprint $table) {
          
		  $table->engine = 'InnoDB';
		   $table->increments('id');			
			$table->double('cant_prd');
			$table->double('iva_unt');
			$table->double('val_unt');
			$table->double('val_tol');
			$table->date('fec_ven');
			
			$table->integer('ord_comp_id')->unsigned()->index();
            $table->foreign('ord_comp_id')->references('id')->on('ordencompras') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('prod_sol_comp_id')->nullable()->unsigned()->index();
            $table->foreign('prod_sol_comp_id')->references('id')->on('productosolicitudcompras') ->onUpdate('cascade') ->onDelete('cascade');
			
			
			$table->integer('prod_id')->unsigned()->index();
            $table->foreign('prod_id')->references('id')->on('productos') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('unidad_emp_id')->unsigned()->index();
            $table->foreign('unidad_emp_id')->references('id')->on('conversions') ->onUpdate('cascade') ->onDelete('cascade');
			
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
        Schema::dropIfExists('productosordencompras');
    }
}
