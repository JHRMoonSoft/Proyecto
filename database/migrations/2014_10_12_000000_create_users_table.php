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
			$table->string('num_doc');
			$table->string('nom_usr');
			$table->string('ape_usr');
			$table->string('usuario')->unique();
			$table->string('crg_usr');
			$table->string('tip_dep');
			$table->string('dep_usr');
			$table->string('crd_usr');
			$table->string('tel_fij');
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
