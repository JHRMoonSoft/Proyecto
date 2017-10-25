<?php

namespace App\Http\Controllers;

use App\productosolicitudcomprasolicitudcompra;
use Illuminate\Http\Request;

class ProductosolicitudcomprasolicitudcompraController extends Controller
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
            'cant_sol_prd' => 'required',
			'sol_comp_id' => 'required',
			'prod_id' => 'required',
			'unidad_emp_id' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$productosolicitudcompra = Productosolicitudcompra::create($post_data);	 		
		}
		$productosolicitudcompras = Productosolicitudcompra::all();
		//return view('productosolicitudcompra.index')->with('productosolicitudcompras', $productosolicitudcompras);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productosolicitudcomprasolicitudcompra  $productosolicitudcomprasolicitudcompra
     * @return \Illuminate\Http\Response
     */
    public function show(productosolicitudcomprasolicitudcompra $productosolicitudcomprasolicitudcompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productosolicitudcomprasolicitudcompra  $productosolicitudcomprasolicitudcompra
     * @return \Illuminate\Http\Response
     */
    public function edit(productosolicitudcomprasolicitudcompra $productosolicitudcomprasolicitudcompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productosolicitudcomprasolicitudcompra  $productosolicitudcomprasolicitudcompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productosolicitudcomprasolicitudcompra $productosolicitudcomprasolicitudcompra)
    {
        $post_data = $request->all();
		$rules = [           
			'cant_sol_prd' => 'required',
			'sol_comp_id' => 'required',
			'prod_id' => 'required',
			'unidad_emp_id' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $productosolicitudcompras = Productosolicitudcompra::find($post_data['id']);
            $productosolicitudcompras->cant_sol_prd = $post_data['cant_sol_prd'];
			$productosolicitudcompras->sol_comp_id = $post_data['sol_comp_id'];
			$productosolicitudcompras->prod_id = $post_data['prod_id'];
			$productosolicitudcompras->unidad_emp_id = $post_data['unidad_emp_id'];
			//return view('productosolicitudcompra.show')->with('productosolicitudcompras', $productosolicitudcompras);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productosolicitudcomprasolicitudcompra  $productosolicitudcomprasolicitudcompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(productosolicitudcomprasolicitudcompra $productosolicitudcomprasolicitudcompra)
    {
        //
    }
}
