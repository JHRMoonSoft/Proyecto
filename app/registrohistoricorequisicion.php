<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroHistoricoRequisicion extends Model
{
	protected $table = 'registrohistoricorequisicions';	

	protected $fillable = ['obs_reg_rqs', 'rqs_id', 'acc_rqs_id', 'user_id'];
	
	public function requisicion(){
	     return $this->belongsTo('App\Requisicion', 'rqs_id');
	}
	
	public function accionesrequisicion(){
	     return $this->belongsTo('App\AccionesRequisicion', 'acc_rqs_id');
	}
	
	public function user(){
	     return $this->belongsTo('App\User');
	}
}
