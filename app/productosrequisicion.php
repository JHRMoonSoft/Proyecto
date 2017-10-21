<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosrequisicion extends Model
{
    protected $table = 'productosrequisicions';	
	protected $fillable = array('apr_prod','cant_sol_prd','cant_apr_prd','cant_entr_prd','cant_dif_prd');
	
	public function productos(){
	     return $this->hasMany('Producto');
	}
	public function requisicion(){
	     return $this->hasMany('Requisicion');
	}
	public function conversion(){
	     return $this->hasMany('Conversion');
	}
}
