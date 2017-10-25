<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesAlmacen extends Model
{
    protected $table = 'almacens';
	
	protected $fillable = array('des_acc_alm', 'tip_acc_alm');
}
