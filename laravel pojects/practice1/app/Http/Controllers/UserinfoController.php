<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserinfoController extends Controller
{
    function login()
    {
        // return "hello";

        return view('login');
    }

    function loginAuth(Request $req)
    {
        $user= Userinfo::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->cpassword))
        // return $user;
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function signup()
    {
        // return "hello";

        return view('signup');
    } 

    function  register(Request $req)
    {
        // echo '<pre>';
        //  print_r($req->all());


        $req->validate(
            [
                'name'=>'required',
                'mobile'=>'required|numeric|digits_between:10,10',
                'email'=>'required|email',
                'password'=>'required',
                'cpassword'=>'required|same:password'
            ]
        );


        //insert data into DB querry 
        $info = new Userinfo;
        $info->name =$req['name'];
        $info->mobile =$req['mobile'];
        $info->email =$req['email'];
        // $info->cpassword =md5($req['cpassword']);
        $info->cpassword=Hash::make($req->cpassword);
        $info-> save();

        return redirect('/login');
    }

     function logout() 
     {

        // return Session::get('user')['id'];
        Session::forget('user');
        return redirect('login');
    }
}
