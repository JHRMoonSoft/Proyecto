<?php

namespace App\Http\Controllers;

use App\Proveedor;
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
        
	return View('proveedor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return View('proveedor.create');
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
    public function show(Proveedor $proveedor)
    {
        $proveedors = Permission::find($proveedor);
        return View('proveedor.show')->with('proveedors', $proveedors);
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $proveedors = Proveedor::find($proveedor);
		return view('proveedor.edit')->with('proveedors', $proveedors);
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
            $proveedor = Proveedor::find($post_data['id']);
            $proveedor->raz_soc = $post_data['raz_soc'];
            $proveedor->tip_doc = $post_data['tip_doc'];
			$proveedor->num_doc = $post_data['num_doc'];
			$proveedor->tel_fij = $post_data['tel_fij'];
            $proveedor->tel_cel = $post_data['tel_cel'];
			$proveedor->dir_mail = $post_data['dir_mail'];
			$proveedor->dir_prov = $post_data['dir_prov'];
            $proveedor->brr_prov = $post_data['brr_prov'];
			$proveedor->ciu_prov = $post_data['ciu_prov'];
			$proveedor->pai_prov = $post_data['pai_prov'];
            $proveedor->obs_prov = $post_data['obs_prov'];
			return view('proveedor.show')->with('proveedor', $proveedor);
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
