<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){

        if($request->session()->has('userLoggedIn')){
            return redirect('/dashboard');
        }else{
            return view("welcome");
        }
        // return view('admin.login');
        //return view("welcome");
    }
}
