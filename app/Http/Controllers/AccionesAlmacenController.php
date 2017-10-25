<?php

namespace App\Http\Controllers;

use App\AccionesAlmacen;
use Illuminate\Http\Request;

class AccionesAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'des_acc_alm' => 'required'
			'tip_acc_alm' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$accionesalmacen = AccionesAlmacen::create($post_data);	 		
		}
		$accionesalmacens = AccionesAlmacen::all();
		//return view('accionesalmacen.index')->with('accionesalmacens', $accionesalmacens);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccionesAlmacen  $accionesAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(AccionesAlmacen $accionesAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccionesAlmacen  $accionesAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(AccionesAlmacen $accionesAlmacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccionesAlmacen  $accionesAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccionesAlmacen $accionesAlmacen)
    {
        $post_data = $request->all();
		$rules = [
            'des_acc_alm' => 'required'
			'tip_acc_alm' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $accionesalmacens = AccionesAlmacen::find($post_data['id']);
            $accionesalmacens->des_acc_alm = $post_data['des_acc_alm'];
			$accionesalmacens->tip_acc_alm = $post_data['tip_acc_alm'];
			//return view('accionesalmacen.show')->with('accionesalmacens', $accionesalmacens);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccionesAlmacen  $accionesAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccionesAlmacen $accionesAlmacen)
    {
        //
    }
}
