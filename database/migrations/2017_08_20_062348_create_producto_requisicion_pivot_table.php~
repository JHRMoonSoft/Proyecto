<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoRequisicionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_requisicion', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');

            $table->integer('requisicion_id')->unsigned()->index();
            $table->foreign('requisicion_id')->references('id')->on('requisicion')->onDelete('cascade');

            $table->integer('und_id')->unsigned()->index();
            $table->foreign('und_id')->references('id')->on('unidad')->onDelete('cascade');

            $table->double('cnt_prd');

            $table->primary(['producto_id', 'requisicion_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto_requisicion');
    }
}
