<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    //
	protected $table = 'Almacen';
	
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
