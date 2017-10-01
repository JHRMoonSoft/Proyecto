<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
	protected $table = 'configuracions';
	protected $fillable = array( 'tip_per' ,'raz_soc'	,'tip_doc'	,'num_doc'	,'tel_fij'	,'tel_cel'  ,'dir_mail' ,'dir_per' 	,'brr_per' 	,'ciu_per' 	,'pai_per'  );

	public function ordenes_compra()
	{
    		return $this->hasMany('OrdenCompra');
	}
}
