<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('tipo_identidad');
			$table->string('no_identidad');
            $table->string('nombre');
			$table->string('apellido');
			$table->string('usuario')->unique();
			$table->string('cargo');
			$table->string('tipo_ dependencia');
			$table->string('dependencia');
			$table->string('coordinacion');
			$table->string('telefono_fijo');
			$table->string('telefono_celular');
            $table->string('direccion_email');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
