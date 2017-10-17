<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    protected $table = 'requisicions';	
	protected $fillable = array'rol_rqs','asn_rqs','jst_rqs','men_rqs');
	
	public function registrohistoricorequisicion()
	{
    		return $this->hasMany('Registrohistoricorequisicion');
	}
	public function productosrequisicion()
	{
    		return $this->hasMany('Productosrequisicion');
	}

}
