<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudcompra extends Model
{
    protected $table = 'solicitudcompras';	
	protected $fillable = ['asn_scp','obv_scp'];
	
	public function productos(){
		
		return $this->belongsToMany('App\Producto','productosolicitudcompras')->withPivot('id');
	
	}
}
