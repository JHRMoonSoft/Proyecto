<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosrequisicion extends Model
{
    protected $table = 'productosrequisicions';	
	protected $fillable = array('cant_prd','det_prd');
	
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
