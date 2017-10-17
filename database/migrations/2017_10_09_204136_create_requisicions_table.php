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
			$table->double('rol_rqs');
			$table->double('asn_rqs');
			$table->double('jst_rqs');
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
