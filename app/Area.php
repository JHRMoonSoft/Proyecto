<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
	protected $fillable = [
        'des_are', 'tipos_area_id',
	];
		
		
	public function tipoarea(){
		
	     return $this->belongsTo('App\TiposArea', 'tipos_area_id');
	}
}
