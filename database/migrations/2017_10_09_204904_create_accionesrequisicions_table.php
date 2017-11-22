<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionesrequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accionesrequisicions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('des_acc_rqs');
			
			$table->integer('est_rqs_id')->unsigned()->index();
            $table->foreign('est_rqs_id')->references('id')->on('estadosrequisicions') ->onUpdate('cascade')->onDelete('cascade');
			
			$table->integer('est_ant_rqs_id')->unsigned()->index()->nullable();
            $table->foreign('est_ant_rqs_id')->references('id')->on('estadosrequisicions') ->onUpdate('cascade')->onDelete('cascade');
			
			$table->integer('rol_asg_rqs_id')->unsigned()->index();
            $table->foreign('rol_asg_rqs_id')->references('id')->on('roles') ->onUpdate('cascade')->onDelete('cascade');
			           
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
        Schema::dropIfExists('accionesrequisicions');
    }
}
