<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';
	
	protected $fillable = array('cnt_prd', 'lot_prd');

	public function productos()
    	{
	        return $this->hasMany('Producto');
	}

	public function unidades()
    	{
	        return $this->hasMany('Unidad');
	}
}
