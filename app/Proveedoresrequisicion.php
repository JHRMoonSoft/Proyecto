<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedoresrequisicion extends Model
{
    protected $table = 'proveedoresrequisicions';
	//Modelo de Proveedores Sugeridos
	protected $fillable = ['raz_soc','tip_doc','num_doc','tel_fij','tel_cel','dir_mail','dir_prov','brr_prov','ciu_prov','pai_prov','obs_prov','est_prov'];
	
	public function requisicion(){
		
		return $this->belongsTo('Requisicion');
		
	}
	
}