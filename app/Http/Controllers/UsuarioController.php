<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\TiposArea;
use App\Area;
use App\Cargo;
use Illuminate\Http\Request;
use Validator;

class UsuarioController extends Controller
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
       $users = User::all();
        return view('usuario.index')->with(compact('users','areas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$users = User::find($id);
		$roles= $users->roles;
		$tipoareas= TiposArea::all();
		$areas = Area::all();
		$cargos = Cargo::all ();
        return view('usuario.show')->with(compact('users','tipoareas','areas','cargos','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {	$users= User::find($id);
        $roles= $users->roles->toArray();
		$rolesGeneral = Role::all();
		$areas = Area::all();
		$cargos = Cargo::all ();
        return view('usuario.edit')->with(compact('users','roles','areas','cargos','rolesGeneral'));
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
        //
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
