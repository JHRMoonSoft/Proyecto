<?php

namespace App\Http\Controllers;

use App\Almacen;
use Illuminate\Http\Request;

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
        return View('almacen.index');
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('almacen.kardex');
	
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
            'cnt_prd'=> 'required',
			'lot_prd'=> 'required',
			'fec_ven'=> 'required',
			'producto_id'=> 'required',
			'unidad_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$almacen = Almacen::create($post_data);	 		
		}
		$almacens = Almacen::all();
		return view('almacen.index')->with('almacens', $almacens);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(Almacen $almacen)
    {
        //
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
			'lot_prd'=> 'required',
			'fec_ven'=> 'required',
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
}
