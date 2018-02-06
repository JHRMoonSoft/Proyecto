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
use App\Almacen;
use App\RegistroAlmacen;
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
        $requisiciones = Requisicion::whereIn('est_rqs',array(4,5))->get();
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
		$productos = ProductosRequisicion::where('rqs_id',$requisicion->id)
									->where('apr_prod',true)
									->get();
        foreach($productos as $p){
			$p->almacen = $this->getAlmacenProducto($p->prod_id);
		}
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)
										->whereNotIn('est_rqs_id',array(7))
										->get();
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
		$post_data = $request->all();
		$rules = [
            'rol_rqs'=> 'required',
			'asn_rqs'=> 'required',
			'est_rqs'=> 'required',
			'obs_rqs'=> 'required'
			];
		$validate = Validator::make($post_data, $rules);
		if ($request->get('boton') == "guardar"){
			$numprods = 0;
			if (array_get($post_data, 'productos', false)) {
				$numprods = (int)$post_data['productos'];
			}
			$i = 1;
			while($i <= $numprods){
				$producto_i = ProductosRequisicion::find($post_data['producto'.$i]);
				$producto_i->cant_entr_prd = $post_data['cant_entr_prd'.$i];
				$producto_i->cant_dif_prd = $post_data['cant_dif_prd'.$i];
				$producto_i->save();
				$i = $i + 1;
			}
			return redirect()->intended('/entregarRQS');
			
			
		}
		else if ($request->get('boton') == "enviar" and $validate->passes()){
			$numprods = 0;
			if (array_get($post_data, 'productos', false)) {
				$numprods = (int)$post_data['productos'];
			}
			$i = 1;
			while($i <= $numprods){
				$producto_i = ProductosRequisicion::find($post_data['producto'.$i]);
				$cant=$producto_i->cant_entr_prd;
				$producto_i->cant_entr_prd = $post_data['cant_entr_prd'.$i];
				$producto_i->cant_dif_prd = $post_data['cant_dif_prd'.$i];
				$regalm_i['cnt_prd'] = $post_data['cant_entr_prd'.$i]-$cant;
				//$regalm_i['lot_prd'] = $post_data['lote'.$i];
				$regalm_i['obs_reg'] = $post_data['obs_rqs'];
				$regalm_i['accion_id'] = 3;				
				$producto_i->save();
				$producto = Producto::find($producto_i->producto->id);				
				$producto->almacen['cnt_prd'] = $producto->almacen['cnt_prd'] - $regalm_i['cnt_prd'];
				$regalm_i['almacen_id'] = $producto->almacen->id;
				$regalm_i['saldo'] = $producto->almacen['cnt_prd'];									
				
				$i = $i + 1;
				if($regalm_i['cnt_prd']<>0){
					RegistroAlmacen::create($regalm_i);
					$producto->almacen->save();
				}
				//no aplica cuando el valor 
						
			}
			
	
			$requisicion = Requisicion::find($post_data['rqs_id']);
			$requisicion->est_rqs = $post_data['est_rqs'];
			$requisicion->rol_rqs = $post_data['rol_rqs'];
			$requisicion->save();		
			
			
			$accion_crear = array();
			$accion_crear['obs_reg_rqs'] = $post_data['obs_rqs'];
			$accion_crear['rqs_id'] = $requisicion->id;
			$accion_crear['acc_rqs_id'] = $post_data['acc_rqs'];
			$accion_crear['user_id'] = Auth::user()->id;
			RegistroHistoricoRequisicion::create($accion_crear);
			
			
			
			return redirect()->intended('/entregarRQS');
			
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
	
	public function getAlmacenProducto(int $id){
		$producto = Producto::find($id);
		if($producto){
			$almacen = $producto->almacen()->first();
			$almacen['und'] = $producto->unidad->des_und;
		}
		else{
			$almacen = null;
		}
		return $almacen;
	}
	
	public function cargardisponibleproducto(Request $request)
    {
		//$unidades = Unidad::whereIn('id', '=', $producto)->get();
		$almacen = $this->getAlmacenProducto($request['option']);
		return response()->json($almacen);
	}
	
}


