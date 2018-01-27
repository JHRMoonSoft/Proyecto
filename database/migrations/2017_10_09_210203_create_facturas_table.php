<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('no_fact')->nullable();
			$table->string('cnp_fact');
			$table->string('comp_fact');
			$table->string('form_pag');
			$table->string('tim_entr')->nullable();
			$table->string('dia_cred')->nullable();
			$table->string('otr_fact')->nullable();
			$table->double('subt_fact');
			$table->double('iva_fact');
			$table->double('tol_fact');
			$table->string('obv_fact')->nullable();
			
			$table->integer('ord_comp_id')->unsigned()->index();
            $table->foreign('ord_comp_id')->references('id')->on('ordencompras') ->onUpdate('cascade') ->onDelete('cascade');
			
			
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
        Schema::dropIfExists('facturas');
    }
}
