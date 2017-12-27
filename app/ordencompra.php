<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
    protected $table = 'ordencompras';
	protected $fillable = ['no_ocp','cnp_ocp','aut_ocp','form_pag','dia_cred','tim_entr','otr_ocp','subt_ocp','iva_ocp','tol_ocp','obv_ocp'];
		
	public function empresa()
	{//Ok
	    return $this->belongsTo('Configuracion');
	}
	public function proveedor()
	{//Ok
	    return $this->belongsTo('Proveedor');
	}
	public function factura()
	{//Ok
	    return $this->belongsTo('Factura');
	}
	
	public function productos(){
		
		return $this->belongsToMany('App\Producto','productosordencompras')->withPivot('id');
	
	}
	
}
