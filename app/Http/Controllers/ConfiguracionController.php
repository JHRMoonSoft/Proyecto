<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Configuracion;

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
		$count = Configuracion::all()->count();
		if($count < 1){
			return redirect()->intended('configuracion/create');
		}
		else{
			$configuracion = Configuracion::find($count);	
			return view('configuracion.show')->with('configuracion', $configuracion);
			
			
		}
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$count = Configuracion::all()->count();
		if($count < 1){
			return redirect()->intended('configuracion/create');
		}
		else{
			$configuracion = Configuracion::find($count);	
			//return view('configuracion.show')->with('configuracion', $configuracion);
				return redirect()->intended('configuracion/'.$configuracion->id);
			
		}
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
				'tip_empr'=> 'required',
				'raz_soc'=> 'required',
				'tip_doc'=> 'required',
				'num_doc'=> 'required',
				'tel_fij'=> 'required',
				'tel_cel'=> '' ,
				'dir_mail'=> '' ,
				'dir_empr'=> '' ,
				'brr_empr'=> '' ,
				'ciu_empr'=> '' ,
				'pai_empr'=> '' 
				];
			$validate = Validator::make($post_data, $rules);
			if (!$validate->failed()){
				if(Configuracion::all()->count() < 1){
					$configuracion = Configuracion::create($post_data);			
				}
				else{
					$mensajeerror = "Existe una empresa regitrada en sistema";
					return redirect()->back()->with(compact('mensajeerror'));
				}
					
					
			}
			
			return view('configuracion.show')->with('configuracion', $configuracion);
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
           'tip_empr'=> 'required',
			'raz_soc'=> 'required',
			'tip_doc'=> 'required',
			'num_doc'=> 'required',
			'tel_fij'=> 'required',
			'tel_cel'=> '' ,
			'dir_mail'=> '' ,
			'dir_empr'=> '' ,
			'brr_empr'=> '' ,
			'ciu_empr'=> '' ,
			'pai_empr'=> '' 
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $configuracion = Configuracion::find($post_data['id']);
            $configuracion->tip_empr = $post_data['tip_empr'];
            $configuracion->raz_soc = $post_data['raz_soc'];
			$configuracion->tip_doc = $post_data['tip_doc'];			
			$configuracion->num_doc = $post_data['num_doc'];
			$configuracion->tel_fij = $post_data['tel_fij'];
			$configuracion->tel_cel = $post_data['tel_cel'];
			$configuracion->dir_mail = $post_data['dir_mail'];
			$configuracion->dir_empr = $post_data['dir_empr'];			
			$configuracion->brr_empr = $post_data['brr_empr'];
			$configuracion->ciu_empr = $post_data['ciu_empr'];
			$configuracion->pai_empr = $post_data['pai_empr'];
			
			$configuracion->save();
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
