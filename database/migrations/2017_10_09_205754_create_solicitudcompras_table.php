<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudcomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudcompras', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			
			$table->string('asn_scp');
			
			$table->string('obv_scp');
			
			$table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users') ->onUpdate('cascade')->onDelete('cascade');
			
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
        Schema::dropIfExists('solicitudcompras');
    }
}
