<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrohistoricorequisicion extends Model
{
	protected $table = 'registrohistoricorequisicions';	

	protected $fillable = array('obs_reg_rqs');
	
	public function requisicion(){
	     return $this->belongsTo('Requisicion');
	}
	
	public function accionesrequisicion(){
	     return $this->belongsTo('Accionesrequisicion');
	}
	
	public function user(){
	     return $this->belongsTo('User');
	}
}
