<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{
    //
	protected $table = 'conversions';
	
	protected $fillable = ['unidad_inicial_id','unidad_final_id','cnt_ini_prd', 'cnt_fin_prd'];

	public function unidadinicial()
	{
    	return $this->belongsTo('App\Unidad', 'unidad_inicial_id');
	}
	
	public function unidadfinal()
	{
    	return $this->belongsTo('App\Unidad', 'unidad_final_id');
	}
}
