<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use \Carbon\Carbon;
use App\Requisicion;
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
		$requisiciones = Requisicion::where('est_rqs',2)->whereIn('rol_rqs',array(2))->get();
		$now = Carbon::now();
         return view('home')->with(compact('requisiciones','now'));
        
    }
	

}
