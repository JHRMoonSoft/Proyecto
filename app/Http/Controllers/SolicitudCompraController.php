<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudCompraController extends Controller
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
         return View('solicitudcompra.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('solicitudcompra.create');
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
            'asn_scp' => 'required'
			'obv_scp' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$solicitudcompra = SolicitudCompra::create($post_data);	 		
		}
		$solicitudcompras = SolicitudCompra::all();
		return view('solicitudcompra.index')->with('solicitudcompras', $solicitudcompras);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudcompra= SolicitudCompra::find($solicitudcompra);
		return view('solicitudcompra.show')->with('solicitudcompra', $solicitudcompra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudcompra = SolicitudCompra::find($solicitudcompra);
		return view('solicitudcompra.edit')->with('solicitudcompra', $solicitudcompra);
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
            'asn_scp' => 'required'
			'obv_scp' => 'required'
			];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $solicitudcompra = SolicitudCompra::find($post_data['id']);
            $solicitudcompra->asn_scp = $post_data['asn_scp'];
			$solicitudcompra->obv_scp = $post_data['obv_scp'];
			return view('solicitudcompra.show')->with('solicitudcompra', $solicitudcompra);
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
