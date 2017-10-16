<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
    protected $table = 'ordencompras';	
	protected $fillable = array('no_ocp', 'cnp_ocp', 'aut_ocp', 'form_pag', 'dia_cred', 'tim_entr', 'otr_ocp', 'subt_ocp', 'iva_ocp', 'tol_ocp', 'obv_ocp');
		
	public function configuracion()
	{
	    return $this->hasMany('Configuracion');
	}
	public function proveedor()
	{
	    return $this->hasMany('Proveedor');
	}
	public function factura()
	{
	    return $this->hasMany('Factura');
	}
}
