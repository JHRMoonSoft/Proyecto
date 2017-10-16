<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosordencompra extends Model
{
    protected $table = 'productosordencompras';	
	protected $fillable = array('cant_prd','iva_unt','val_unt','val_tol','fec_ven');
	
	public function productos(){
	     return $this->hasMany('Producto');
	}
	public function ordencompra(){
	     return $this->hasMany('Ordencompra');
	}
	public function conversion(){
	     return $this->hasMany('Conversion');
	}
}
