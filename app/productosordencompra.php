<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosordencompra extends Model
{
    protected $table = 'productosordencompras';	
	protected $fillable = array('cant_prd','iva_unt','val_unt','val_tol','fec_ven');

	public function producto(){
	     return $this->belongsTo('App\Producto', 'prod_id');
	}
		
	public function unidad_solicitada(){
	     return $this->belongsTo('App\Unidad', 'unidad_emp_id');
	}
	
	public function ordencompra(){
	     return $this->belongsTo('App\Ordencompra', 'ord_comp_id');
	}
	public function productosSolicitud(){
	     return $this->belongsTo('App\ProductosSolicitudCompra', 'prod_sol_comp_id');
	}
}
