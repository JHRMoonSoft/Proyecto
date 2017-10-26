<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidads';
	
	protected $fillable = array('des_und');

	public function productos()
	{
    	return $this->hasMany('Producto');
	}
	
	public function conversions()
    {
		return $this->hasMany('Conversion');
	}
	
}
