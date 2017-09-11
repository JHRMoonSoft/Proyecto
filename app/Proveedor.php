<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
	protected $table = 'Proveedor';
	
	protected $fillable = array('des_prv');

	public function ordenes_compra()
	{
    		return $this->hasMany('OrdenCompra');
	}


}
