<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        //dd($request->all());
        $username = $request->post('username');
        $password = $request->post('password');
        $user = User::where("username",$username)->first();
        //dd($user);
        if($user){  
            if($user->password == $password){
                $request->session()->put('userLoggedIn',true);
                $request->session()->put('loggedInUserName',$user->username);
                $request->session()->put('loggedinUserId',$user->id);
                $request->session()->put('loggedInUserFullName',$user->name);
                return redirect('/dashboard');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('/');
            }

        }else{
            $request->session()->flash('error','Please enter valid username');
            return redirect('/');
        }      
    }

    public function user_register(){
        return view('user.user_register');
    }

    public function insertUpdateUser(){

        
    }
}
