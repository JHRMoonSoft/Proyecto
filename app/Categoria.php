<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';	
	protected $fillable = array('des_cat');
	public function productos()
    	{
	        return $this->hasMany('Producto');
	}
}
