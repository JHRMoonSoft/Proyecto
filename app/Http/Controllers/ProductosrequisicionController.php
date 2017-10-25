<?php

namespace App\Http\Controllers;

use App\productosrequisicionsrequisicion;
use Illuminate\Http\Request;

class ProductosrequisicionsrequisicionController extends Controller
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
            'rqs_id'=> 'required',
			'prod_id'=> 'required',
			'apr_prod'=> 'required',
			'cant_sol_prd'=> 'required',
			'unidad_sol_id'=> 'required',
			'cant_apr_prd'=> 'required',
			'unidad_apr_id'=> 'required',
			'cant_entr_prd'=> 'required',
			'unidad_entr_id'=> 'required',
			'cant_dif_prd'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$productosrequisicion = Productosrequisicion::create($post_data);	 		
		}
		$productosrequisicions = Productosrequisicion::all();
		//return view('productosrequisicion.index')->with('productosrequisicions', $productosrequisicions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productosrequisicionsrequisicion  $productosrequisicionsrequisicion
     * @return \Illuminate\Http\Response
     */
    public function show(productosrequisicionsrequisicion $productosrequisicionsrequisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productosrequisicionsrequisicion  $productosrequisicionsrequisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(productosrequisicionsrequisicion $productosrequisicionsrequisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productosrequisicionsrequisicion  $productosrequisicionsrequisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productosrequisicionsrequisicion $productosrequisicionsrequisicion)
    {
        $post_data = $request->all();
		$rules = [
            'rqs_id'=> 'required',
			'prod_id'=> 'required',
			'apr_prod'=> 'required',
			'cant_sol_prd'=> 'required',
			'unidad_sol_id'=> 'required',
			'cant_apr_prd'=> 'required',
			'unidad_apr_id'=> 'required',
			'cant_entr_prd'=> 'required',
			'unidad_entr_id'=> 'required',
			'cant_dif_prd'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $productosrequisicions = Productosrequisicion::find($post_data['id']);
            $productosrequisicions->rqs_id = $post_data['rqs_id'];
			$productosrequisicions->prod_id = $post_data['prod_id'];
			$productosrequisicions->apr_prod = $post_data['apr_prod'];
			$productosrequisicions->cant_sol_prd = $post_data['cant_sol_prd'];
			$productosrequisicions->unidad_sol_id = $post_data['unidad_sol_id'];
			$productosrequisicions->cant_apr_prd = $post_data['cant_apr_prd'];
			$productosrequisicions->unidad_apr_id = $post_data['unidad_apr_id'];
			$productosrequisicions->cant_entr_prd = $post_data['cant_entr_prd'];
			$productosrequisicions->unidad_entr_id = $post_data['unidad_entr_id'];
			$productosrequisicions->cant_dif_prd = $post_data['cant_dif_prd'];
			//return view('productosrequisicion.show')->with('productosrequisicions', $productosrequisicions);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productosrequisicionsrequisicion  $productosrequisicionsrequisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(productosrequisicionsrequisicion $productosrequisicionsrequisicion)
    {
        //
    }
}
