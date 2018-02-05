<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';
	
	protected $fillable = array('cnt_prd','producto_id');

	public function producto()
    {
		return $this->belongsTo('App\Producto','producto_id');
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
