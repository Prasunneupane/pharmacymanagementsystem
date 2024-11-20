<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Storage;

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
        $userRole = $this->getAllUserRole();
        // dd($userRole);
        return view('user.user_register',compact('userRole'));
    }

    public function insertUpdateUser(Request $request){
            // dd($request->all());
            if($request->hasfile('image')){

                if($request->post('id')>0){
                    $arrImage=DB::table('tbl_users')->where(['id'=>$request->post('id')])->get();
                    if(Storage::exists('/public/media/about/'.$arrImage[0]->image)){
                        Storage::delete('/public/media/about/'.$arrImage[0]->image);
                    }
                $image=$request->file('image');
                $ext=$image->extension();
                $image_name=time().'.'.$ext;
                $image->storeAs('/public/media/user',$image_name);

                }else{
                $image=$request->file('image');
                $ext=$image->extension();
                $image_name=time().'.'.$ext;
                $image->storeAs('/public/media/user',$image_name);
                }
                
                // $model->image=$image_name;
            }
            $data = array(
                'id'=>(int)$request->id,
                'name'=>$request->name,
                'username'=>$request->username,
                'password'=>$request->password,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'is_active'=>$request->{'inline-radios'} =="true"?1:0,
                'user_type'=>(int)$request->user_type,
                'image'=>$image_name,
            );
            // dd($data);

            $message = DB::statement('CALL InsertOrUpdateUser(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)', [
                $data['id'],              // p_id
                $data['name'],            // p_name
                $data['username'],        // p_username
                $data['email'],           // p_email
                $data['password'],        // p_password
                now(),                    // p_email_verified_at (example value, adjust as needed)
                "ss",                     // p_remember_token (adjust as needed)
                $data['user_type'],       // p_user_type
                $data['phone'],           // p_phone
                $data['is_active'],       // p_is_active
                $data['image'],           // image
            ]);
            dd($message);
        
    }

    public function getAllUserRole(){
        $roles = DB::select('CALL GetAllUserRoles()');
        return $roles;
    }
}
