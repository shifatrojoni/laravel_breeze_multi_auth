<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher.login');
}
public function login(Request $request){
    // dd($request->all());
    if(Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password])){
        return redirect()->route('teacher.dashboard');
    }else{
        return redirect()->route('teacher_login_form');
    }
    
}
public function dashboard(){
    return view('teacher.dashboard');
}
}
