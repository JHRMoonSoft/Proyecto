<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosolicitudcompra extends Model
{
    protected $table = 'productosolicitudcompras';	
	protected $fillable = array('cant_sol_prd');
	
	public function productos(){
	     return $this->hasMany('Producto');
	}
	public function solicitudcompra(){
	     return $this->hasMany('Solicitudcompra');
	}
	public function conversion(){
	     return $this->hasMany('Conversion');
	}
}
