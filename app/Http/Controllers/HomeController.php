<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use \Carbon\Carbon;
use App\Requisicion;
use App\EstadosRequisicion;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$id_est_rqs = EstadosRequisicion::whereNotIn('tip_est_req',array(3,4))->get(['id']);
		$requisiciones = Requisicion::whereIn('est_rqs',$id_est_rqs)->whereIn('rol_rqs',array(2))->get();
		$now = Carbon::now();
         return view('home')->with(compact('requisiciones','now'));
        
    }
	

}
