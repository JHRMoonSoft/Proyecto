<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesRequisicion extends Model
{
    protected $table = 'accionesrequisicions';
	
	protected $fillable = array('des_acc_rqs');
	
	public function estadorequisionactual(){
		
	     return $this->belongsTo('App\EstadosRequisicion', 'id', 'est_rqs_id');
		 
	}
	
	public function estadorequisionanterior(){
		
	    return $this->belongsTo('App\EstadosRequisicion', 'id', 'est_ant_rqs_id');
		 
	}
	
	public function role(){
		
	     return $this->belongsTo('App\Role', 'rol_asg_rqs_id');
	}
}
