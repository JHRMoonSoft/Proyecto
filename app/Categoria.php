<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';	
	
	protected $fillable = array('des_cat');
	
	public function productos(){
		//Ok
	     return $this->hasMany('Producto');
	}
	
	public function proveedores(){
		//Ok
		return $this->belongsToMany('Proveedor','categoriaproveedors');
	
	}
	
}
