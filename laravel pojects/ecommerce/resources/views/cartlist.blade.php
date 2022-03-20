@extends('master')
@section("content")

@php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
@endphp
  
<div class="container" >

   @if ($total== "0")
   <h2>Go add something to your cart</h2>
   @else
   <h2>Your Cart</h2>
   <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
   @foreach ($products as $item)
       <div class="card mb-3" style="max-width: 986px;">
           <div class="row g-0">
             <div class="col-md-4">
              
  {{--       {{$product['gallery']}} is not used below because DB join function does not support data in array form we have to represent as object class <img src="{{$item->gallery}}" class="card-img-top" style="height: 191px;"> --}}
               <img src="{{$item->gallery}}" class="img-fluid rounded-start" alt="...">
             </div>
             <div class="col-md-8">
               <div class="card-body">
                 <h5 class="card-title">{{$item->name}}</h5>
                 <p class="card-text">{{$item->description}}.</p>
               </br></br></br>
                 <p class="card-text"><a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a></p>
               </div>
             </div>
           </div>
         </div>
   @endforeach
   <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>  
   @endif
</div>
@endsection