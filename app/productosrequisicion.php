<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosRequisicion extends Model
{
    protected $table = 'productosrequisicions';	
	
	protected $fillable = ['prod_id', 'apr_prod','cant_sol_prd','cant_apr_prd','cant_entr_prd','cant_dif_prd', 'rqs_id', 'unidad_sol_id'];
	
	public function producto(){
	     return $this->belongsTo('App\Producto', 'prod_id');
	}
	
	public function requisicion(){
	     return $this->belongsTo('App\Requisicion', 'rqs_id');
	}
	
	public function unidad_solicitada(){
	     return $this->belongsTo('App\Unidad', 'unidad_sol_id');
	}
	
}
