<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosolicitudcompra extends Model
{
    protected $table = 'productosolicitudcompras';	
	
	protected $fillable = ['sol_comp_id','cant_sol_prd', 'prod_id','unidad_emp_id'];

	
	public function producto(){
	     return $this->belongsTo('App\Producto', 'prod_id');
	}
	
	public function solicitudcompra(){
	     return $this->belongsTo('App\Solicitudcompra', 'sol_comp_id');
	}
	
	public function unidad_solicitada(){
	     return $this->belongsTo('App\Unidad', 'unidad_emp_id');
	}
	

}