<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
			$table->string('tip_per');
			$table->string('raz_soc');
			$table->string('tip_doc');
			$table->string('num_doc');
			$table->string('tel_fij');
			$table->string('tel_cel');
			$table->string('dir_mail');
			$table->string('dir_per');
			$table->string('brr_per');
			$table->string('ciu_per');
			$table->string('pai_per');
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
        Schema::dropIfExists('configuracions');
    }
}
