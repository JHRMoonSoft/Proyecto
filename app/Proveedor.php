<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedors';
	
	protected $fillable = array('raz_soc','tip_doc','num_doc','tel_fij','tel_cel','dir_mail','dir_prov','brr_prov','ciu_prov','pai_prov','obs_prov');

	public function ordenes_compra()
	{
    		return $this->hasMany('OrdenCompra');
	}
}
