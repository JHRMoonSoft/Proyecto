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
use FPDI;


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
			'est_rqs'=> 'required',
			'area_id'=> 'required',
			'cargo_id'=> 'required'
			];
			
		$areas = User::find(Auth::user()->id)->area->id;
		$cargos = User::find(Auth::user()->id)->cargo->id;
		$post_data['area_id'] = $areas;	
		$post_data['cargo_id'] = $cargos;	
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
			'est_rqs'=> 'required',
			'area_id'=> 'required',
			'cargo_id'=> 'required'
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
	
	public function exporpdftrqs($id)
	{	
		
		$proveedores = Proveedor::all();
		$requisicion = Requisicion::find($id);
		$registrohisrqs = RegistroHistoricoRequisicion::where('rqs_id',$id)->first();
		$usuario = $registrohisrqs->user;
		//return $requisicion->proveedoresrequisicion;
		$productos = $requisicion->productos()->get();
		$acciones = AccionesRequisicion::where('est_ant_rqs_id','=',$requisicion->estadorequisicion->id)->get();
		$unidades = Unidad::all();
	
		//DESCRIPCION PRODUCTOS 1
		$cant_productos = $productos->count();
		$cant_hojas = (int) ($cant_productos / 17);
		$hoja = 0;
		$EDFSDF = 0;
		
		$pdf = new FPDI();
		// add a page
		$this->nuevapaginapdf($pdf,'C:/Users/JORGE/Documents/GitHub/Proyecto/resources/views/requisicion/AF-003-01-Formato-rqs.pdf');
		// now write some text above the imported page
		$pdf->SetFont('Helvetica');
		$pdf->SetTextColor(0, 0, 0);
		$justi = $requisicion->jst_rqs;
		$this->escribirencabezado($pdf, $justi, $usuario, $hoja + 1, $cant_hojas + 1);
		
		while($hoja < $cant_hojas || (($hoja * 17) + $EDFSDF < $cant_productos)){
			$pdf->SetXY(26,91 + ($EDFSDF * 6));
			$pdf->Write(0, $this->escribirtexto(($hoja * 17) + $EDFSDF + 1));
			$pdf->SetXY(52,91 + ($EDFSDF * 6));
			$pdf->Write(0, $this->escribirtexto($productos[($hoja * 17) + $EDFSDF]->cant_sol_prd));
			$pdf->SetXY(68,91 + ($EDFSDF * 6));
			$pdf->Write(0, $this->escribirtexto($productos[($hoja * 17) + $EDFSDF]->unidad_solicitada->des_und));
			$pdf->SetXY(90,91 + ($EDFSDF * 6));
			if($productos[($hoja * 17) + $EDFSDF]->producto == null)
				$pdf->Write(0, $this->escribirtexto($productos[($hoja * 17) + $EDFSDF]->nom_prd));
			else
				$pdf->Write(0, $this->escribirtexto($productos[($hoja * 17) + $EDFSDF]->producto->des_prd));
			$EDFSDF++;
			if($EDFSDF % 17 == 0){
				$hoja++;
				$EDFSDF = 0;
				$this->escribirfooter($pdf, $requisicion);
				$this->nuevapaginapdf($pdf,'C:/Users/JORGE/Documents/GitHub/Proyecto/resources/views/requisicion/AF-003-01-Formato-rqs.pdf');
				$this->escribirencabezado($pdf, $justi, $usuario, $hoja + 1, $cant_hojas + 1);
			}
		}
		$this->escribirfooter($pdf, $requisicion);
		$pdf->Output('AF-003-01-Formato-de-requision-cod-'.$requisicion->id.'.pdf', 'D');
		
	}
	
	public function escribirtexto(string $str = ""){
		return iconv('UTF-8', 'windows-1252', stripslashes($str));		
	}
	
	public function nuevapaginapdf(FPDI $pdf, string $path = ""){
		
		// add a page
		$pdf->AddPage('P','Letter');
		// set the source file
		if(!($path == "")){
			$pdf->setSourceFile($path);
			// import page 1
			$tplIdx = $pdf->importPage(1);
			//$pdf->useTemplate($tplIdx);
			$pdf->useTemplate($tplIdx, null, null, 0, 0, true);
		}
			
		
	}
	
	public function escribirencabezado(FPDI $pdf, string $jst, User $user, int $hoja_actual, int $cant_hojas){
		
		$pdf->SetXY(137,34);
		$pdf->Write(0, $this->escribirtexto($hoja_actual . ' de ' . $cant_hojas));
		
		$pdf->SetXY(42,53);
		$pdf->Write(0, $this->escribirtexto($user->nom_usr . ' ' . $user->ape_usr));
		$pdf->SetXY(165,53);
		$pdf->Write(0, $this->escribirtexto($user->cargo->des_crg));
		$pdf->SetXY(68,58);
		$pdf->Write(0, $this->escribirtexto($user->area->des_are));
		$pdf->SetXY(169,58);
		$pdf->Write(0, $this->escribirtexto($user->crd_usr));
		$pdf->SetXY(68,68);
		$pdf->Write(0, $this->escribirtexto($jst));
	}
	
	public function escribirfooter(FPDI $pdf, Requisicion $requisicion){
		
		//Proveedores sugeridos:
		foreach($requisicion->proveedoresrequisicion as $index => $provrqs){
			if($index > 3)
				break;
			$pdf->SetXY(18,198 + (5.5 * $index));
			$pdf->Write(0,$provrqs->raz_soc);		
		}
		
		//Fechas firmas:
		$pdf->SetXY(90,208);
		$pdf->Write(0, $this->escribirtexto($requisicion->created_at->format('Y-m-d')));
		$pdf->SetXY(128,208);
		$acc_aut = RegistroHistoricoRequisicion::where('rqs_id',$requisicion->id)->where('acc_rqs_id',3)->first();
		if(!($acc_aut == null))
			$pdf->Write(0, $this->escribirtexto($acc_aut->created_at->format('Y-m-d')));
		
		//Tipo de solicitud:
		$pdf->SetXY(84,223);
		$str_con = ($requisicion->tip_sol >= 1 and $requisicion->tip_sol != 2) ? 'x' : '';
		$pdf->Write(0, $str_con);
		$pdf->SetXY(102,223);
		$str_inv = ($requisicion->tip_sol >= 2) ? 'x' : '';
		$pdf->Write(0, $str_inv);
		
		//Proveedor autorizado:
		if($requisicion->prv_apr == true){
			$pdf->SetXY(73,228);
			$pdf->Write(0,'x');
		}
		else{
			$pdf->SetXY(93,228);
			$pdf->Write(0,'x');
		}
		
		//Aprobado en comité: 
		if($requisicion->apr_com == true){
			$pdf->SetXY(73,233);
			$pdf->Write(0,'x');
		}
		else{
			$pdf->SetXY(93,233);
			$pdf->Write(0,'x');
		}
		
		//Fecha
		$pdf->SetXY(138,233);
		$pdf->Write(0, $requisicion->fec_apr_com);
		
		//Recibí los elementos solicitados
		$pdf->SetXY(42,253);
		$pdf->Write(0, $requisicion->nom_rcp_rqs);
		$pdf->SetXY(125,253);
		$pdf->Write(0, $requisicion->crg_rcp_rqs);
		$pdf->SetXY(177,253);
		if(!($requisicion->fec_rcp_rqs == null))
			$pdf->Write(0, $this->escribirtexto($requisicion->fec_rcp_rqs));
		
		$acc_rcp = RegistroHistoricoRequisicion::where('rqs_id',$requisicion->id)->where('acc_rqs_id',11)->first();
		if(!($acc_rcp == null)){
			$pdf->SetXY(167,208);
			$pdf->Write(0, $this->escribirtexto($acc_rcp->created_at->format('Y-m-d')));
			$pdf->SetXY(42,259);
			$pdf->Write(0, $acc_rcp->obs_reg_rqs);
		}
			
		
	}
	
	
	public function exportRequisiciones () {
		\Excel::create('Requisiciones', function($excel) {
		 
			$requisicions = Requisicion:: /*with('proveedoresrequisicion')
					->with('estadorequisicion')
					->with('productos')
					->*/
					all();
		 
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
