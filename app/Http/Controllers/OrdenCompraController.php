<?php

namespace App\Http\Controllers;
use Auth;
use App\Producto;
use App\Proveedor;
use App\Categoria;
use App\Unidad;
use App\Configuracion;
use App\OrdenCompra;
use App\ProductosSolicitudCompra;
use App\ProductosOrdenCompra;
use Illuminate\Http\Request;
use App\Role;
use Validator;
use \Carbon\Carbon;
use FPDI;

class OrdenCompraController extends Controller
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
		$ordencompras = OrdenCompra::all();
		return View ('ordencompra.index')->with(compact('ordencompras'));
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
		$categorias = Categoria::all();
		$configuracion = Configuracion::first();
		$unidads = Unidad::all();
		$now = Carbon::now();
		
		return View('ordencompra.create')->with(compact('productos','proveedores','categorias','configuracion','unidads','now'));
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
            'no_ocp' =>' ',
			'cnp_ocp' =>' ',
			'aut_ocp' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_ocp' =>' ',
			'subt_ocp' =>' ',
			'iva_ocp' =>' ',
			'tot_ocp' =>' ',
			'obv_ocp' =>' ',
			'empre_id' =>' ',
			'prov_id' =>' '
			];
		//
        $validate = Validator::make($post_data, $rules);
         if ($validate->passes()){
			 //return $post_data;
			$ordencompra = OrdenCompra::create($post_data);
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
				
				$producto_i['unidad_emp_fact_id'] = $post_data['unidad'.$i];	
				$producto_i['cant_prd_fact'] = $post_data['cantidad'.$i];
				$producto_i['iva_unt_fact'] = $post_data['ivaunitario'.$i];
				$producto_i['val_unt_fact'] = $post_data['valorunitario'.$i];
				$producto_i['val_tol_fact'] = $post_data['valortotal'.$i];
				
				$producto_i['fec_ven'] = $post_data['vence'.$i] != null ? Carbon::parse($post_data['vence'.$i]) : null;
				$producto_i['prod_sol_comp_id'] = $post_data['prodsolcompra'.$i] == 0 ? null : $post_data['prodsolcompra'.$i];
				$producto_i['ord_comp_id'] = $ordencompra->id;
				
				if(!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_emp_id'])){
					ProductosOrdenCompra::create($producto_i);
					$productos_vacios = false;
				}
				$i = $i + 1;
				//return $producto_i;
			}
			if($productos_vacios === true){
				$ordencompra->delete();
				$validate->errors()->add('cantproductos', 'Debe existir al menos un producto válido asociado a esta orden de compras.');
				return redirect()->back()->withInput()->withErrors($validate);
			}
			
			
			return redirect()->intended('/ordencompra');
		
		}
		
		return redirect()->back()->withInput()->withErrors($validate);	
		/*$ordencompras = OrdenCompra::all();
		return view('ordencompra.index')->with('ordencompras', $ordencompras);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		$ordencompras = OrdenCompra::with('productos')->find($id);
		foreach($ordencompras->productos as $prod){
			$prod->almacen = $this->getAlmacenProducto($prod->prod_id);
		}
		$proveedores = Proveedor::all();
		$configuracion = Configuracion::first();
		$producto = Producto::all();
		return view('ordencompra.show')->with(compact('ordencompras','productos','configuracion','proveedores'));
		
		
		
		
       $productos = Producto::all();
		$proveedores = Proveedor::all();
		$categorias = Categoria::all();
		$configuracion = Configuracion::first();
		$unidads = Unidad::all();
		$now = Carbon::now();
		$ordencompras= OrdenCompra::find($id);
		return view('ordencompra.show')->with(compact('ordencompras','productos','proveedores','categorias','configuracion','unidads','now'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $productos = Producto::all();
		$proveedores = Proveedor::all();
		$categorias = Categoria::all();
		$configuracion = Configuracion::first();
		$unidads = Unidad::all();
		$now = Carbon::now();
		$ordencompras = OrdenCompra::find($id);
		return view('ordencompra.edit')->with(compact('ordencompras','productos','proveedores','categorias','configuracion','unidads','now'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $post_data = $request->all();
		$rules = [
            'no_ocp' =>' ',
			'cnp_ocp' =>' ',
			'aut_ocp' =>' ',
			'form_pag' =>' ',
			'dia_cred' =>' ',
			'tim_entr' =>' ',
			'otr_ocp' =>' ',
			'subt_ocp' =>' ',
			'iva_ocp' =>' ',
			'tol_ocp' =>' ',
			'obv_ocp' =>' ',
			'empre_id' =>' ',
			'prov_id'=>' '
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
			
			//Elminaciones de Productos
			$str = rtrim($post_data['productos_eliminar'],",");
			if(!$this->IsNullOrEmptyString($str)){
				$datos = explode(",",$str);
				foreach($datos as $dato){
					$prd = ProductosOrdenCompra::find($dato);
					$prd->delete();
				}
			}
            $ordencompras = OrdenCompra::find($id);
            $numprods = (int)$post_data['cantproductos'];
			$i = 1;
			$productos_vacios = true;
			while($i <= $numprods){
				if($post_data['ordcomproductoid'.$i] > 0){
					$producto_i = ProductosOrdenCompra::find($post_data['ordcomproductoid'.$i]);
					$producto_i->prod_id = $post_data['producto'.$i] == 0 ? null : $post_data['producto'.$i];
					$producto_i->unidad_emp_id = $post_data['unidad'.$i];
					$producto_i->cant_prd = $post_data['cantidad'.$i];
					$producto_i->iva_unt = $post_data['ivaunitario'.$i];
					$producto_i->val_unt = $post_data['valorunitario'.$i];
					$producto_i->val_tol = $post_data['valortotal'.$i];
					
					$producto_i->unidad_emp_fact_id = $post_data['unidad'.$i];	
					$producto_i->cant_prd_fact = $post_data['cantidad'.$i];
					$producto_i->iva_unt_fact = $post_data['ivaunitario'.$i];
					$producto_i->val_unt_fact = $post_data['valorunitario'.$i];
					$producto_i->val_tol_fact = $post_data['valortotal'.$i];
					
					$producto_i->fec_ven = $post_data['vence'.$i] != null ? Carbon::parse($post_data['vence'.$i]) : null;
					$producto_i->prod_sol_comp_id = $post_data['prodsolcompra'.$i] == 0 ? null : $post_data['prodsolcompra'.$i];
					
					$producto_i->ord_comp_id = $ordencompras->id;
					$producto_i->save();
				}
				else{
					$producto_i = array();
					$producto_i['prod_id'] = $post_data['producto'.$i];					
					$producto_i['unidad_emp_id'] = $post_data['unidad'.$i];	
					$producto_i['cant_prd'] = $post_data['cantidad'.$i];
					$producto_i['iva_unt'] = $post_data['ivaunitario'.$i];
					$producto_i['val_unt'] = $post_data['valorunitario'.$i];
					$producto_i['val_tol'] = $post_data['valortotal'.$i];
					
					$producto_i['unidad_emp_fact_id'] = $post_data['unidad'.$i];	
					$producto_i['cant_prd_fact'] = $post_data['cantidad'.$i];
					$producto_i['iva_unt_fact'] = $post_data['ivaunitario'.$i];
					$producto_i['val_unt_fact'] = $post_data['valorunitario'.$i];
					$producto_i['val_tol_fact'] = $post_data['valortotal'.$i];
					
					$producto_i['fec_ven'] = $post_data['vence'.$i] != null ? Carbon::parse($post_data['vence'.$i]) : null;
					$producto_i['prod_sol_comp_id'] = $post_data['prodsolcompra'.$i] == 0 ? null : $post_data['prodsolcompra'.$i];
					$producto_i['ord_comp_id'] = $ordencompras->id;
					if(!$this->IsNullOrEmptyString($producto_i['prod_id']) and !$this->IsNullOrEmptyString($producto_i['cant_prd']) and !$this->IsNullOrEmptyString($producto_i['unidad_emp_id'])){
						ProductosOrdenCompra::create($producto_i);
						$productos_vacios = false;
					}
				}
				$i = $i + 1;
				//return $producto_i;
			}
			
			
			$ordencompras->no_ocp = $post_data['no_ocp'];
			$ordencompras->cnp_ocp = $post_data['cnp_ocp'];
			$ordencompras->aut_ocp = $post_data['aut_ocp'];
			$ordencompras->form_pag = $post_data['form_pag'];
			$ordencompras->dia_cred = $post_data['dia_cred'];
			$ordencompras->tim_entr = $post_data['tim_entr'];
			$ordencompras->otr_ocp = $post_data['otr_ocp'];
			$ordencompras->subt_ocp = $post_data['subt_ocp'];
			$ordencompras->iva_ocp = $post_data['iva_ocp'];
			$ordencompras->tol_ocp = $post_data['tol_ocp'];
			$ordencompras->obv_ocp = $post_data['obv_ocp'];
			$ordencompras->empre_id = $post_data['empre_id'];
			$ordencompras->prov_id = $post_data['prov_id'];
			$ordencompras->save();
			return redirect()->intended('/ordencompra');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenCompra  $ordencompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenCompra $ordencompra)
    {
        //
    }
	
	// Function for basic field validation (present and neither empty nor only white space
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	public function cargarproveedor(Request $request)
    {
		$proveedor = Proveedor::find($request['option']);
		return response()->json($proveedor);
	}
	
	public function cargarproductosdecategoria(Request $request)
    {
		$prod_orden_compra = ProductosOrdenCompra::select('prod_sol_comp_id')->distinct()->pluck('prod_sol_comp_id')->toArray();
		$prodSolCom = ProductosSolicitudCompra::select('prod_id')->whereNotIn('id',$prod_orden_compra)->pluck('prod_id')->toArray();
		$productos = Producto::where('categoria_id','=',$request['option'])
							->whereIn('id',$prodSolCom)
							->get();
		
		return response()->json($productos);
	}
	
	public function cargarproductosseleccionados(Request $request)
    {
		$prod_orden_compra = ProductosOrdenCompra::select('prod_sol_comp_id')->distinct()->pluck('prod_sol_comp_id')->toArray();
		if($request['prds'] == 0){
			$prod_cats = Producto::where('categoria_id','=',$request['cats'])
							->get(['id']);
			$productos = ProductosSolicitudCompra::with('producto')
					->with('unidad_solicitada')
					->whereNotIn('id',$prod_orden_compra)
					->whereIn('prod_id',$prod_cats)
					->get();
			
		}
		else{
			$productos = ProductosSolicitudCompra::with('producto')
					->with('unidad_solicitada')
					->where('prod_id','=',$request['prds'])
					->whereNotIn('id',$prod_orden_compra)
					->get();
		}
		foreach($productos as $prod){
			$prod->unidades = $prod->producto->unidades;
		}
		return response()->json($productos);
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
	
	public function escribirtexto(string $str = ""){
		return iconv('UTF-8', 'windows-1252', stripslashes($str));		
	}
	
	public function escribirencabezado(FPDI $pdf, OrdenCompra $ocp, int $hoja_actual, int $cant_hojas){
		
		$pdf->SetXY(144,37);
		$pdf->Write(0, $this->escribirtexto($hoja_actual . ' de ' . $cant_hojas));
		$pdf->SetXY(123,65.5);
		$pdf->Write(0, $this->escribirtexto($ocp->no_ocp == null ? "" : $ocp->no_ocp));
		$pdf->SetXY(165,70);
		$pdf->Write(0, $this->escribirtexto($ocp->created_at->format('d-m-Y')));
		$pdf->SetXY(165,75);
		$pdf->Write(0, $this->escribirtexto($ocp->proveedor->num_doc));
		$pdf->SetXY(165,80.5);
		$pdf->Write(0, $this->escribirtexto($ocp->form_pag));
		$pdf->SetXY(27,75);
		$pdf->SetXY(165,85.5);
		$pdf->Write(0, $this->escribirtexto($ocp->tim_entr));
		$pdf->SetXY(27,75);
		$pdf->Write(0, $this->escribirtexto($ocp->proveedor->raz_soc));
		$pdf->SetXY(27,80.5);
		$pdf->Write(0, $this->escribirtexto($ocp->proveedor->dir_prov));
		$pdf->SetXY(27,85.5);
		$pdf->Write(0, $this->escribirtexto($ocp->proveedor->tel_fij));
		$pdf->SetXY(27,90);
		$pdf->Write(0, $this->escribirtexto($ocp->otr_ocp == null ? "" : $ocp->otr_ocp));
		
	}
	
	
	public function escribirfooter(FPDI $pdf, OrdenCompra $ocp){
		
		$pdf->SetXY(168,171.5);
		$pdf->Write(0, '$' . $ocp->subt_ocp);
		$pdf->SetXY(168,176.5);
		$pdf->Write(0, '$' . $ocp->iva_ocp);
		$pdf->SetXY(168,181.5);
		$pdf->Write(0, '$' . $ocp->tol_ocp);
				
		$pdf->SetXY(38,187);
		$pdf->Write(0, $ocp->obv_ocp);
		
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
	
	public function exporpdftocp ($id)
	{
		
		$proveedores = Proveedor::all();
		$ocp = OrdenCompra::find($id);
		$productos = $ocp->productos()->get();
		$prod_por_hoja = 14;
		$cant_productos = $productos->count();
		$cant_hojas = (int) ($cant_productos / $prod_por_hoja);
		$hoja = 0;
		$EDFSDF = 0;
		// initiate FPDI
		$pdf = new FPDI();		
		$this->nuevapaginapdf($pdf, 'C:/Users/JORGE/Documents/GitHub/Proyecto/resources/views/documentos/AF-003-03-Formato-Orden-de-Compras.pdf');
		
		$pdf->SetFont('Helvetica');
		$pdf->SetTextColor(0, 0, 0);
		
		$this->escribirencabezado($pdf, $ocp, $hoja + 1, $cant_hojas + 1);
		
		while($hoja < $cant_hojas || (($hoja * $prod_por_hoja) + $EDFSDF < $cant_productos)){
			
			$pdf->SetXY(20,100 + ($EDFSDF * 5.5));
			$pdf->Write(0, $this->escribirtexto($productos[($hoja * $prod_por_hoja) + $EDFSDF]->cant_prd ));
			
			$pdf->SetXY(40,100 + ($EDFSDF * 5.5));
			$pdf->Write(0, $this->escribirtexto($productos[($hoja * $prod_por_hoja) + $EDFSDF]->unidad_solicitada->des_und));
			
			$pdf->SetXY(56,100 + ($EDFSDF * 5.5));
			$pdf->Write(0, $this->escribirtexto($productos[($hoja * $prod_por_hoja) + $EDFSDF]->producto->des_prd));
			
			$pdf->SetXY(133,100 + ($EDFSDF * 5.5));
			$pdf->Write(0, $this->escribirtexto('$' . $productos[($hoja * $prod_por_hoja) + $EDFSDF]->val_unt));
			
			$pdf->SetXY(168,100 + ($EDFSDF * 5.5));
			$pdf->Write(0, $this->escribirtexto('$' . ($productos[($hoja * $prod_por_hoja) + $EDFSDF]->val_unt * $productos[($hoja * $prod_por_hoja) + $EDFSDF]->cant_prd)));
			
			$EDFSDF++;
			if($EDFSDF % $prod_por_hoja == 0){
				$hoja++;
				$EDFSDF = 0;
				$this->escribirfooter($pdf, $ocp);
				$this->nuevapaginapdf($pdf,'C:/Users/JORGE/Documents/GitHub/Proyecto/resources/views/documentos/AF-003-03-Formato-Orden-de-Compras.pdf');
				$this->escribirencabezado($pdf, $justi, $usuario, $hoja + 1, $cant_hojas + 1);
			}
		}
		$this->escribirfooter($pdf, $ocp);
		$pdf->Output('AF-003-03-Formato-Orden-de-Compras-cod.pdf', 'D');	
	}
	
		
	public function exporOrdencompra ()
	{
		\Excel::create('OrdenCompras', function($excel) {
		 
			$ordencompras = OrdenCompra:: /*with('proveedoresrequisicion')
					->with('estadorequisicion')
					->with('productos')
					-> */all();
		 
			$excel->sheet('ordencompras', function($sheet) use($ordencompras) {
		 
			$sheet->row(1, [
				'Código', 'Asunto','Justificación','Fecha de aprobación','Fecha de Creación', 'Fecha de Actualización'
			]);
		
			foreach($ordencompras as $index => $ocp) {
				$sheet->row($index+2, [
					$ocp->id, $ocp->asn_rqs, $ocp->jst_rqs,  $ocp->fec_apr_com,$ocp->created_at, $ocp->updated_at
				]); 
			}
					 
			});
			
		})->export('xlsx');
		
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
	
}
