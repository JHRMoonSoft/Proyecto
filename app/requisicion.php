<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    protected $table = 'requisicions';	
	protected $fillable = ['rol_rqs','area_id','cargo_id','asn_rqs','jst_rqs','tip_sol','apr_com','fec_apr_com','prv_apr','nom_rcp_rqs','crg_rcp_rqs','fec_rcp_rqs','obs_rcp_rqs','est_rqs'];
	
	public function proveedoresrequisicion()
	{
    		return $this->hasMany('App\ProveedoresRequisicion', 'rqs_id'); //Ok
	}
	
	public function registrohistoricorequisicion()
	{
    		return $this->hasMany('App\RegistroHistoricoRequisicion', 'rqs_id'); //Ok
	}
	
	public function estadorequisicion()
	{
    		return $this->belongsTo('App\EstadosRequisicion', 'est_rqs'); //Ok
	}
	
	public function productos()
	{
		//Ok
    	return $this->hasMany('App\ProductosRequisicion','rqs_id');
	}
	
	public function area(){
	
	return $this->belongsTo('App\Area', 'area_id');
				
	}
	
	public function cargo(){
		
	     return $this->belongsTo('App\Cargo', 'cargo_id');
	}
	
}
