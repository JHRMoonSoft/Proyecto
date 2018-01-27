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
use Excel;


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
        $solicitudcompras = SolicitudCompra::all();
		 
		return View('solicitudcompra.index')->with(compact('solicitudcompras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {	
		$productos = Producto::all();
		$rqsAutorizadas = EstadosRequisicion::find(2)->requisiciones;
		return View('solicitudcompra.create')->with(compact('productos','rqsAutorizadas'));
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
		$post_data['user_id'] = Auth::user()->id;
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
			$i = 1;
			$num_rqs = $post_data['totalrqs'];
			while($i <= $num_rqs){
				$requisicion = Requisicion::find($post_data['rqs' . $i]);
				$requisicion->est_rqs = 4;
				$requisicion->rol_rqs = 3;
				$requisicion->save();
				
				$accion_crear = array();
				$accion_crear['obs_reg_rqs'] = $post_data['obv_scp'] . ". Solicitud de Compra #" . $solicitudcompra->id;
				$accion_crear['rqs_id'] = $requisicion->id;
				$accion_crear['acc_rqs_id'] = 4;
				$accion_crear['user_id'] = Auth::user()->id;
				RegistroHistoricoRequisicion::create($accion_crear);
				$i++;
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
    {	 $solicitudcompra = SolicitudCompra::with('productossolicitudcompra')->find($id);
		foreach($solicitudcompra->productossolicitudcompra as $prod){
			$prod->almacen = $this->getAlmacenProducto($prod->prod_id);
		}

		$productos = Producto::all();
		return view('solicitudcompra.show')->with(compact('solicitudcompra','productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {	
        $solicitudcompra = SolicitudCompra::with('productossolicitudcompra')->find($id);
		foreach($solicitudcompra->productossolicitudcompra as $prod){
			$prod->almacen = $this->getAlmacenProducto($prod->prod_id);
		}

		$productos = Producto::all();
		$rqsAutorizadas = EstadosRequisicion::find(2)->requisiciones()
													->whereHas('productos' , function ($q){
														$q->where('apr_prod',true);
													})->get();
		//return $solicitudcompra;
		return View('solicitudcompra.edit')->with(compact('productos','rqsAutorizadas','solicitudcompra'));
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
            'asn_scp' => 'required',
			'obv_scp' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $solicitudcompra = SolicitudCompra::find($id);
            $solicitudcompra->asn_scp = $post_data['asn_scp'];
			$solicitudcompra->obv_scp = $post_data['obv_scp'];
			$numprods = (int)$post_data['cantproductos'];
			$i = (int)$post_data['cantproductosinicial'] + 1;
			while($i <= $numprods){
				$producto_i = array();
				$producto_i['prod_id'] = $post_data['producto'.$i];
				$producto_i['cant_sol_prd'] = $post_data['cantidad'.$i];
				$producto_i['unidad_emp_id'] = $post_data['unidad'.$i];
				$producto_i['sol_comp_id'] = $solicitudcompra->id;
				if(!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_sol_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_emp_id'])){
					ProductosSolicitudCompra::create($producto_i);
				}
				$i = $i + 1;
				//return $producto_i;
			}
			//return redirect()->intended('/solicitudcompra/' . $solicitudcompra->id);
			return redirect()->intended('/solicitudcompra');
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
	
	public function getUnidadesProducto(int $id){
		
		$producto = Producto::find($id);
		if($producto){
			$unidades = $producto->unidades()->get();
		}
		else{
			$unidades = Unidad::all();
		}
		return $unidades;
	}
	public function cargarunidadesproducto(Request $request)
    {
		//$unidades = Unidad::whereIn('id', '=', $producto)->get();
		$unidades = $this->getUnidadesProducto($request['option']);
		return response()->json($unidades);
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
	
	public function buscarRQSAutorizada(Request $request)
    {
		$rqs = Requisicion::find($request['option']);
		if(!$rqs or $rqs->estadorequisicion->id != 2){
			$productosRQS = null;
		}
		else{
			$productosRQS = ProductosRequisicion::with('producto')
			->with('unidad_solicitada')
			->with('requisicion')
			->where('rqs_id',$rqs->id)
			->where('apr_prod',true)
			->get();
			//return $productosRQS; 
			foreach($productosRQS as $prodRQS){
				$prodRQS->almacen = $this->getAlmacenProducto($prodRQS->producto->id);
				$prodRQS->unidades = $prodRQS->producto->unidades;
			}
		}
		return response()->json($productosRQS);
	}
	
	public function buscarRQSAutorizadaPorFecha(Request $request)
    {
		$est_req = EstadosRequisicion::find(2);
		$from = Carbon::parse($request['start']);
		$to = Carbon::parse($request['end']);
		$rqs = $est_req->requisiciones
		->where('updated_at' , '>=', $from)
		->where('updated_at' , '<=', $to);
		$productosRQS = array();
		foreach($rqs as $rq){
			foreach($rq->productos as $productoRQS){
				if($productoRQS->apr_prod){
					array_push($productosRQS, $productoRQS->id);
				}
			}
		}
		$productosRQS = ProductosRequisicion::with('producto')
		->with('unidad_solicitada')
		->with('requisicion')
		->find($productosRQS);
		//return $productosRQS; 
		foreach($productosRQS as $prodRQS){
			$prodRQS->almacen = $this->getAlmacenProducto($prodRQS->producto->id);
			$prodRQS->unidades = $prodRQS->producto->unidades;
		}
		return response()->json($productosRQS);
	}
	
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	
	public function exporscp($id) {
		
		\Excel::create('Base_de_datos_Consolidados-SCP', function ($excel) use($id) {
			
			$dia = date ("j/n/Y");
			$hora= date ("h:i:s");
			$solicitudcompras =SolicitudCompra::find($id);
			$productos = $solicitudcompras->productossolicitudcompra()->get();
			
				$excel->sheet('Solicitudcompras', function($sheet) use($solicitudcompras, $productos) {
							
									
					$sheet->prependRow(5, array( '' ))->cell('A1:B1', function($cell) { $cell->setFontWeight('bold'); $cell->setFontSize(18); $cell->setFontWeight('FF0f000');   })
					->cell('C1:E1', function($cell) { $cell->setFontWeight('bold'); $cell->setFontSize(13); $cell->setFontWeight('FF0f000');   })
					->cell('A6:D6', function($cell) { $cell->setFontWeight('bold'); $cell->setFontSize(12); $cell->setFontWeight('FF0f000');   }); 
			 
			 
					$sheet->row(1, [
					'Asunto',$solicitudcompras->asn_scp,'Código' ,'' ,'Observación:'
					]);
					
					$sheet->row(2, [
					'Fecha de Creación',$solicitudcompras->created_at,$solicitudcompras->id,'',$solicitudcompras->obv_scp 
					]);
					$sheet->row(3, [
					'Fecha de Actualización',$solicitudcompras->updated_at
					]);
				
					
					$sheet->row(6, [
						'#', 'PRODUCTO','UND','CANTIDAD'
					]);
				
					foreach($productos as $index => $prod) {
						$sheet->row($index+7, [
							$index+1, $prod->producto->des_prd, $prod->unidad_solicitada->des_und,$prod->cant_sol_prd
						]); 
					}
			
					
				});
		
		
		})->download('xlsx');
		
	}
		

	

}
