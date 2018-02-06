<?php

namespace App\Http\Controllers;

use App\Almacen;
use App\Producto;
use App\RegistroAlmacen;
use Illuminate\Http\Request;
use Validator;
use \Carbon\Carbon;

class AlmacenController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $registroalmacen= RegistroAlmacen::all();
       $almacen=Almacen::all();
	   return View('almacen.index')->with(compact('almacen','registroalmacen'));
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$productos = Almacen::all();
	   return View('almacen.create')->with(compact('productos'));
	
    }

	
	// Function for basic field validation (present and neither empty nor only white space
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_data = $request->all();
		$rules = [
			// 'cnt_prd'=> 'required',
			//'producto_id'=> 'required',
			//'unidad_id'=> 'required'
			];
			
			
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			
			$numprods = (int)$post_data['cantproductos'];	
				$i = 1;
			$productos_vacios = true;
			while($i <= $numprods){
				$producto_i = array();
				$producto['prod_id'] = $post_data['producto'.$i] == 0 ? null : $post_data['producto'.$i];
				$producto_i['cnt_prd'] = $post_data['cantidad'.$i];
				//$producto_i['lot_prd'] = $post_data['lote'.$i];
				//$producto_i['fec_ven'] = $post_data['vence'.$i];
				$producto_i['obs_reg'] = $post_data['obs_reg'];
				$producto_i['accion_id'] = $post_data['accion_id']; 
							
				if(!$this->IsNullOrEmptyString($producto['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cnt_prd']))
				{
					$almacen = Almacen::find($producto['prod_id']);
					$almacen['cnt_prd'] = $almacen['cnt_prd'] + $producto_i['cnt_prd'];
					$producto_i['almacen_id'] = $almacen->id;
					$producto_i['saldo'] = $almacen['cnt_prd'];				
					
					RegistroAlmacen::create($producto_i);
					$almacen->save();
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			if($productos_vacios === true){
				$almacen['cnt_prd'] = $almacen['cnt_prd'] - $producto_i['cnt_prd'];
				$almacen->save();
				$validate->errors()->add('cantproductos', 'Debe existir al menos un producto válido asociado a ste ingreso.');
				return redirect()->back()->withInput()->withErrors($validate);
			}
		}
		return redirect()->intended('/almacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(Almacen $almacen)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit(Almacen $almacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacen $almacen)
    {
        $post_data = $request->all();
		$rules = [
            'cnt_prd'=> 'required',
			'producto_id'=> 'required',
			'unidad_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $almacens = Almacen::find($post_data['id']);
            $almacens->cnt_prd = $post_data['cnt_prd'];
			$almacens->lot_prd = $post_data['lot_prd'];
			$almacens->fec_ven = $post_data['fec_ven'];
			$almacens->producto_id = $post_data['producto_id'];
			$almacens->unidad_id = $post_data['unidad_id'];
			//return view('almacen.show')->with('almacens', $almacens);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Almacen $almacen)
    {
        //
    }
	
	public function getAlmacenProducto(int $id){
		$almacen = Almacen::find($id);
		if(!$almacen){
			$almacen = null;
		}
		return $almacen;
	}
	
	public function getUnidadesProducto(int $id){
		
		$producto = Producto::find($id);
		if($producto){
			$unidades = $producto->unidades()->get();
		}
		else{
			$unidades = Unidad::all();
		}
		return $unidades;
	}
	
	public function cargarunidadesproducto(Request $request)
    {
		return response()->json($this->getUnidadesProducto($request['option']));
	}
	
	public function cargardetallealmacen(Request $request)
    {
		return response()->json($this->getAlmacenProducto($request['option']));
	}
	
	
	public function kardex()
	{
		$registroalmacen= RegistroAlmacen::all();
		return View('almacen.kardex')->with(compact('registroalmacen'));
	}
	
}
