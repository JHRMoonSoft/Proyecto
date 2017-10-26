<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesRequisicion extends Model
{
    protected $table = 'acciones_requisicions';
	
	protected $fillable = array('des_acc_rqs');
	
	public function estadorequisionactual(){
		
	     return $this->belongsTo('EstadosRequisicion', 'id', 'est_rqs_id');
		 
	}
	
	public function estadorequisionanterior(){
		
	    return $this->belongsTo('EstadosRequisicion', 'id', 'est_ant_rqs_id');
		 
	}
	
	public function role(){
		
	     return $this->belongsTo('Role');
		 
	}
}
