<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_student(){
        $data['page_title'] = "Add Student";
        return view('admin.add-student',$data);
    }
}
