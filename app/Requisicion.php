<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    //
	protected $table = 'Requisicion';
	
	protected $fillable = array('rol_rqs', 'asn_rqs', 'jst_rqs');


	public function productos()
	{
    		return $this->belongsToMany('Producto')
		    	->withPivot('cnt_prd','id_emp');
	}
}
