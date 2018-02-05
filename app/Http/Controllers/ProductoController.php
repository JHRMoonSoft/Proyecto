<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Unidad;
use App\Almacen;
use Illuminate\Http\Request;
use Validator;

class ProductoController extends Controller
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
		$productos = Producto::all();
		$categorias = Categoria::all();
		$unidades = Unidad::all();
		return View('producto.index')->with(compact('productos', 'categorias','unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
		return View('producto.create');
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
            'des_prd' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$producto = Producto::create($post_data);
			if($request->has('unidades')){
				array_unshift($post_data['unidades'],$post_data['unidad_id']);
				$producto->unidades()->sync($post_data['unidades']);
				$producto->save();
			}
			$a = array();
			$a['cnt_prd'] = 0;
			$a['producto_id'] = $producto->id;
			
			Almacen::create($a);
			
			
		}
		return redirect()->intended('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
		$producto= Producto::find($id);
		return view('producto.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $productos = Producto::find($producto);
		return view('producto.edit')->with('productos', $productos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $post_data = $request->all();
		$rules = [
            'des_prd' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $producto = Producto::find($id);
            $producto->des_prd = $post_data['edit_des_prd'];
			$producto->categoria_id = $post_data['edit_cat_prd'];
			// validar que no haya nada en el almcen
			// si existe algo en el almacen covertir la cantidad del almcen a la nueva unidad base
			// si no existe conversion disponible no asignar el cambio
			$producto->unidad_id = $post_data['edit_und_prd'];
			if($request->has('edit_unds_prd')){
				array_unshift($post_data['edit_unds_prd'],$post_data['edit_und_prd']);
				$producto->unidades()->sync($post_data['edit_unds_prd']);
			}
			else{
				$producto->unidades()->detach();
			}
			$producto->save();
			return redirect()->intended('/producto');
			//return view('producto.show')->with('productos', $productos);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
