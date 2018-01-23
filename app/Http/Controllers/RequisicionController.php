<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
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
use Excel;
use PDF;

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
			'obs_rqs'=> 'required',
			'est_rqs'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if ($validate->passes()){
			$requisicion = Requisicion::create($post_data);
			$numprods = (int)$post_data['cantproductos'];
			$numprovs = (int)$post_data['cantproveedores'];
			$i = 1;
			$productos_vacios = true;
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i] == 0 ? null : $post_data['producto'.$i];
				$producto_i['cant_sol_prd'] = $post_data['cantidad'.$i];
				$producto_i['unidad_sol_id'] = $post_data['unidad'.$i];
				$producto_i['nom_prd'] = $post_data['detalle'.$i];
				$producto_i['rqs_id'] = $requisicion->id;
				if((!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_sol_id']))
					or (!$this->IsNullOrEmptyString($producto_i['nom_prd']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_sol_id']))){
					$producto_i['cant_apr_prd'] = $producto_i['cant_sol_prd'];
					ProductosRequisicion::create($producto_i);
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			if($productos_vacios === true){
				$requisicion->delete();
				$validate->errors()->add('cantproductos', 'Debe existir al menos un producto válido asociado a esta requisición.');
				return redirect()->back()->withInput()->withErrors($validate);
			}
			
			$i = 1;
			while($i <= $numprovs){
				$proveedor_i = array();
				$proveedor_i['raz_soc'] = $post_data['nombre'.$i];
				$proveedor_i['tel_fij'] = $post_data['telefono'.$i];
				$proveedor_i['rqs_id'] = $requisicion->id;
				if(!$this->IsNullOrEmptyString($proveedor_i['raz_soc'])){
					ProveedoresRequisicion::create($proveedor_i);
				}
				$i = $i + 1;
				//return $proveedor_i;
			}
			
			$accion_crear = array();
			$accion_crear['obs_reg_rqs'] = $post_data['obs_rqs'];
			$accion_crear['rqs_id'] = $requisicion->id;
			$accion_crear['acc_rqs_id'] = $post_data['acc_rqs'];
			$accion_crear['user_id'] = Auth::user()->id;
			RegistroHistoricoRequisicion::create($accion_crear);			
			return redirect()->intended('/requisicion/' . $requisicion->id);
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
        $proveedores = Proveedor::all();
		$requisicion = Requisicion::find($id);
		$registrohistoricorequisicion = RegistroHistoricoRequisicion::where('rqs_id',$id)->get();
        $productos = $requisicion->productos()->get();
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)->get();
		$unidades = Unidad::all();
		return view('requisicion.show', compact('requisicion','registrohistoricorequisicion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisicion = Requisicion::find($id);
		$registrohistoricorequisicion = RegistroHistoricoRequisicion::where('rqs_id',$id)->get();
        $productos = Producto::all();
		$proveedores = Proveedor::all();
		return View('requisicion.edit')->with(compact('requisicion','productos','proveedores'));
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
            $numprods = (int)$post_data['cantproductos'];
			$i = (int)$post_data['cantproductosinicial'] + 1;
			$productos_vacios = true;
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i] == 0 ? null : $post_data['producto'.$i];
				$producto_i['cant_sol_prd'] = $post_data['cantidad'.$i];
				$producto_i['unidad_sol_id'] = $post_data['unidad'.$i];
				$producto_i['nom_prd'] = $post_data['detalle'.$i];
				$producto_i['rqs_id'] = $requisicions->id;
				if((!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_sol_id']))
					or (!$this->IsNullOrEmptyString($producto_i['nom_prd']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_sol_id']))){
					$producto_i['cant_apr_prd'] = $producto_i['cant_sol_prd'];
					ProductosRequisicion::create($producto_i);
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			$numprovs = (int)$post_data['cantproveedores'];
			$i = (int)$post_data['cantproveedoresinicial'] + 1;
			while($i <= $numprovs){
				$proveedor_i = array();
				$proveedor_i['raz_soc'] = $post_data['nombre'.$i];
				$proveedor_i['tel_fij'] = $post_data['telefono'.$i];
				$proveedor_i['rqs_id'] = $requisicions->id;
				if(!$this->IsNullOrEmptyString($proveedor_i['raz_soc'])){
					ProveedoresRequisicion::create($proveedor_i);
				}
				$i = $i + 1;
				//return $proveedor_i;
			}
			
			$accion_crear = array();
			$accion_crear['obs_reg_rqs'] = "Modificacion de RQS";
			$accion_crear['rqs_id'] = $requisicions->id;
			$accion_crear['acc_rqs_id'] = $post_data['acc_rqs'];
			$accion_crear['user_id'] = Auth::user()->id;
			RegistroHistoricoRequisicion::create($accion_crear);
			
			$requisicions->save();
			return redirect()->intended('/requisicion/' . $requisicions->id);
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
	
	// Function for basic field validation (present and neither empty nor only white space
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	
	
	
	public function requisicionuser ($id)
	{
		
		
		
		$requisicions = Requisicion::all();
		$requisiciones = array();
		foreach($requisicions as $rqs){
			if($rqs->registrohistoricorequisicion->first()->user->id == $id){
				array_push($requisiciones,$rqs);
			}
		}
		$usuario = Requisicion::find($id);
		//$requisiciones = Requisicion::all();
		$now = Carbon::now();
        return View('requisicion.index')->with(compact('requisiciones','usuario','now'));
		
		
	}
	
	

	/*
	public function exportRequisicion () {
		\Excel::create('Requisiciones', function($excel) {
		 
			$requisicions = Requisicion::all();
		 
			$excel->sheet('Requisiciones', function($sheet) use($requisicions) {
		 
			$sheet->fromArray($requisicions);
		 
			});
			
			
			
		})->export('xlsx');
		
	}*/
	
	public function inventarioRequisicion ($id)
    {
        $requisicion = Requisicion::find($id);
		$productos = Producto::all();
		return View('requisicion.inventario')->with(compact('requisicion','productos'));
		
	}
	
	public function exportRequisiciones () {
		\Excel::create('Requisiciones', function($excel) {
		 
			$requisicions = Requisicion::with('proveedoresrequisicion')
					->with('estadorequisicion')
					->with('productos')
					->all();
		 
			$excel->sheet('Requisiciones', function($sheet) use($requisicions) {
		 
			$sheet->row(1, [
				'Código', 'Asunto','Justificación','Fecha de aprobación','Fecha de Creación', 'Fecha de Actualización'
			]);
		
			foreach($requisicions as $index => $requisicion) {
				$sheet->row($index+2, [
					$requisicion->id, $requisicion->asn_rqs, $requisicion->jst_rqs,  $requisicion->fec_apr_com,$requisicion->created_at, $requisicion->updated_at
				]); 
			}
					 
			});
			
		})->export('xlsx');
		
	}
	
		public function exporpdftRequisicion()
		{			
		
			$pdf = PDF::loadView('inventario');
            return $pdf->download('pdfview.pdf');
			
			;
		}
	
		public function exportRequisicion($id) {
			
						
			\Excel::create('Requisición'.$id, function ($excel) use($id) {
				$requisicions = Requisicion::with('proveedoresrequisicion')
					->with('estadorequisicion')
					->with('productos')
					->find($id);
				
				$excel->sheet('Requisición'.$id, function($sheet) use($requisicions) {
			 
				$sheet->row(1, [
					'Código', 'Asunto','Justificación','Estado','Fecha de aprobación','Fecha de Creación', 'Fecha de Actualización'
				]);
			
				$sheet->row(2, [
						$requisicions->id, $requisicions->asn_rqs, $requisicions->jst_rqs, $requisicions->estadorequisicion->desc_est_req, $requisicions->fec_apr_com,$requisicions->created_at, $requisicions->updated_at
					]); 
					 
				});
				
			})->download('xlsx');
		
		}
}
