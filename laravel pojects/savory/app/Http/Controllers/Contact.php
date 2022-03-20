<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactinfo;

class Contact extends Controller
{
    function contactData(Request $req)
    {
        // echo '<pre>';
        //     print_r($req->all());


        $req->validate(
            [
                'subject'=>'required',
                'message'=>'required',
                'email'=>'required|email',
                
            ]
        );
        // echo '<pre>';
        //    print_r($req->all());


        //insert data into DB querry 
        $info = new Contactinfo;
        $info->subject =$req['subject'];
        $info->message =$req['message'];
        $info->email =$req['email'];
        $info-> save();

        return redirect('/');        
    }
}
