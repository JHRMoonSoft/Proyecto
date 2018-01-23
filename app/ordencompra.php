<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table = 'ordencompras';
	protected $fillable = ['no_ocp','cnp_ocp','aut_ocp','form_pag','dia_cred','tim_entr','otr_ocp','subt_ocp','iva_ocp','tol_ocp','obv_ocp', 'empre_id', 'prov_id', 'user_id'];
		
	public function empresa()
	{//Ok
	    return $this->belongsTo('App\Configuracion','empre_id');
	}
	public function proveedor()
	{//Ok
	    return $this->belongsTo('App\Proveedor', 'prov_id');
	}
	public function factura()
	{//Ok
	    return $this->belongsTo('App\Factura');
	}
	
	public function productos(){
		
		return $this->belongsToMany('App\Producto','productosordencompras')->withPivot('id');
	
	}
	
}
