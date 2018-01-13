<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudcompra extends Model
{
    protected $table = 'solicitudcompras';	
	protected $fillable = ['asn_scp','obv_scp', 'user_id'];
	
	public function productossolicitudcompra(){
		
		return $this->hasMany('App\ProductosSolicitudCompra', 'sol_comp_id');
	
	}
}
