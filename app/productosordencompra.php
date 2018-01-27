<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosordencompra extends Model
{
    protected $table = 'productosordencompras';	
	protected $fillable = array('cant_prd', 'cant_prd_fact','iva_unt','iva_unt_fact','val_unt','val_unt_fact','val_tol','val_tol_fact','unidad_emp_fact_id','fec_ven','prod_id','unidad_emp_id','ord_comp_id','prod_sol_comp_id', 'fact_id');

	public function producto(){
	     return $this->belongsTo('App\Producto', 'prod_id');
	}
	
	public function factura(){
	     return $this->belongsTo('App\Factura', 'fact_id');
	}
		
	public function unidad_solicitada(){
	     return $this->belongsTo('App\Unidad', 'unidad_emp_id');
	}
	
	public function unidad_solicitada_factura(){
	     return $this->belongsTo('App\Unidad', 'unidad_emp_fact_id');
	}
	
	public function ordencompra(){
	     return $this->belongsTo('App\Ordencompra', 'ord_comp_id');
	}
	
	public function productos_solicitud(){
	     return $this->belongsTo('App\ProductosSolicitudCompra', 'prod_sol_comp_id');
	}
}
