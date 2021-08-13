<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',array('page_title'=>''));
});

Route::get('/contact', function () {
    return view('contact',array('page_title'=>'Contact Us'));
});

Route::get('/about', function () {
    return view('about',array('page_title'=>'About Developers'));
});


Route::group(['namespace'=>'account','prefix'=>'auth'], function (){
    Route::resource('login', "LoginController");
});


// admin route
Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){
    Route::resource('/', "LoginController");
    Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');

    Route::get('/role', "RoleController@role")->name('role');
    Route::get('/edit-role/{role}', "RoleController@edit_role")->name('edit_role');
    Route::get('/add-role', "RoleController@add_role")->name('add_role');
    Route::post('/create_new_role', "RoleController@create_new_role")->name('create_new_role');
    Route::post('/update_role', "RoleController@update_role")->name('update_role');

    Route::get('/add-student', "StudentController@add_student")->name('add_student');
    Route::get('/student', "StudentController@student")->name('student');

    Route::get('/add-staff', "StaffController@add_staff")->name('add_staff');
    Route::get('/staff', "StaffController@staff")->name('staff');
    Route::get('/view-staff/{user}', "StaffController@view_staff")->name('view_staff');
    Route::post('/create_new_staff', "StaffController@create_new_staff")->name('create_new_staff');

    // logout
    Route::get('/logout', "AdminController@logout")->name('logout');
});