<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosRequisicion extends Model
{
    protected $table = 'productosrequisicions';	
	
	protected $fillable = ['apr_prod','cant_sol_prd','cant_apr_prd','cant_entr_prd','cant_dif_prd', 'rqs_id', 'unidad_sol_id'];
	
	public function productos(){
	     return $this->hasMany('App\Producto');
	}
	
	public function requisicion(){
	     return $this->hasMany('App\Requisicion');
	}
	
}
