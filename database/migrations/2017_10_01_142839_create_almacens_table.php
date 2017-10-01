<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->double('cnt_prd');
            $table->integer('lot_prd');
            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');
            $table->integer('unidad_id')->unsigned()->index();
            $table->foreign('unidad_id')->references('id')->on('unidad')->onDelete('cascade');
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
        Schema::dropIfExists('almacens');
    }
}
