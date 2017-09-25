<?php

namespace App\Http\Controllers;

use App\ReciboRQS;
use Illuminate\Http\Request;

class ReciboRQSController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('reciboRQS.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function show(ReciboRQS $reciboRQS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function edit(ReciboRQS $reciboRQS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReciboRQS $reciboRQS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReciboRQS  $reciboRQS
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReciboRQS $reciboRQS)
    {
        //
    }
}
