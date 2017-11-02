<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Proveedor;
use App\Categoria;
use App\Configuracion;
use App\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
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
        return View('ordencompra.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       	$productos = Producto::all();
		$proveedors = Proveedor::all();
		$categorias = Categoria::all();
		$configuracion = Configuracion::all();
		return View('ordencompra.create')->with(compact('productos','proveedors','categorias','configuracion'));
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
            'no_ocp' =>' ',
			'cnp_ocp' =>' ',
			'aut_ocp' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_ocp' =>' ',
			'subt_ocp' =>' ',
			'iva_ocp' =>' ',
			'tol_ocp' =>' ',
			'obv_ocp' =>' ',
			'empre_id' =>' ',
			'prov_id' =>' '
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$ordencompra = OrdenCompra::create($post_data);	 		
		}
		$ordencompras = OrdenCompra::all();
		return view('ordencompra.index')->with('ordencompras', $ordencompras);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenCompra $ordencompra)
    {
        $ordencompras= OrdenCompra::find($ordencompra);
		return view('ordencompra.show')->with('ordencompras', $ordencompras);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenCompra $ordencompra)
    {
        $ordencompras = OrdenCompra::find($ordencompra);
		return view('ordencompra.edit')->with('ordencompras', $ordencompras);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenCompra $ordencompra)
    {
        $post_data = $request->all();
		$rules = [
            'no_ocp' =>' ',
			'cnp_ocp' =>' ',
			'aut_ocp' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_ocp' =>' ',
			'subt_ocp' =>' ',
			'iva_ocp' =>' ',
			'tol_ocp' =>' ',
			'obv_ocp' =>' ',
			'empre_id' =>' ',
			'prov_id'=>' '
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $ordencompras = OrdenCompra::find($post_data['id']);
            $ordencompras->no_ocp = $post_data['no_ocp'];
			$ordencompras->cnp_ocp = $post_data['cnp_ocp'];
			$ordencompras->aut_ocp = $post_data['aut_ocp'];
			$ordencompras->form_pag = $post_data['form_pag'];
			$ordencompras->dia_cred = $post_data['dia_cred'];
			$ordencompras->tim_entr = $post_data['tim_entr'];
			$ordencompras->otr_ocp = $post_data['otr_ocp'];
			$ordencompras->subt_ocp = $post_data['subt_ocp'];
			$ordencompras->iva_ocp = $post_data['iva_ocp'];
			$ordencompras->tol_ocp = $post_data['tol_ocp'];
			$ordencompras->obv_ocp = $post_data['obv_ocp'];
			$ordencompras->empre_id = $post_data['empre_id'];
			$ordencompras->prov_id = $post_data['prov_id'];
			return view('ordencompra.show')->with('ordencompras', $ordencompras);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenCompra $ordencompra)
    {
        //
    }
}
