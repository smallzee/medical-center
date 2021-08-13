<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function role(){
        $data['page_title'] = "Role";
        return view('admin.role',$data);
    }

    public function add_role(){
        $data['page_title'] = "Add Role";
        return view('admin.add-role',$data);
    }

    public function create_new_role(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:role|max:50|min:3'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $role = new Roles([
            'name'=>$request->name,
        ]);

        if ($role->save()){
            return back()->with('flash_info','Staff role has been added successfully');
        }
    }

    public function edit_role(Roles $role){
        $data['page_title'] = "Edit Role";
        $data['role'] = $role;
        return view('admin.edit-role',$data);
    }

    public function update_role(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50|min:3'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $role = Roles::findOrFail($request->id);
        $role->name = $request->name;

        if ($role->save()){
            return back()->with('flash_info','Staff role has been update successfully');
        }
    }
}
