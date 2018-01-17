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
        $post_data = $request->all();
		$rules = [
            
			'tip_doc'=> 'required', 
			'num_doc'=> 'required', 
			'nom_usr'=> 'required', 
			'ape_usr'=> 'required', 
			'usuario'=> 'required', 
			'crg_usr'=> 'required', 
			'dep_usr'=> 'required', 
			'tip_dep'=> 'required', 
			'crd_usr'=> 'required',  
			'tel_fij'=> 'required', 
			'tel_cel'=> '', 
			'dir_mail'=> 'required', 
			'sta_usr'=> 'required'
			];
        $validate = Validator::make($post_data, $rules);
		
        if (!$validate->failed()) {			
            $users = User::find($post_data['id']);
			$post_data['tip_dep'] = Area::find($post_data['dep_usr'])->tipoarea->id;
			$users->tip_doc = $post_data['tip_doc'];	 
			$users->num_doc = $post_data['num_doc'];	 
			$users->nom_usr = $post_data['nom_usr'];	 
			$users->ape_usr = $post_data['ape_usr'];	 
			$users->usuario = $post_data['usuario'];	
			$users->crg_usr = $post_data['crg_usr'];	 
			$users->dep_usr = $post_data['dep_usr'];	 
			$users->tip_dep=  $post_data['tip_dep'];
			$users->crd_usr = $post_data['crd_usr'];	  
			$users->tel_fij = $post_data['tel_fij'];	 
			$users->tel_cel = $post_data['tel_cel'];	 
			$users->dir_mail= $post_data['dir_mail'];	 
			$users->sta_usr = array_key_exists('sta_usr',$post_data);	
		
			$users->roles()->sync($post_data['roles']);
			$users->save();
			return redirect()->intended('/users'.$users->$id);
			
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
