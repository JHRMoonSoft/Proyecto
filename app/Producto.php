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
    		return $this->belongsToMany('Requisicion');
		    	//->withPivot('cnt_prd','id_emp');
	}

	public function unidades_iniciales()
	{
    		return $this->belongsToMany('Unidad', 'conversions','producto_id','unidad_inicial_id');
	}
	
	public function unidades_finales()
	{
    		return $this->belongsToMany('Unidad', 'conversions','producto_id','unidad_final_id');
	}
	
	public function almacen()
    	{
	        return $this->belongsTo('Almacen');
	}

	public function conversiones()
	{
    		return $this->hasMany('Conversion');
	}
}
