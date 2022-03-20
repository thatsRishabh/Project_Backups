<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Forminfo;


class FormContoller extends Controller
{
    public function index(){

        return view('index');
    }

    public function register(Request $req){


        //    form validation querry
        $req->validate(
            [
                'name'=>'required',
                'mobile'=>'required|numeric|digits_between:10,10',
                'email'=>'required|email',
                'password'=>'required',
                'cpassword'=>'required|same:password'
            ]
        );
        // echo '<pre>';
        //    print_r($req->all());


        //insert data into DB querry 
        $info = new forminfo;
        $info->name =$req['name'];
        $info->mobile =$req['mobile'];
        $info->email =$req['email'];
        $info->address =$req['address'];
        $info->status =$req['status'];
        $info->gender =$req['gender'];
        $info->pincode =$req['pincode'];
        $info->cpassword =md5($req['cpassword']);
        $info-> save();

        return redirect('/');        

    }

    public function view(Request $req){

             //search querry
        // below is condition that it will have value from search or blank "" but not null
        $search=$req['search'] ?? "";
        if($search !=""){
            //where condition
            $info = Forminfo::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
            // % symbol in begining and at end means search will match both start and end letter of word. Orwhere is funtion to serch from name as well as from email
        }else{
            $info = Forminfo::all();
        }
        
        $data = compact('info', 'search');
        return view('view')->with($data);
    }

    public function trash(){

      $info = Forminfo::onlyTrashed()->get();
      $data = compact('info');
      return view('trashed')->with($data);
      }



    public function softdelete($id){

        $info = Forminfo::find($id);
        // below logic is to handle exception when somebody tries to crash our website by changing url
        if (!is_null($info)) {
            $info->delete();
        }
        return redirect('/view');
        // return view('/view'); we cannot use this here as it will give error

    }


        public function restore($id){

        $info = Forminfo::withTrashed()->find($id);
    
        if (!is_null($info)) {
            $info->restore();
        }
        return redirect('/trashed');
       }
    
       public function forceDelete($id){
    
        $info = Forminfo::withTrashed()->find($id);
    
        if (!is_null($info)) {
            $info->forceDelete();
        }
        return redirect('/trashed');
       }

       public function edit($id){

        $info= Forminfo::find($id);
        if (is_null($info)) {
            //when no user found
            return redirect('/view');
        } else{ 
            // post action url is being passed dynamically, it can also be passed directly
            $url = url('/view/update')."/".$id;
            $data = compact('info', 'url');
            // datas stored in variable $url & $info will be passed through variable $url 
            return view('update')->with($data);
            // In above we are redirecting to form page where our user will edit. As form is same and inorder to avoid action/post request error we will pass action url dynamically different for both URL. Also title we be different for both
        }

        }

        public function update($id, Request $req)
        {
            $info = Forminfo::find($id);

            $info->name =$req['name'];
            $info->mobile =$req['mobile'];
            $info->email =$req['email'];
            $info->address =$req['address'];
            $info->status =$req['status'];
            $info->gender =$req['gender'];
            $info->pincode =$req['pincode'];
            $info-> save();
            return redirect('/view');
        }

}

