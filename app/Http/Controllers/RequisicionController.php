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
use App\Proveedor;
use App\Unidad;
use App\Role;
use App\Conversion;
use App\Requisicion;
use Validator;
use \Carbon\Carbon;

class RequisicionController extends Controller
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
		$requisiciones = Requisicion::all();
		$now = Carbon::now();
        return View('requisicion.index')->with(compact('requisiciones','now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$productos = Producto::all();
		$proveedores = Proveedor::all();
		$acciones = AccionesRequisicion::whereNull('est_ant_rqs_id')->first();
		$estado = EstadosRequisicion::find($acciones->est_rqs_id);
		$rol = $acciones->role;
		return View('requisicion.create')->with(compact('productos','proveedores','acciones','rol','estado'));
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
            'rol_rqs'=> 'required',
			'asn_rqs'=> 'required',
			'jst_rqs'=> 'required',
			//'tip_sol'=> 'required',
			//'apr_com'=> 'required',
			//'fec_apr_com'=> 'required',
			//'prv_apr'=> 'required',
			//'nom_rcp_rqs'=> 'required',
			//'crg_rcp_rqs'=> 'required',
			//'fec_rcp_rqs'=> 'required',
			//'obs_rcp_rqs'=> 'required',
			'est_rqs'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$requisicion = Requisicion::create($post_data);
			$numprods = (int)$post_data['cantproductos'];
			$numprovs = (int)$post_data['cantproveedores'];
			$i = 1;
			$productos = array();
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i];
				$producto_i['cant_sol_prd'] = $post_data['cantidad'.$i];
				$producto_i['unidad_sol_id'] = $post_data['unidad'.$i];
				$producto_i['nom_prd'] = $post_data['detalle'.$i];
				$producto_i['rqs_id'] = $requisicion->id;
				array_push($productos,$producto_i);
				ProductosRequisicion::create($producto_i);
				$i = $i + 1;
				//return $producto_i;
			}
			
			$i = 1;
			while($i <= $numprovs){
				$proveedor_i = array();
				$proveedor_i['raz_soc'] = $post_data['nombre'.$i];
				$proveedor_i['tel_fij'] = $post_data['telefono'.$i];
				$proveedor_i['rqs_id'] = $requisicion->id;
				ProveedoresRequisicion::create($proveedor_i);
				$i = $i + 1;
				//return $proveedor_i;
			}
			
			$accion_crear = array();
			$accion_crear['obs_reg_rqs'] = $post_data['obs_rqs'];
			$accion_crear['rqs_id'] = $requisicion->id;
			$accion_crear['acc_rqs_id'] = $post_data['acc_rqs'];
			$accion_crear['user_id'] = Auth::user()->id;
			RegistroHistoricoRequisicion::create($accion_crear);
			return redirect()->intended('/requisicion');
		}
		return redirect()->back()->withInput()->withErrors($validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requisicions= Requisicion::find($id);
		return view('requisicion.show')->with('requisicions', $requisicions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisicions = Requisicion::find($requisicion);
		return view('requisicion.edit')->with('requisicions', $requisicions);
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
            'rol_rqs'=> 'required',
			'asn_rqs'=> 'required',
			'jst_rqs'=> 'required',
			'tip_sol'=> 'required',
			'apr_com'=> 'required',
			'fec_apr_com'=> 'required',
			'prv_apr'=> 'required',
			'nom_rcp_rqs'=> 'required',
			'crg_rcp_rqs'=> 'required',
			'fec_rcp_rqs'=> 'required',
			'obs_rcp_rqs'=> 'required',
			'est_rqs'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $requisicions = Requisicion::find($post_data['id']);
            $requisicions->rol_rqs = $post_data['rol_rqs'];
			$requisicions->asn_rqs = $post_data['asn_rqs'];
			$requisicions->jst_rqs = $post_data['jst_rqs'];
			$requisicions->tip_sol = $post_data['tip_sol'];
			$requisicions->apr_com = $post_data['apr_com'];
			$requisicions->fec_apr_com = $post_data['fec_apr_com'];
			$requisicions->prv_apr = $post_data['prv_apr'];
			$requisicions->nom_rcp_rqs = $post_data['nom_rcp_rqs'];
			$requisicions->crg_rcp_rqs = $post_data['crg_rcp_rqs'];
			$requisicions->fec_rcp_rqs = $post_data['fec_rcp_rqs'];
			$requisicions->obs_rcp_rqs = $post_data['obs_rcp_rqs'];
			$requisicions->est_rqs = $post_data['est_rqs'];
			return view('requisicion.show')->with('requisicions', $requisicions);
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
	
	public function cargarproveedor(Request $request)
    {
		$proveedor = Proveedor::find($request['option']);
		return response()->json($proveedor);
	}
	
}
