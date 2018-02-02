<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroAlmacen extends Model
{
    protected $table = 'registro_almacens';
	
	protected $fillable = array('obs_reg','cnt_prd','lot_prd','fec_ven','almacen_id','accion_id');
	
	public function almacen()
    {
		return $this->belongsTo('App\Almacen','almacen_id');
	}
	
	public function accionalmacen()
    {
		return $this->belongsTo('App\AccionesAlmacen','accion_id');
	}
	
}
