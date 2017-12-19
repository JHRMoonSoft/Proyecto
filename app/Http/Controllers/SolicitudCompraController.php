<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Producto;
use App\ProductosRequisicion;
use App\ProveedoresRequisicion;
use App\AccionesRequisicion;
use App\EstadosRequisicion;
use App\RegistroHistoricoRequisicion;
use App\Unidad;
use App\Almacen;
use App\Solicitudcompra;
use App\ProductosSolicitudCompra;
use App\Proveedor;
use App\Role;
use App\Conversion;
use App\Requisicion;
use Validator;
use \Carbon\Carbon;


class SolicitudCompraController extends Controller
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
         return View('solicitudcompra.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {	
		$productos = Producto::all();
		return View('solicitudcompra.create')->with(compact('productos'));
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
            'asn_scp' => 'required',
			'obv_scp' => 'required'
		
		];
    	//
		$validate = Validator::make($post_data, $rules);
        if ($validate->passes()){
			$solicitudcompra = SolicitudCompra::create($post_data);
			$numprods = (int)$post_data['cantproductos'];
			$i = 1;
			$productos_vacios = true;
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i];
				$producto_i['cant_sol_prd'] = $post_data['cantidad'.$i];
				$producto_i['unidad_emp_id'] = $post_data['unidad'.$i];
				$producto_i['sol_comp_id'] = $solicitudcompra->id;
				if(!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_emp_id'])){
					ProductosSolicitudCompra::create($producto_i);
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			if($productos_vacios === true){
				$solicitudcompra->delete();
				$validate->errors()->add('cantproductos', 'Debe existir al menos un producto válido asociado a esta solicitud de compras.');
				return redirect()->back()->withInput()->withErrors($validate);
			}
			return redirect()->intended('/solicitudcompra');
		
		}
		return redirect()->back()->withInput()->withErrors($validate);	
		
		// 		return view('solicitudcompra.index')->with('solicitudcompras', $solicitudcompras);
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudcompra= SolicitudCompra::find($solicitudcompra);
		return view('solicitudcompra.show')->with('solicitudcompra', $solicitudcompra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudcompra = SolicitudCompra::find($solicitudcompra);
		return view('solicitudcompra.edit')->with('solicitudcompra', $solicitudcompra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post_data = $request->all();
		$rules = [
            'asn_scp' => 'required',
			'obv_scp' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $solicitudcompra = SolicitudCompra::find($post_data['id']);
            $solicitudcompra->asn_scp = $post_data['asn_scp'];
			$solicitudcompra->obv_scp = $post_data['obv_scp'];
			return view('solicitudcompra.show')->with('solicitudcompra', $solicitudcompra);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function cargarunidadesproducto(Request $request)
    {
		$producto = Producto::find($request['option']);
		if($producto){
			$unidades = $producto->unidades()->get();
		}
		else{
			$unidades = Unidad::all();
		}
		//$unidades = Unidad::whereIn('id', '=', $producto)->get();
		
		return response()->json($unidades);
	}
	
	public function cargardisponibleproducto(Request $request)
    {
		$producto = Producto::find($request['option']);
		if($producto){
			$almacen = $producto->almacen()->first();
			$almacen['und'] = $producto->unidad->des_und;
		}
		else{
			$almacen = null;
		}
		//$unidades = Unidad::whereIn('id', '=', $producto)->get();
		
		return response()->json($almacen);
	}
	
	public function buscarRQSAutorizada(Request $request)
    {
		$rqs = Requisicion::find($request['option']);
		if(!$rqs){
			$rqs = null;
		}
		
		return response()->json($unidades);
	}

}
