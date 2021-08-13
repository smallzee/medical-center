<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";
        return view('users.dashboard',$data);
    }

    public function password(){
        $data['page_title'] = "Change Password";
        return view('users.password',$data);
    }

    public function update_password(Request $request){
        $validator = Validator::make($request->all(),[
            'password'=>'required',
            'npassword'=>'required'
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        if (auth()->user()->password != Hash::make($request->password)){
            return back()->with('flash_error','Invalid old password entered');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->password = $request->npassword;

        if ($user->save()){
            return back()->with('flash_info','Password has been changed successful');
        }
    }

    public function logout(){
        Auth::guard()->logout();
        return redirect('/auth/login')->with('flash_info','You have logged out successfully');
    }
}
