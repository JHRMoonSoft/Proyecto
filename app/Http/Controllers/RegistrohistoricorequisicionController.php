<?php

namespace App\Http\Controllers;

use App\registrohistoricorequisicion;
use Illuminate\Http\Request;

class RegistrohistoricorequisicionController extends Controller
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
            'obs_reg_rqs')=> 'required',
			'rqs_id'=> 'required',
			'acc_rqs_id'=> 'required',
			'user_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$registrohistoricorequisicion = Registrohistoricorequisicion::create($post_data);	 		
		}
		$registrohistoricorequisicions = Registrohistoricorequisicion::all();
		//return view('registrohistoricorequisicion.index')->with('registrohistoricorequisicions', $registrohistoricorequisicions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registrohistoricorequisicion  $registrohistoricorequisicion
     * @return \Illuminate\Http\Response
     */
    public function show(registrohistoricorequisicion $registrohistoricorequisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registrohistoricorequisicion  $registrohistoricorequisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(registrohistoricorequisicion $registrohistoricorequisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registrohistoricorequisicion  $registrohistoricorequisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registrohistoricorequisicion $registrohistoricorequisicion)
    {
        $post_data = $request->all();
		$rules = [
            'obs_reg_rqs')=> 'required',
			'rqs_id'=> 'required',
			'acc_rqs_id'=> 'required',
			'user_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $registrohistoricorequisicions = Registrohistoricorequisicion::find($post_data['id']);
            $registrohistoricorequisicions->obs_reg_rqs = $post_data['obs_reg_rqs'];
			$registrohistoricorequisicions->rqs_id = $post_data['rqs_id'];
			$registrohistoricorequisicions->acc_rqs_id = $post_data['acc_rqs_id'];
			$registrohistoricorequisicions->user_id = $post_data['user_id'];
			//return view('registrohistoricorequisicion.show')->with('registrohistoricorequisicions', $registrohistoricorequisicions);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registrohistoricorequisicion  $registrohistoricorequisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(registrohistoricorequisicion $registrohistoricorequisicion)
    {
        //
    }
}
