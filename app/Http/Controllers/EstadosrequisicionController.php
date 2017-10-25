<?php

namespace App\Http\Controllers;

use App\estadosrequisicion;
use Illuminate\Http\Request;

class EstadosrequisicionController extends Controller
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
            'desc_est_req' => 'required'
			'asu_est_req' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$estadosrequisicion = Estadosrequisicion::create($post_data);	 		
		}
		$estadosrequisicions = Estadosrequisicion::all();
		//return view('estadosrequisicion.index')->with('estadosrequisicions', $estadosrequisicions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estadosrequisicion  $estadosrequisicion
     * @return \Illuminate\Http\Response
     */
    public function show(estadosrequisicion $estadosrequisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estadosrequisicion  $estadosrequisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(estadosrequisicion $estadosrequisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estadosrequisicion  $estadosrequisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estadosrequisicion $estadosrequisicion)
    {
        $post_data = $request->all();
		$rules = [
            'desc_est_req' => 'required'
			'asu_est_req' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $estadosrequisicions = Estadosrequisicion::find($post_data['id']);
            $estadosrequisicions->desc_est_req = $post_data['desc_est_req'];
			$estadosrequisicions->asu_est_req = $post_data['asu_est_req'];
			//return view('estadosrequisicion.show')->with('estadosrequisicions', $estadosrequisicions);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estadosrequisicion  $estadosrequisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(estadosrequisicion $estadosrequisicion)
    {
        //
    }
}
