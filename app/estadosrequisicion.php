<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosRequisicion extends Model
{
	protected $table = 'estadosrequisicions';	
	
	protected $fillable = ['desc_est_req','asu_est_req','tip_est_req'];
	
	public function requisiciones()
	{
    	return $this->hasMany('App\Requisicion','est_rqs');
	}
	
}
