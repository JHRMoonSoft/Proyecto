<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';	
	protected $fillable = ['lot_prd','no_fact','prov_id','cnp_fact','comp_fact','form_pag','tim_entr','dia_cred','otr_fact','subt_fact','iva_fact','tol_fact','obv_fact'];
		
	public function ordencompra()
	{
	    return $this->hasMany('App\OrdenCompra');
	}
	
	public function proveedor()
	{//Ok
	    return $this->belongsTo('App\Proveedor', 'prov_id');
	}
	
	public function productosordencompra()
	{
	    return $this->hasMany('App\ProductosOrdenCompra', 'fact_id');
	}
	
	public function empresa()
	{
	    return $this->belongsTo('App\Configuracion');
	}
}
