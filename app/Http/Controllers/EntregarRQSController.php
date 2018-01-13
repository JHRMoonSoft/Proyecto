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

class EntregarRQSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisiciones = Requisicion::where('est_rqs',2)->whereIn('rol_rqs',array(2))->get();
		$now = Carbon::now();
		return View('entregarRQS.index')->with(compact('requisiciones','now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
	 * int id
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
		$unidades = Unidad::all();
		$requisicion = Requisicion::find($id);
        $productos = $requisicion->productos()->get();
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)->get();
		return View('entregarRQS.edit')->with(compact('requisicion','acciones','productos','proveedores','unidades'));
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
        //
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
}
