<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';	
	protected $fillable = ['lot_prd','no_fact','cnp_fact','comp_fact','form_pag','tim_entr','otr_fact','subt_fact','iva_fact','tol_fact','obv_fact'];
		
	public function ordencompra()
	{
	    return $this->hasMany('OrdenCompra');
	}
	
	public function empresa()
	{
	    return $this->belongsTo('Configuracion');
	}
}
