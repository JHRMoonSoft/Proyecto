<?php

namespace App\Http\Controllers;

use App\RegistroAlmacen;
use App\Producto;
use App\Almacen;
use App\AccionesAlmacen;
use Illuminate\Http\Request;
use Validator;
use \Carbon\Carbon;

class RegistroAlmacenController extends Controller
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $productos = Producto::all();
	   return View('almacen.create')->with(compact('productos'));
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
            'fec_reg'=> '',
			'obs_reg'=> 'required',
			'cnt_prd'=> 'required',
			'lot_prd'=> '',
			'fec_ven'=> '',
			'almacen_id'=> 'required',
			'accion_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$registroAlmacen = RegistroAlmacen::create($post_data);	 		
		}
		$registroAlmacens = RegistroAlmacen::all();
		//return view('registroAlmacen.index')->with('registroAlmacens', $registroAlmacens);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroAlmacen  $registroAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroAlmacen $registroAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroAlmacen  $registroAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroAlmacen $registroAlmacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroAlmacen  $registroAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroAlmacen $registroAlmacen)
    {
        $post_data = $request->all();
		$rules = [
            'fec_reg'=> 'required',
			'obs_reg'=> 'required',
			'cnt_prd'=> 'required',
			'almacen_id'=> 'required',
			'accion_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $registroAlmacens = RegistroAlmacen::find($post_data['id']);
            $registroAlmacens->fec_reg = $post_data['fec_reg'];
			$registroAlmacens->obs_reg = $post_data['obs_reg'];
			$registroAlmacens->cnt_prd = $post_data['cnt_prd'];
			$registroAlmacens->almacen_id = $post_data['almacen_id'];
			$registroAlmacens->accion_id = $post_data['accion_id'];
			return view('registroAlmacen.show')->with('registroAlmacens', $registroAlmacens);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroAlmacen  $registroAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroAlmacen $registroAlmacen)
    {
        //
    }
	
	public function cargarunidadesproducto(Request $request)
    {
		$producto = Producto::find($request['option']);
		if($producto){
			$unidades = $producto->unidad()->get();
		}
		
		return response()->json($unidades);
	}
	
}
