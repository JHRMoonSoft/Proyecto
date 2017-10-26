<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesAlmacen extends Model
{
    protected $table = 'acciones_almacens';
	
	protected $fillable = ['des_acc_alm', 'tip_acc_alm'];
	
	public function registros()
    {
		return $this->hasMany('RegistroAlmacen');
	}
	
}
