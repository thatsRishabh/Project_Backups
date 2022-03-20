<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;   //include here model

class RegistrationController extends Controller
{
   public function index()
   {
        $customer=new Customer();
        $url = url('/register');
        $title = "Enter the datas";
        $data = compact('url','title','customer');
        // above is dynamic url for action/post when user is providing fresh entry. 'new Customer' is dummy data else if will show error while using value="{{$customer->name}}" in form page
       return view('form')->with($data);
   }

   public function register(Request $req)
   {
    //    form validation querry
        $req->validate(
            [
                'name'=>'required',
                'number'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'cpassword'=>'required|same:password'
            ]
        );

    //    echo '<pre>';
    //    print_r($req->all());
        
                //insert data into DB querry 
                $customer = new customer;
                $customer->name =$req['name'];
                $customer->number =$req['number'];
                $customer->email =$req['email'];
                $customer->cpassword =md5($req['cpassword']);
                $customer-> save();

                return redirect('/register/view1');
   }

   public function view1(Request $req)
   {
        //search querry
        // below is condition that it will have value from search or blank "" but not null
        $search=$req['search'] ?? "";
        if($search !=""){
            //where condition
            $customers= Customer::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
            // % symbol in begining and at end means search will match both start and end letter of word. Orwhere is funtion to serch from name as well as from email
        }else{
            $customers = Customer::all();
        }
        
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
   }

   public function trash(){

      $customers = Customer::onlyTrashed()->get();
      $data = compact('customers');
      return view('view-trash')->with($data);

   }

   public function delete($id)
   {
        //    echo $id;
        //    die;
        // above code to check if data has been passed on until here or not
        
        $customers = Customer::find($id);
        // below logic is to handle exception when somebody tries to crash our website by changing url
        if (!is_null($customers)) {
            $customers->delete();
        }
        return redirect('/register/view1');
        // return view('customer-view'); we cannot use this here as it will give error
   }

   public function restore($id){

    $customers = Customer::withTrashed()->find($id);

    if (!is_null($customers)) {
        $customers->restore();
    }
    return redirect('/register/trash');
   }

   public function forceDelete($id){

    $customers = Customer::withTrashed()->find($id);

    if (!is_null($customers)) {
        $customers->forceDelete();
    }
    return redirect('/register/trash');
   }

   public function edit($id)
   {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            //when no user found
            return redirect('/register/view1');
        } else{ 
            $title = "Update existing datas";
            $url = url('/register/update/')."/".$id;
            $data = compact('customer', 'url','title');
            // datas stored in variable $url & $customer will be passed through variable $url 
            return view('form')->with($data);
            // In above we are redirecting to form page where our user will edit. As form is same and inorder to avoid action/post request error we will pass action url dynamically different for both URL. Also title we be different for both
        }

   }

   public function update($id, Request $req)
   {
    $customer = Customer::find($id);

    $customer->name =$req['name'];
    $customer->number =$req['number'];
    $customer->email =$req['email'];
    $customer-> save();
    return redirect('/register/view1');
   }
}
