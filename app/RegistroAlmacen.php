<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroAlmacen extends Model
{
    protected $table = 'almacens';
	
	protected $fillable = array('fec_reg','obs_reg','cnt_prd');
}
