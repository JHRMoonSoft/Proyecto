<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
	protected $table = 'configuracions';
	protected $fillable = array( 'tip_empr','raz_soc','tip_doc','num_doc','tel_fij','tel_cel','dir_mail','dir_empr','brr_empr','ciu_empr','pai_empr' );

	public function ordencompras()
	{
		//Ok
		return $this->hasMany('OrdenCompra');
	}
	
	public function facturas()
	{
		//Ok
		return $this->hasMany('Factura');
	}
	
}
