<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('rol_rqs')->unsigned()->index();
			$table->foreign('rol_rqs')->references('id')->on('roles') ->onUpdate('cascade') ->onDelete('cascade');
			$table->string('asn_rqs');
			$table->string('jst_rqs');
			$table->boolean('tip_sol')->default(false);
			$table->boolean('apr_com')->default(false);
			$table->date('fec_apr_com')->nullable();
			$table->boolean('prv_apr')->default(false);
			$table->string('nom_rcp_rqs')->nullable();
			$table->string('crg_rcp_rqs')->nullable();
			$table->date('fec_rcp_rqs')->nullable();
			$table->string('obs_rcp_rqs')->nullable();
			
			$table->integer('area_id')->unsigned()->index();
            $table->foreign('area_id')->references('id')->on('areas') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('cargo_id')->unsigned()->index();
            $table->foreign('cargo_id')->references('id')->on('cargos') ->onUpdate('cascade') ->onDelete('cascade');
			
			$table->integer('est_rqs')->unsigned()->index();
            $table->foreign('est_rqs')->references('id')->on('estadosrequisicions') ->onUpdate('cascade') ->onDelete('cascade');
			
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
        Schema::dropIfExists('requisicions');
    }
}
