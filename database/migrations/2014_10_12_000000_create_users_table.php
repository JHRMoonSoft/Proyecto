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
			$table->engine = 'InnoDB';
            $table->increments('id');
			$table->string('tip_doc');
			$table->string('num_doc')->unique();
			$table->string('nom_usr');
			$table->string('ape_usr');
			$table->string('usuario')->unique();
			//$table->string('crg_usr');
			$table->integer('crg_usr')->unsigned()->index();
            $table->foreign('crg_usr')->references('id')->on('cargos') ->onUpdate('cascade') ->onDelete('cascade');
			//$table->string('tip_dep');
			$table->integer('tip_dep')->unsigned()->index();
            $table->foreign('tip_dep')->references('id')->on('tipos_areas') ->onUpdate('cascade') ->onDelete('cascade');
			//$table->string('dep_usr');
			$table->integer('dep_usr')->unsigned()->index();
            $table->foreign('dep_usr')->references('id')->on('areas') ->onUpdate('cascade') ->onDelete('cascade');
			$table->string('crd_usr');
			$table->string('tel_fij')->nullable();
			$table->string('tel_cel');
			$table->string('dir_mail');
			$table->string('password');
			$table->boolean('sta_usr');
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
