<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    protected $table = 'requisicions';	
	protected $fillable = array'rol_rqs','asn_rqs','jst_rqs','tip_sol','apr_com','fec_apr_com','prv_apr','nom_rcp_rqs','crg_rcp_rqs','fec_rcp_rqs','obs_rcp_rqs','est_rqs');
	
	public function registrohistoricorequisicion()
	{
    		return $this->hasMany('Registrohistoricorequisicion');
	}
	public function productosrequisicion()
	{
    		return $this->hasMany('Productosrequisicion');
	}
	public function estadorequisicion()
	{
    		return $this->hasOne('Estadosrequisicion');
	}
}
