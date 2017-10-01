<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
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
	return View('configuracion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return View('configuracion.create');
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
				'tip_per' => 'required',
				'raz_soc' => 'required',
				'tip_doc' => 'required',
				'num_doc' => 'required',
				'tel_fij' => 'required',
				'tel_cel' => '' ,
				'dir_mail'=> '' ,
				'dir_per' => '' ,
				'brr_per' => '' ,
				'ciu_per' => '' ,
				'pai_per' => '' 
				];
			$validate = Validator::make($post_data, $rules);
			if (!$validate->failed()){
				$configuracion = Configuracion::create($post_data);			
			}
			$configuracions = Configuracion::all();
			return view('configuracion.index')->with('configuracions', $configuracions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracion = Configuracion::find($id);
        return view('configuracion.show')->with('configuracion', $configuracion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configuracion = Configuracion::find($id);
		return view('configuracion.edit')->with('configuracion', $configuracion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post_data = $request->all();
		$rules = [
            'tip_per' => 'required',
			'raz_soc' => 'required',
			'tip_doc' => 'required',
			'num_doc' => 'required',
			'tel_fij' => 'required',
			'tel_cel' => '' ,
			'dir_mail'=> '' ,
			'dir_per' => '' ,
			'brr_per' => '' ,
			'ciu_per' => '' ,
			'pai_per' => '' 
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $configuracion = Configuracion::find($post_data['id']);
            $configuracion->tip_per = $post_data['tip_per'];
            $configuracion->raz_soc = $post_data['raz_soc'];
			$configuracion->tip_doc = $post_data['tip_doc'];			
			$configuracion->num_doc = $post_data['num_doc'];
			$configuracion->tel_cel = $post_data['tel_fij'];
			$configuracion->tel_cel = $post_data['tel_cel'];
			$configuracion->dir_mail = $post_data['dir_mail'];
			$configuracion->dir_per = $post_data['dir_per'];			
			$configuracion->brr_per = $post_data['brr_per'];
			$configuracion->ciu_per = $post_data['ciu_per'];
			$configuracion->pai_per = $post_data['pai_per'];
			
			return view('configuracion.show')->with('configuracion', $configuracion);
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
}
