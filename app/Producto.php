<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $table = 'productos';
	
	protected $fillable = array('des_prd');

	public function categoria()
    {
		return $this->belongsTo('Categoria');
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

	public function unidades_iniciales()
	{
    		return $this->belongsToMany('Unidad', 'conversions','producto_id','unidad_inicial_id')->withTimestamps();
	}
	
	public function unidades_finales()
	{
		return $this->belongsToMany('Unidad', 'conversions','producto_id','unidad_final_id')->withTimestamps();
	}
	
	/*
	public function almacen()
    {
		return $this->belongsTo('Almacen');
	}
	
	public function unidad()
    {
	        return $this->belongsTo('Unidad');
	}
	*/
}
