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
				$producto_i['cnt_prd_fact'] = $post_data['cantidad'.$i];
				$producto_i['iva_unt_fact'] = $post_data['ivaunitario'.$i];
				$producto_i['val_unt_fact'] = $post_data['valorunitario'.$i];
				$producto_i['val_tol_fact'] = $post_data['valortotal'.$i];
				
				$producto_i['fec_ven'] = Carbon::parse($post_data['vence'.$i]);
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
    public function update(Request $request, OrdenCompra $ordencompra)
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
            $ordencompras = OrdenCompra::find($post_data['id']);
            $ordencompras->no_ocp = $post_data['no_ocp'];
			$ordencompras->cnp_ocp = $post_data['cnp_ocp'];
			$ordencompras->aut_ocp = $post_data['aut_ocp'];
			$ordencompras->form_pag = $post_data['form_pag'];
			$ordencompras->dia_cred = $post_data['dia_cred'];
			$ordencompras->tim_entr = $post_data['tim_entr'];
			$ordencompras->otr_ocp = $post_data['otr_ocp'];
			$ordencompras->subt_ocp = $post_data['subt_ocp'];
			$ordencompras->iva_ocp = $post_data['iva_ocp'];
			$ordencompras->tol_ocp = $post_data['tot_ocp'];
			$ordencompras->obv_ocp = $post_data['obv_ocp'];
			$ordencompras->empre_id = $post_data['empre_id'];
			$ordencompras->prov_id = $post_data['prov_id'];
			return view('ordencompra.show')->with('ordencompras', $ordencompras);
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
		$prodSolCom = ProductosSolicitudCompra::all('prod_id');
		$productos = Producto::where('categoria_id','=',$request['option'])
							->whereIn('id',$prodSolCom)
							->get();
		
		return response()->json($productos);
	}
	
	public function cargarproductosseleccionados(Request $request)
    {
		if($request['prds'] == 0){
			
			$prod_cats = Producto::where('categoria_id','=',$request['cats'])
							->get(['id']);
			$productos = ProductosSolicitudCompra::with('producto')
					->with('unidad_solicitada')
					->whereIn('prod_id',$prod_cats)->get();
		}
		else{			
			$productos = ProductosSolicitudCompra::with('producto')
					->with('unidad_solicitada')
					->where('prod_id','=',$request['prds'])->get();
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
	
	
	
	public function exporpdftocp ($id)
	{
		
		// initiate FPDI
		$pdf = new FPDI();		
		// add a page
		$pdf->AddPage('P','Letter');
		$pdf->setSourceFile('C:/Users/JORGE/Documents/GitHub/Proyecto/resources/views/ordencompra/AF-003-03-Formato-Orden-de-Compras.pdf');
		// import page 1
		$tplIdx = $pdf->importPage(1);
		//$pdf->useTemplate($tplIdx);
		$pdf->useTemplate($tplIdx, null, null, 0, 0, true);
		$pdf->SetFont('Helvetica');
		$pdf->SetTextColor(0, 0, 0);
		
		//
		$pdf->SetXY(144,37);
		$pdf->Write(0, '1 de 1');
		$pdf->SetXY(123,65.5);
		$pdf->Write(0, '0001');
		$pdf->SetXY(165,70);
		$pdf->Write(0, 'Fecha');
		$pdf->SetXY(165,75);
		$pdf->Write(0, 'Nit');
		$pdf->SetXY(165,80.5);
		$pdf->Write(0, ' Pago');
		$pdf->SetXY(27,75);
		$pdf->SetXY(165,85.5);
		$pdf->Write(0, ' Tiempo de entrega');
		$pdf->SetXY(27,75);
		$pdf->Write(0, 'Proveedor');
		$pdf->SetXY(27,80.5);
		$pdf->Write(0, 'Direccion');
		$pdf->SetXY(27,85.5);
		$pdf->Write(0, 'Telefono');
		$pdf->SetXY(27,90);
		$pdf->Write(0, 'Contacto');
		
		//PRODUCTOS1
		$pdf->SetXY(20,100);
		$pdf->Write(0, '1');
		$pdf->SetXY(40,100);
		$pdf->Write(0, 'Und');
		$pdf->SetXY(56,100);
		$pdf->Write(0, 'Producto');
		$pdf->SetXY(133,100);
		$pdf->Write(0, '$');
		$pdf->SetXY(168,100);
		$pdf->Write(0, '$');
		
		//PRODUCTOS2
		$pdf->SetXY(20,105.5);
		$pdf->Write(0, '2');
		$pdf->SetXY(40,105.5);
		$pdf->Write(0, 'Und');
		$pdf->SetXY(56,105.5);
		$pdf->Write(0, 'Producto');
		$pdf->SetXY(133,105.5);
		$pdf->Write(0, '$');
		$pdf->SetXY(168,105.5);
		$pdf->Write(0, '$');
		
		//
		$pdf->SetXY(168,171.5);
		$pdf->Write(0, '$');
		$pdf->SetXY(168,176.5);
		$pdf->Write(0, '$');
		$pdf->SetXY(168,181.5);
		$pdf->Write(0, '$');
				
		$pdf->SetXY(38,187);
		$pdf->Write(0, 'Producto');
		
		
		
		$pdf->Output('AF-003-03-Formato-Orden-de-Compras-cod.pdf', 'D');
		//$pdf->Output('AF-003-03-Formato-Orden-de-Compras-cod-'.$requisicion->id.'.pdf', 'D');		
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
	
}
