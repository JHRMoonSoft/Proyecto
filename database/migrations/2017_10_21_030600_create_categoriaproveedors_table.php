<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaproveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoriaproveedors', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('categoria_id')->unsigned()->index();
            $table->foreign('categoria_id')->references('id')->on('categorias') ->onUpdate('cascade')->onDelete('cascade');
			
			$table->integer('proveedor_id')->unsigned()->index();
            $table->foreign('proveedor_id')->references('id')->on('proveedors') ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('categoriaproveedors');
    }
}
