<?php

namespace App\Http\Controllers;

use App\Proveedor;
use App\Categoria;
use Validator;
use Illuminate\Http\Request;

class ProveedorController extends Controller
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
		$proveedors = Proveedor::all();     
		
		$categorias = Categoria::find($proveedors);
		return view('proveedor.index')->with(compact('categorias','proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$categorias = Categoria::all();
		return View('proveedor.create')->with(compact('categorias'));
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
			'raz_soc' => 'required',
			'tip_doc' => 'required', 
			'num_doc' => 'required',
			'tel_fij' => 'required', 
			'tel_cel' => '',  
			'dir_mail'=> '', 
			'dir_prov'=> '', 
			'brr_prov'=> '',  
			'ciu_prov'=> '', 
			'pai_prov'=> '',  
			'obs_prov'=> ''
			
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$proveedor = Proveedor::create($post_data);			
			$proveedor->categorias()->sync($post_data['categorias']);
			$proveedor->save();
		}
		$proveedors = Proveedor::all();
		return view('proveedor.index')->with('proveedors', $proveedors);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
		
		$proveedors = Proveedor::find($id);
		$categorias = $proveedors->categorias;
        return view('proveedor.show', compact('proveedors', 'categorias'));
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedors = Proveedor::find($id);
		$categorias = $proveedors->categorias->toArray();
		$categoriasGeneral = Categoria::all();
		return view('proveedor.edit')->with(compact('categoriasGeneral','categorias','proveedors'));
	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $post_data = $request->all();
		$rules = [
            'raz_soc' => 'required',
			'tip_doc' => 'required', 
			'num_doc' => 'required',
			'tel_fij' => 'required', 
			'tel_cel' => '',  
			'dir_mail'=> '', 
			'dir_prov'=> '', 
			'brr_prov'=> '',  
			'ciu_prov'=> '', 
			'pai_prov'=> '',  
			'obs_prov'=> ''
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $proveedors = Proveedor::find($post_data['id']);
            $proveedors->raz_soc = $post_data['raz_soc'];
            $proveedors->tip_doc = $post_data['tip_doc'];
			$proveedors->num_doc = $post_data['num_doc'];
			$proveedors->tel_fij = $post_data['tel_fij'];
            $proveedors->tel_cel = $post_data['tel_cel'];
			$proveedors->dir_mail = $post_data['dir_mail'];
			$proveedors->dir_prov = $post_data['dir_prov'];
            $proveedors->brr_prov = $post_data['brr_prov'];
			$proveedors->ciu_prov = $post_data['ciu_prov'];
			$proveedors->pai_prov = $post_data['pai_prov'];
            $proveedors->obs_prov = $post_data['obs_prov'];
			$proveedors->categorias()->sync($post_data['categorias']);
			$proveedors->save();
			$categorias = $proveedors->categorias;
			return view('proveedor.show', compact('proveedors', 'categorias'));
			
			
			
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
