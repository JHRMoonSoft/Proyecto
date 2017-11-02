<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('raz_soc');
			$table->string('tip_doc');
			$table->string('num_doc')->unique();
			$table->string('tel_fij');
			$table->string('tel_cel')->nullable();
			$table->string('dir_mail')->nullable();
			$table->string('dir_prov')->nullable();
			$table->string('brr_prov')->nullable();
			$table->string('ciu_prov')->nullable();
			$table->string('pai_prov')->nullable();
			$table->string('obs_prov')->nullable();
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
        Schema::dropIfExists('proveedors');
    }
}
