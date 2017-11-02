<?php

namespace App\Http\Controllers;

use App\Conversion;
use App\Producto;
use App\Unidad;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
class ConversionController extends Controller
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
		$unidadesAlmacen = DB::select(DB::raw("SELECT DISTINCT a.* FROM unidads a, productos b WHERE a.id = b.unidad_id"));
		$unidades = Unidad::all();
		$conversiones = Conversion::all();
		return View('conversion.index')->with(compact('conversiones','unidadesAlmacen', 'unidades'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return View('conversion.create');
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
            'producto_id'=> 'required',
			'cnt_ini_prd'=> 'required',
			'unidad_inicial_id'=> 'required',
			'cnt_fin_prd'=> 'required',
			'unidad_final_id'=> 'required'
			
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$conversion = Conversion::create($post_data);
		}
		return redirect()->intended('/conversion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function show(Conversion $conversion)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversion $conversion)
    {
        $conversions = Conversion::find($conversion);
		return view('conversion.edit')->with('conversions', $conversions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
          $post_data = $request->all();
		$rules = [
            'producto_id'=> 'required',
			'cnt_ini_prd'=> 'required',
			'unidad_inicial_id'=> 'required',
			'cnt_fin_prd'=> 'required',
			'unidad_final_id'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $conversions = Conversion::find($id);
            $conversions->unidad_inicial_id = $post_data['edit_und_ini_id'];
			$conversions->cnt_fin_prd = $post_data['edit_cnt_fin_prd'];
			$conversions->unidad_final_id = $post_data['edit_unidad_final_id'];
			$conversions->save();
        }
		return redirect()->intended('/conversion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversion $conversion)
    {
        //
    }
}
