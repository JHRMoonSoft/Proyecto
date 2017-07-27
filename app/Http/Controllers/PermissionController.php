<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Validator;

class PermissionController extends Controller
{
    //
	
	public function __construct(){
		
		$this->middleware('auth');
		
	}
	
	
	public function index() {

        $permissions = Permission::all();
        return view('permission.index')->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
		return view('permission.create');
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
			$permission = Permission::create($post_data);
			$permissions = Permission::all();
			return view('permission.index')->with('permissions', $permissions);
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $permission = Permission::find($id);
        return view('permission.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the customer
        $permission = Permission::find($id);
        // show the edit form and pass the customer
		return view('permission.edit')->with('permission', $permission);
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
            $permission = Permission::find($post_data['id']);
            $permission->name = $post_data['name'];
            $permission->description = $post_data['description'];
			$permission->display_name = $post_data['display_name'];
			return view('permission.show')->with('permission', $permission);
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
