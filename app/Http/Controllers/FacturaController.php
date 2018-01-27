<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Producto;
use App\Proveedor;
use App\Unidad;
use App\ProductosOrdenCompra;
use App\Configuracion;
use App\OrdenCompra;
use Validator;
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
		$ordencompra = OrdenCompra::all();
		$unidads = Unidad::all();
		return View('factura.create')->with(compact('productos','proveedores','configuracion','ordencompra','unidads'));
	
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
			'obv_fact' =>' '
			];
         $validate = Validator::make($post_data, $rules);
         if ($validate->passes()){
			 //return $post_data;
			$factura = Factura::create($post_data);
			$numprods = (int)$post_data['cantproductos'];
			$i = 1;
			$productos_vacios = true;
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i];					
				$producto_i['unidad_emp_id'] = $post_data['unidad'.$i];	
				$producto_i['cant_prd'] = $post_data['cantidad'.$i];
				$producto_i['iva_unt'] = $post_data['ivaunitario'.$i];
				$producto_i['val_unt'] = $post_data['valorunitario'.$i];
				$producto_i['val_tol'] = $post_data['valortotal'.$i];
				//$producto_i['prod_sol_comp_id'] = $post_data['prodsolcompra'.$i] == 0 ? null : $post_data['prodsolcompra'.$i];
				$producto_i['fact_id'] = $factura->id;
				
				if(!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_emp_id'])){
					ProductosOrdenCompra::create($producto_i);
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			if($productos_vacios === true){
				$factura->delete();
				$validate->errors()->add('cantproductos', 'Debe existir al menos un producto válido asociado a esta orden de compras.');
				return redirect()->back()->withInput()->withErrors($validate);
			}
			
			
			return redirect()->intended('/ordencompra');
		
		}
		
		return redirect()->back()->withInput()->withErrors($validate);	
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
	
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	public function cargarproveedorocp(Request $request)
    {
		$ocp = OrdenCompra::where('prov_id', '=', $request['option'])->get();
		return response()->json($ocp);
	}
	
	public function cargarproductosocp(Request $request)
    {
		if($request['option'] == 0){
			$prod_prvs = OrdenCompra::where('prov_id', '=', $request['prov'])
							->get(['id']);
			$productosocp = ProductosOrdenCompra::with('producto')
					->with('unidad_solicitada_factura')
					->whereIn('ord_comp_id',$prod_prvs)->get();
		}
		else{
			$productosocp = ProductosOrdenCompra::with('producto')
					->with('unidad_solicitada_factura')
					->where('ord_comp_id',$request['option'])->get();
		}	
		foreach($productosocp as $prod){
			$prod->unidades = $prod->producto->unidades;
		}
		//return response()->json($productosocp);
		return $productosocp;
	}
	
	
}
