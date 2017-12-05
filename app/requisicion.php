<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    protected $table = 'requisicions';	
	protected $fillable = ['rol_rqs','asn_rqs','jst_rqs','tip_sol','apr_com','fec_apr_com','prv_apr','nom_rcp_rqs','crg_rcp_rqs','fec_rcp_rqs','obs_rcp_rqs','est_rqs'];
	
	public function proveedoresrequisicion()
	{
    		return $this->hasMany('App\ProveedoresRequisicion'); //Ok
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
    		return $this->belongsToMany('App\Producto','productosrequisicions','rqs_id','prod_id')
		    	->withPivot('apr_prod'
						   ,'cant_sol_prd'
						   ,'cant_apr_prd'
						   ,'cant_entr_prd'
						   ,'cant_dif_prd')->withTimestamps();
	}
	
}
