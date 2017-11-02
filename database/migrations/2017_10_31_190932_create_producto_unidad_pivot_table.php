<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoUnidadPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_unidad', function (Blueprint $table) {
            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->integer('unidad_id')->unsigned()->index();
            $table->foreign('unidad_id')->references('id')->on('unidads')->onDelete('cascade');
            $table->primary(['producto_id', 'unidad_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto_unidad');
    }
}
