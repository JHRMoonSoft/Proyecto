<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidads';
	
	protected $fillable = ['des_und'];

	public function productos()
	{
    	return $this->belongsToMany('App\Producto', 'producto_unidad')->withTimestamps();
	}
	
}
