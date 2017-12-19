<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Producto;
use App\Proveedor;
use App\Unidad;
use App\Configuracion;
use Illuminate\Http\Request;

class FacturaController extends Controller
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
       	return View('factura.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
		$proveedores = Proveedor::all();
		$configuracion = Configuracion::first();
		$unidads = Unidad::all();
		return View('factura.create')->with(compact('productos','proveedores','configuracion','unidads'));
	
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
            'lot_prd' =>' ',
			'no_fact' =>' ',
			'cnp_fact' =>' ',
			'comp_fact' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_fact' =>' ',
			'subt_fact' =>' ',
			'iva_fact' =>' ',
			'tol_fact' =>' ',
			'obv_fact' =>' ',
			'ord_comp_id'=>' '
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$factura = Factura::create($post_data);	 		
		}
		$facturas = Factura::all();
		return view('factura.index')->with('facturas', $facturas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        $facturas= Factura::find($factura);
		return view('factura.show')->with('facturas', $facturas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        $facturas = Factura::find($factura);
		return view('factura.edit')->with('facturas', $facturas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
         $post_data = $request->all();
		$rules = [
            'lot_prd' =>' ',
			'no_fact' =>' ',
			'cnp_fact' =>' ',
			'comp_fact' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_fact' =>' ',
			'subt_fact' =>' ',
			'iva_fact' =>' ',
			'tol_fact' =>' ',
			'obv_fact' =>' ',
			'ord_comp_id'=>' '
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $facturas = Factura::find($post_data['id']);
            $facturas->lot_prd = $post_data['lot_prd'];
			$facturas->no_fact = $post_data['no_fact'];
			$facturas->cnp_fact = $post_data['cnp_fact'];
			$facturas->comp_fact = $post_data['comp_fact'];
			$facturas->form_pag = $post_data['form_pag'];
			$facturas->dia_cred = $post_data['dia_cred'];
			$facturas->tim_entr = $post_data['tim_entr'];
			$facturas->otr_fact = $post_data['otr_fact'];
			$facturas->subt_fact = $post_data['subt_fact'];
			$facturas->iva_fact = $post_data['iva_fact'];
			$facturas->tol_fact = $post_data['tol_fact'];
			$facturas->obv_fact = $post_data['obv_fact'];
			$facturas->ord_comp_id = $post_data['ord_comp_id'];
			return view('factura.show')->with('facturas', $facturas);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
	
	public function cargarproveedorocp(Request $request)
    {
		$ocp = OrdenCommpra::where('prov_id', '=', $request['option']);
		return response()->json($ocp);
	}
	
	
}
