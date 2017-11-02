<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->double('cnt_ini_prd')->default(1.0);

            $table->integer('unidad_inicial_id')->unsigned()->index();
            $table->foreign('unidad_inicial_id')->references('id')->on('unidads') ->onUpdate('cascade') ->onDelete('cascade');

            $table->double('cnt_fin_prd');

            $table->integer('unidad_final_id')->unsigned()->index();
            $table->foreign('unidad_final_id')->references('id')->on('unidads') ->onUpdate('cascade') ->onDelete('cascade');

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
        Schema::dropIfExists('conversions');
    }
}
