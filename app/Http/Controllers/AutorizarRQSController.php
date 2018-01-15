<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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

class AutorizarRQSController extends Controller
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
	  $requisiciones = Requisicion::where('est_rqs',1)->whereIn('rol_rqs',array(2))->get();
      $now = Carbon::now();
      return View('autorizarRQS.index')->with(compact('requisiciones','now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
	 * int id
     */
    public function create(int $id)
    {
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = Proveedor::all();
		$unidades = Unidad::all();
		$requisicion = Requisicion::find($id);
        $productos = $requisicion->productos()->get();
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)->get();
		return View('autorizarRQS.edit')->with(compact('requisicion','acciones','productos','proveedores','unidades'));
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
			//'jst_rqs'=> 'required',
			//'tip_sol'=> 'required',
			//'apr_com'=> 'required',
			'fec_apr_com'=> 'required',
			'prv_apr'=> 'required',
			//'nom_rcp_rqs'=> 'required',
			//'crg_rcp_rqs'=> 'required',
			//'fec_rcp_rqs'=> 'required',
			//'obs_rcp_rqs'=> 'required',
			'est_rqs'=> 'required'
			];
		$validate = Validator::make($post_data, $rules);
		if ($request->get('boton') == "guardar"){
			$numprods = 0;
			if (array_get($post_data, 'productos', false)) {
				$numprods = (int)$post_data['productos'];
			}
			$numprovs = 0;
			if (array_get($post_data, 'proveedores', false)) {
				$numprovs = (int)$post_data['proveedores'];
			}
			$i = 1;
			while($i <= $numprods){
				$producto_i = ProductosRequisicion::find($post_data['producto'.$i]);
				
				$producto_i->cant_apr_prd = $post_data['cant_apr_prd'.$i];
				$producto_i->unidad_apr_id = $producto_i->unidad_sol_id;
				$producto_i->nom_prd = $post_data['detalle'.$i];
				if (array_get($post_data, 'apr_prod'.$i, false)) {
					$producto_i->apr_prod = true;
				}
				$producto_i->save();
				$i = $i + 1;
			}
			
			$i = 1;
			while($i <= $numprovs){
				$proveedor_i = ProveedoresRequisicion::find($post_data['proveedor'.$i]);
				if (array_get($post_data, 'est_prov'.$i, false)) {
					$proveedor_i->est_prov = true;
				}
				$proveedor_i->save();
				$i = $i + 1;
				//return $proveedor_i;
			}
			
			$requisicion = Requisicion::find($post_data['rqs_id']);
			
			$tip_sol = 0;
			if (array_get($post_data, 'tip_sol1'.$i, false)) {
				$tip_sol = $tip_sol + $post_data['tip_sol1'];
			}
			if (array_get($post_data, 'tip_sol2'.$i, false)) {
				$tip_sol = $tip_sol + $post_data['tip_sol2'];
			}
			$requisicion->tip_sol = $tip_sol;
			
			if (array_get($post_data, 'apr_com'.$i, false)) {
				$requisicion->apr_com = $post_data['apr_com'] == 1;
			}
			
			return redirect()->intended('/requisicion');
			
			
		}
		else if ($request->get('boton') == "enviar" and $validate->passes()){
			$numprods = 0;
			if (array_get($post_data, 'productos', false)) {
				$numprods = (int)$post_data['productos'];
			}
			$numprovs = 0;
			if (array_get($post_data, 'proveedores', false)) {
				$numprovs = (int)$post_data['proveedores'];
			}
			$i = 1;
			while($i <= $numprods){
				$producto_i = ProductosRequisicion::find($post_data['producto'.$i]);
				$producto_i->cant_apr_prd = $post_data['cant_apr_prd'.$i];
				$producto_i->unidad_apr_id = $producto_i->unidad_sol_id;
				$producto_i->nom_prd = $post_data['detalle'.$i];
				if (array_get($post_data, 'apr_prod'.$i, false)) {
					$producto_i->apr_prod = true;
				}
				$producto_i->save();
				$i = $i + 1;
			}
			
			$i = 1;
			while($i <= $numprovs){
				$proveedor_i = ProveedoresRequisicion::find($post_data['proveedor'.$i]);
				if (array_get($post_data, 'est_prov'.$i, false)) {
					$proveedor_i->est_prov = true;
				}
				$proveedor_i->save();
				$i = $i + 1;
				//return $proveedor_i;
			}
			
			$requisicion = Requisicion::find($post_data['rqs_id']);
			
			$tip_sol = 0;
			if (array_get($post_data, 'tip_sol1'.$i, false)) {
				$tip_sol = $tip_sol + $post_data['tip_sol1'];
			}
			if (array_get($post_data, 'tip_sol2'.$i, false)) {
				$tip_sol = $tip_sol + $post_data['tip_sol2'];
			}
			$requisicion->tip_sol = $tip_sol;
			
			if (array_get($post_data, 'apr_com'.$i, false)) {
				$requisicion->apr_com = $post_data['apr_com'] == 1;
			}
			
				
			$requisicion->prv_apr = $post_data['prv_apr'] == 1;
			$requisicion->fec_apr_com = $post_data['fec_apr_com'];
			$requisicion->est_rqs = $post_data['est_rqs'];
			$requisicion->rol_rqs = $post_data['rol_rqs'];
			$requisicion->save();
			
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function cambioaccion(Request $request)
    {
		$accion = AccionesRequisicion::find($request['option']);
		$estado = EstadosRequisicion::find($accion->est_rqs_id);
		$rol = $accion->role;
		$arr = array();
		$arr['rol']=$rol;
		$arr['estado']=$estado;
		return response()->json($arr);
	}
	
}
