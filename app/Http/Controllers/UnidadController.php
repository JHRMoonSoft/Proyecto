<?php

namespace App\Http\Controllers;

use App\Unidad;
use Illuminate\Http\Request;
use Validator;

class UnidadController extends Controller
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
        //
		$unidads = Unidad::all();
        return View('unidad.index')->with('unidads', $unidads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return View('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $post_data = $request->all();
		$rules = [
            'des_und' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$unidad = Unidad::create($post_data);			
		}
		return redirect()->intended('/unidad');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidad)
    {
       $unidad = Unidad::find($id);
        return view('unidad.show')->with('unidad', $unidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidad $unidad)
    {
        $unidads = Unidad::find($id);
		return view('unidad.edit')->with(' unidads',  $unidads);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $post_data = $request->all();
		$rules = [
            'des_und' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $unidad = Unidad::find($id);
            $unidad->des_und = $post_data['edit_des_und'];
			$unidad->save();
			return redirect()->intended('/unidad');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidad)
    {
        //
    }
}
