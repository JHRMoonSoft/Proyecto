<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Permission;
use App\Role;

class RoleController extends Controller
{
    //
	
	public function __construct(){
		
		$this->middleware('auth');
		
	}
	
	
	public function index() {
        $roles = Role::all();
        return view('role.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
		$permissionsGeneral = Permission::all();        
		return view('role.create', compact('role', 'permissionsGeneral'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $post_data = $request->all();
		$rules = [
            'name' => 'required',
            'description' => 'required',
            'display_name' => 'required'
        ];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()){
			$role = Role::create($post_data);
			$roles = Roles::all();
			return view('role.index')->with('roles', $roles);
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $role = Role::find($id);
        $permissions = $role->perms;
        return view('role.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the customer
        $role = Role::find($id);
        // show the edit form and pass the customer
		
		$permissions = $role->perms->toArray(); 
		$permissionsGeneral = Permission::all();
        return view('role.edit', compact('role', 'permissions', 'permissionsGeneral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $post_data = $request->all();
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'display_name' => 'required'
        ];
        $validate = Validator::make($post_data, $rules);
        if (!$validate->failed()) {
            $role = Role::find($post_data['id']);
            $role->name = $post_data['name'];
            $role->description = $post_data['description'];
			$role->name = $post_data['display_name'];
			$role->save();
			$role->attachPermissions($post_data['permissions']);
            //$role->perms()->sync($post_data['permissions'], false);
            //$role->save();
            $permissions = $role->perms;
			return view('role.show', compact('role', 'permissions'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
