<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $table = 'productos';
	
	protected $fillable = ['des_prd', 'categoria_id', 'unidad_id'];

	public function categoria()
    {
		return $this->belongsTo('App\Categoria');
	}

	public function requisiciones()
	{
		//Ok
    		return $this->belongsToMany('Requisicion','productosrequisicions','prod_id','rqs_id')
		    	->withPivot('apr_prod'
						   ,'cant_sol_prd'
						   ,'cant_apr_prd'
						   ,'cant_entr_prd'
						   ,'cant_dif_prd')->withTimestamps();
	}
	
	public function solicitudcompra()
	{
		//
    		return $this->belongsToMany('Solicitudcompra','productosolicitudcompras','prod_id','sol_comp_id')
		    	->withPivot('cant_sol_prd')->withTimestamps();
	}
	

	public function unidades()
	{
    	return $this->belongsToMany('App\Unidad', 'producto_unidad');
	}
	
	public function unidad()
	{
    		return $this->belongsTo('App\Unidad');
	}
	
	public function almacen()
    {
		return $this->hasOne('App\Almacen');
	}
}
