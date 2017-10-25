<?php

namespace App\Http\Controllers;

use App\productosordencomprasordencompra;
use Illuminate\Http\Request;

class ProductosordencomprasordencompraController extends Controller
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
            'cant_prd'=> 'required',
			'iva_unt'=> 'required',
			'val_unt'=> 'required',
			'val_tol'=> 'required',
			'fec_ven'=> 'required',
			'ord_comp_id'=> 'required',
			'prod_sol_comp_id'=> 'required',
			'prod_id'=> 'required',
			'unidad_emp_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$productosordencompra = Productosordencompra::create($post_data);	 		
		}
		$productosordencompras = Productosordencompra::all();
		//return view('productosordencompra.index')->with('productosordencompras', $productosordencompras);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productosordencomprasordencompra  $productosordencomprasordencompra
     * @return \Illuminate\Http\Response
     */
    public function show(productosordencomprasordencompra $productosordencomprasordencompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productosordencomprasordencompra  $productosordencomprasordencompra
     * @return \Illuminate\Http\Response
     */
    public function edit(productosordencomprasordencompra $productosordencomprasordencompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productosordencomprasordencompra  $productosordencomprasordencompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productosordencomprasordencompra $productosordencomprasordencompra)
    {
        $post_data = $request->all();
		$rules = [
            'cant_prd'=> 'required',
			'iva_unt'=> 'required',
			'val_unt'=> 'required',
			'val_tol'=> 'required',
			'fec_ven'=> 'required',
			'ord_comp_id'=> 'required',
			'prod_sol_comp_id'=> 'required',
			'prod_id'=> 'required',
			'unidad_emp_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $productosordencompras = Productosordencompra::find($post_data['id']);
            $productosordencompras->cant_prd = $post_data['cant_prd'];
			$productosordencompras->iva_unt = $post_data['iva_unt'];
			$productosordencompras->val_unt = $post_data['val_unt'];
			$productosordencompras->val_tol = $post_data['val_tol'];
			$productosordencompras->fec_ven = $post_data['fec_ven'];
			$productosordencompras->ord_comp_id = $post_data['ord_comp_id'];
			$productosordencompras->prod_sol_comp_id = $post_data['prod_sol_comp_id'];
			$productosordencompras->prod_id = $post_data['prod_id'];
			$productosordencompras->unidad_emp_id = $post_data['unidad_emp_id'];
			//return view('productosordencompra.show')->with('productosordencompras', $productosordencompras);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productosordencomprasordencompra  $productosordencomprasordencompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(productosordencomprasordencompra $productosordencomprasordencompra)
    {
        //
    }
}
