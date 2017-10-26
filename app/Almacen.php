<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';
	
	protected $fillable = array('cnt_prd', 'lot_prd','fec_ven');

	public function producto()
    {
		return $this->belongsTo('Producto');
	}

	public function unidad()
    {
		return $this->belongsTo('Unidad');
	}
	
	public function registros()
    {
		return $this->hasMany('RegistroAlmacen');
	}
}
