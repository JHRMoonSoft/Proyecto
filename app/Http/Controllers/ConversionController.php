<?php

namespace App\Http\Controllers;

use App\Conversion;
use Illuminate\Http\Request;

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
      return View('conversion.index');
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
		$conversions = Conversion::all();
		return view('conversion.index')->with('conversions', $conversions);
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
     * @param  \App\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversion $conversion)
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
            $conversions = Conversion::find($post_data['id']);
            $conversions->producto_id = $post_data['producto_id'];
			$conversions->cnt_ini_prd = $post_data['cnt_ini_prd'];
			$conversions->unidad_inicial_id = $post_data['unidad_inicial_id'];
			$conversions->cnt_fin_prd = $post_data['cnt_fin_prd'];
			$conversions->unidad_final_id = $post_data['unidad_final_id'];
			
			return view('conversion.show')->with('conversions', $conversions);
        }
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
