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


class ReciboRQSController extends Controller
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
        $requisiciones = Requisicion::whereIn('est_rqs',array(5,6))->whereIn('rol_rqs',array(2,3))->get();
		$now = Carbon::now();
		return View('reciboRQS.index')->with(compact('requisiciones','now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
	 * int id
     */
    public function create()
    {
	  	return View('reciboRQS.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function show(ReciboRQS $reciboRQS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$proveedores = Proveedor::all();
		$unidades = Unidad::all();
		$requisicion = Requisicion::find($id);
        $productos = $requisicion->productos()->get();
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)
										->whereNotIn('est_rqs_id',array(5,6))
										->get();
		return View('reciboRQS.edit')->with(compact('requisicion','acciones','productos','proveedores','unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
		
		$post_data = $request->all();
		$rules = [
            'rol_rqs'=> 'required',
			'asn_rqs'=> 'required',
			'est_rqs'=> 'required',
			'nom_rcp_rqs'=> 'required',
			'crg_rcp_rqs'=> 'required',
			'fec_rcp_rqs'=> 'required'
			];
		$validate = Validator::make($post_data, $rules);
		if ($validate->passes()){
			
			$requisicion = Requisicion::find($post_data['rqs_id']);			
			$requisicion->est_rqs = $post_data['est_rqs'];
			$requisicion->rol_rqs = $post_data['rol_rqs'];
			$requisicion->fec_rcp_rqs = $post_data['fec_rcp_rqs'];
			$requisicion->nom_rcp_rqs = $post_data['nom_rcp_rqs'];
			$requisicion->crg_rcp_rqs = $post_data['crg_rcp_rqs'];
			$requisicion->save();
			
			$accion_crear = array();
			$accion_crear['obs_reg_rqs'] = $post_data['obs_rqs'];
			$accion_crear['rqs_id'] = $requisicion->id;
			$accion_crear['acc_rqs_id'] = $post_data['acc_rqs'];
			$accion_crear['user_id'] = Auth::user()->id;
			RegistroHistoricoRequisicion::create($accion_crear);
			if( $post_data['acc_rqs'] == 7){
				$accion_crear = array();
				$accion_crear['obs_reg_rqs'] = $post_data['obs_rqs'] . ". Estado en Proceso.";
				$accion_crear['rqs_id'] = $requisicion->id;
				$accion_crear['acc_rqs_id'] = 4;
				$accion_crear['user_id'] = Auth::user()->id;
				RegistroHistoricoRequisicion::create($accion_crear);
				
				$requisicion->est_rqs = 4;
				$requisicion->rol_rqs = 3;
				$requisicion->save();
				
			}
			$requisicion->save();
			return redirect()->intended('/recibirRQS');
			
		}
		return redirect()->back()->withInput()->withErrors($validate);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReciboRQS $reciboRQS)
    {
        //
    }
}
