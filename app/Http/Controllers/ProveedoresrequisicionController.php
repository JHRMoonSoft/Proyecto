<?php

namespace App\Http\Controllers;

use App\proveedoresrequisicion;
use Illuminate\Http\Request;

class ProveedoresrequisicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'raz_soc'=> 'required',
			'tip_doc'=> 'required',
			'num_doc'=> 'required',
			'tel_fij'=> 'required',
			'tel_cel'=> 'required',
			'dir_mail'=> 'required',
			'dir_prov'=> 'required',
			'brr_prov'=> 'required',
			'ciu_prov'=> 'required',
			'pai_prov'=> 'required',
			'obs_prov'=> 'required',
			'est_prov'=> 'required',
			'rqs_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$proveedoresrequisicion = Proveedoresrequisicion::create($post_data);	 		
		}
		$proveedoresrequisicions = Proveedoresrequisicion::all();
		//return view('proveedoresrequisicion.index')->with('proveedoresrequisicions', $proveedoresrequisicions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proveedoresrequisicion  $proveedoresrequisicion
     * @return \Illuminate\Http\Response
     */
    public function show(proveedoresrequisicion $proveedoresrequisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedoresrequisicion  $proveedoresrequisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedoresrequisicion $proveedoresrequisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedoresrequisicion  $proveedoresrequisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedoresrequisicion $proveedoresrequisicion)
    {
        $post_data = $request->all();
		$rules = [
			'raz_soc'=> 'required',
			'tip_doc'=> 'required',
			'num_doc'=> 'required',
			'tel_fij'=> 'required',
			'tel_cel'=> 'required',
			'dir_mail'=> 'required',
			'dir_prov'=> 'required',
			'brr_prov'=> 'required',
			'ciu_prov'=> 'required',
			'pai_prov'=> 'required',
			'obs_prov'=> 'required',
			'est_prov'=> 'required',
			'rqs_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $proveedoresrequisicions = Proveedoresrequisicion::find($post_data['id']);
            $proveedoresrequisicions->raz_soc = $post_data['raz_soc'];
			$proveedoresrequisicions->tip_doc = $post_data['tip_doc'];
			$proveedoresrequisicions->num_doc = $post_data['num_doc'];
			$proveedoresrequisicions->tel_fij = $post_data['tel_fij'];
			$proveedoresrequisicions->tel_cel = $post_data['tel_cel'];
			$proveedoresrequisicions->dir_mail = $post_data['dir_mail'];
			$proveedoresrequisicions->dir_prov = $post_data['dir_prov'];
			$proveedoresrequisicions->brr_prov = $post_data['brr_prov'];
			$proveedoresrequisicions->ciu_prov = $post_data['ciu_prov'];
			$proveedoresrequisicions->pai_prov = $post_data['pai_prov'];
			$proveedoresrequisicions->obs_prov = $post_data['obs_prov'];
			$proveedoresrequisicions->est_prov = $post_data['est_prov'];
			$proveedoresrequisicions->rqs_id = $post_data['rqs_id'];
			//return view('proveedoresrequisicion.show')->with('proveedoresrequisicions', $proveedoresrequisicions);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedoresrequisicion  $proveedoresrequisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedoresrequisicion $proveedoresrequisicion)
    {
        //
    }
}
