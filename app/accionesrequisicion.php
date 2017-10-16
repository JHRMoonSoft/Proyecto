<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accionesrequisicion extends Model
{
    protected $table = 'accionesrequisicions';	
	protected $fillable = array('des_acc_rqs');
	
	public function estadorequisionactual(){
	     return $this->hasMany('Estadosrequisicion', 'id', 'est_rqs_id');
	}
	public function estadorequisionanterior(){
	     return $this->hasMany('Estadosrequisicion', 'id', 'est_ant_rqs_id');
	}
	public function role(){
	     return $this->hasMany('Role');
	}
}
