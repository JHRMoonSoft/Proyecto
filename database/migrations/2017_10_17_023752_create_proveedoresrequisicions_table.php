<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresrequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedoresrequisicions', function (Blueprint $table) {
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
            $table->boolean('est_prov'); // aprobado = true - rechazado = false
			// En el momento que sea true, buscar por num doc y si no esta, crear automaticamente. Controlador!
			$table->integer('rqs_id')->unsigned()->index();
            $table->foreign('rqs_id')->references('id')->on('requisicions') ->onUpdate('cascade') ->onDelete('cascade');
			
			
			
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
        Schema::dropIfExists('proveedoresrequisicions');
    }
}
