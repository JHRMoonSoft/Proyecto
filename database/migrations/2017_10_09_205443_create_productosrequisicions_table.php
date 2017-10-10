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
			$table->double('cant_prd');
			$table->string('det_prd');
			
			$table->integer('rqs_id')->unsigned()->index();
            $table->foreign('rqs_id')->references('id')->on('requisicions') ->onUpdate('cascade') ->onDelete('cascade');
						  
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
        Schema::dropIfExists('productosrequisicions');
    }
}
