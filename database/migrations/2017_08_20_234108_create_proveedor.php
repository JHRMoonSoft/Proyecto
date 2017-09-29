<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('raz_soc');
			$table->string('tip_doc');
			$table->string('num_doc');
			$table->string('tel_fij');
			$table->string('tel_cel');
			$table->string('dir_mail');
			$table->string('dir_prov');
			$table->string('brr_prov');
			$table->string('ciu_prov');
			$table->string('pai_prov');
			$table->string('obs_prov');
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
        Schema::dropIfExists('proveedor');
    }
}
