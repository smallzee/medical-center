<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_staff(){
        $data['page_title'] = "Add New Staff";
        return view('admin.add-staff',$data);
    }

    public function staff(){
        $data['page_title'] = "All Staff";
        return view('admin.staff',$data);
    }

    public function create_new_staff(Request $request){
        $validator = Validator::make($request->all(),[
            'email_address'=>'required|unique:users|min:8|max:200',
            'full_name'=>'required|min:3|max:100',
            'phone_number'=>'required',
            'gender'=>'required',
            'role'=>'required',
            'password'=>'required'
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $user = new User();
        $user->email_address = $request->email_address;
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->role_id = $request->role;
        $user->password = Hash::make($request->password);

        if ($user->save()){
            return back()->with('flash_success','New staff has been created successfully')->withInput();
        }

    }

    public function view_staff(User $user){
        $data['page_title'] = "Staff Profile";
        $data['user'] = $user;
        return view('admin.view-staff',$data);
    }
}
