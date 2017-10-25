<?php

namespace App\Http\Controllers;

use App\accionesrequisicion;
use Illuminate\Http\Request;

class AccionesrequisicionController extends Controller
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
            'des_acc_rqs')=> 'required',
			'est_rqs_id'=> 'required',
			'est_ant_rqs_id'=> 'required',
			'rol_asg_rqs_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$accionesrequisicion = Accionesrequisicion::create($post_data);	 		
		}
		$accionesrequisicions = Accionesrequisicion::all();
		//return view('accionesrequisicion.index')->with('accionesrequisicions', $accionesrequisicions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accionesrequisicion  $accionesrequisicion
     * @return \Illuminate\Http\Response
     */
    public function show(accionesrequisicion $accionesrequisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accionesrequisicion  $accionesrequisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(accionesrequisicion $accionesrequisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accionesrequisicion  $accionesrequisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accionesrequisicion $accionesrequisicion)
    {
        $post_data = $request->all();
		$rules = [
            'des_acc_rqs')=> 'required',
			'est_rqs_id'=> 'required',
			'est_ant_rqs_id'=> 'required',
			'rol_asg_rqs_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $accionesrequisicions = Accionesrequisicion::find($post_data['id']);
            $accionesrequisicions->des_acc_rqs = $post_data['des_acc_rqs'];
			$accionesrequisicions->est_rqs_id = $post_data['est_rqs_id'];
			$accionesrequisicions->est_ant_rqs_id = $post_data['est_ant_rqs_id'];
			$accionesrequisicions->rol_asg_rqs_id = $post_data['rol_asg_rqs_id'];
			//return view('accionesrequisicion.show')->with('accionesrequisicions', $accionesrequisicions);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accionesrequisicion  $accionesrequisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(accionesrequisicion $accionesrequisicion)
    {
        //
    }
}
