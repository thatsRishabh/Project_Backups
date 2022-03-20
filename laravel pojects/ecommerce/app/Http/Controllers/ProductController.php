<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Support\Facades\Session;  //the error on line 59 of this page was resolved by importing this
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;    // we have to import this inorder to use in cartList function


class ProductController extends Controller
{
    function index()
    {
        // return Product::all();
        // above code is for debugging purpose, to know if data is reaching via model until here or not
 
        $data= Product::all();
       return view('product',['products'=>$data]);
        //in above we are passing data in form of array

    //    $data = compact('products');
    //    return view('product')->with($data);
    // we can also pass data as a object but code length will increase
    }

    function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        // return $req->input();
        // above is for debugging when data is passed via url/get request
         $data= Product:: where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }

    // below function is static because it returning the  value when cartItem function is called on header page
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        // echo "hello";
        // above is for debugging purpose, to know if routes & links are working properly

        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')   //here we are joining product table with cart table with help of product_id as both the variable are common
         ->select('products.*','cart.id as cart_id')        //selecting all the information of product table
        ->where('cart.user_id',$userId)   //from all information of product table we are filtering on basis of current user id
         ->get();

        // same above code can be written in one line as
        // $products= DB::table('cart')->join('products','cart.product_id','=','products.id')->select('products.*','cart.id as cart_id')->where('cart.user_id',$userId)->get();

        //  return  $products;  // this is for dubuggin purpose
         return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        // return  DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
        // above is for debugging purpose
 

        $total= $products= DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
         return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();

        //  we want to dispatch all order individually so using for each loop
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }

}
