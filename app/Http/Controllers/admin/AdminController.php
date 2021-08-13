<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";
        return view('admin.dashboard',$data);
    }

    public function logout(){
        Auth::guard()->logout();
        return redirect('/admin')->with('flash_info','You have logged out successfully');
    }
}
