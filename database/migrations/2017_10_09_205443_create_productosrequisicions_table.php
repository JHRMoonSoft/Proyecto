<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosrequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosrequisicions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			
			$table->integer('rqs_id')->unsigned()->index();
            $table->foreign('rqs_id')->references('id')->on('requisicions') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('prod_id')->unsigned()->index()->nullable();
            $table->foreign('prod_id')->references('id')->on('productos') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->string('nom_prd')->nullable();
			$table->boolean('apr_prod')->default(false);
			
			$table->double('cant_sol_prd');
			$table->integer('unidad_sol_id')->unsigned()->index();
            $table->foreign('unidad_sol_id')->references('id')->on('unidads') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->double('cant_apr_prd')->default(0);
			$table->integer('unidad_apr_id')->unsigned()->index()->nullable();
            $table->foreign('unidad_apr_id')->references('id')->on('unidads') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->double('cant_entr_prd')->default(0);
			$table->integer('unidad_entr_id')->unsigned()->index()->nullable();
            $table->foreign('unidad_entr_id')->references('id')->on('conversions') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->double('cant_dif_prd')->default(0);
			
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
        Schema::dropIfExists('productosrequisicions');
    }
}
