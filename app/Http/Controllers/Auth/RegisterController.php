<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'num_doc'=> 'required|string|max:255|unique:users',
			'nom_usr'=> 'required|string|max:255',
			'ape_usr'=> 'required|string|max:255',
			'usuario'=> 'required|string|max:255|unique:users',
			'crg_usr'=> 'required|string|max:255',
			'dep_usr'=> 'required|string|max:255',
			'dir_mail'=> 'required|string|email|max:255',
			'password'=> 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		$user = User::create([
			'tip_doc'=> $data['tip_doc'], 
			'num_doc'=> $data['num_doc'], 
			'nom_usr'=> $data['nom_usr'], 
			'ape_usr'=> $data['ape_usr'], 
			'usuario'=> $data['usuario'], 
			'crg_usr'=> $data['crg_usr'], 
			'tip_dep'=> $data['tip_dep'], 
			'dep_usr'=> $data['dep_usr'], 
			'crd_usr'=> $data['crd_usr'],  
			'tel_fij'=> $data['tel_fij'], 
			'tel_cel'=> $data['tel_cel'], 
			'dir_mail'=> $data['dir_mail'], 
			'sta_usr'=> array_key_exists('sta_usr', $data),
			'password'=> bcrypt($data['password'])
        ]);
		$user->roles()->sync($data['roles']);
		$user->save();
    }
	
	public function register(Request $request)
    {
		
        $this->validator($request->all())->validate();
		event(new Registered($user = $this->create($request->all())));
        return $this->registered($request, $user)
            ?: redirect('/users');
						
		
    }
	
	public function showRegistrationForm()
	{
		$rolesGeneral = Role::all();
		$cargos = Cargo::all ();
		return view('auth.register')->with(compact('rolesGeneral','cargos'));
	}
    
	
}
