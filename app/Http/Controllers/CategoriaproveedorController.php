<?php

namespace App\Http\Controllers;

use App\categoriaproveedor;
use Illuminate\Http\Request;

class CategoriaproveedorController extends Controller
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
			'categoria_id' => 'required'
			'proveedor_id' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$categoriaproveedor = Categoriaproveedor::create($post_data);	 		
		}
		$categoriaproveedors = Categoriaproveedor::all();
		//return view('categoriaproveedor.index')->with('categoriaproveedors', $categoriaproveedors);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoriaproveedor  $categoriaproveedor
     * @return \Illuminate\Http\Response
     */
    public function show(categoriaproveedor $categoriaproveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoriaproveedor  $categoriaproveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(categoriaproveedor $categoriaproveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoriaproveedor  $categoriaproveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoriaproveedor $categoriaproveedor)
    {
       $post_data = $request->all();
		$rules = [
            'categoria_id' => 'required'
			'proveedor_id' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $categoriaproveedors = Categoriaproveedor::find($post_data['id']);
            $categoriaproveedors->categoria_id = $post_data['categoria_id'];
			$categoriaproveedors->proveedor_id = $post_data['proveedor_id'];
			//return view('categoriaproveedor.show')->with('categoriaproveedors', $categoriaproveedors);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoriaproveedor  $categoriaproveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoriaproveedor $categoriaproveedor)
    {
        //
    }
}
