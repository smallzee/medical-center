<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_student(){
        $data['page_title'] = "Add Student";
        return view('users.add-student',$data);
    }

    public function create_new_student(Request $request){
        $validator = Validator::make($request->all(),[
            'matric_number'=>'required|unique:students|max:150|min:8',
            'full_name'=>'required',
            'email_address'=>'required',
            'phone_number'=>'required',
            'gender'=>'required',
            'department'=>'required',
            'level'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        Students::create([
            'matric_number'=>$request->matric_number,
            'full_name'=>$request->full_name,
            'email_address'=>$request->email_address,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'department_id'=>$request->department,
            'level'=>$request->level
        ]);

        return back()->with('flash_info','Student has been added successfully');
    }

    public function student(){
        $data['page_title'] = "All Students";
        return view('users.students',$data);
    }

    public function view_student(Students $students){

    }
}
