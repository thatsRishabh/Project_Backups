@extends('master')
@section("content")
<div class="container" >
  
    <h2>My Order</h2>
    @foreach ($orders as $item)
        <div class="card mb-3" style="max-width: 986px;">
            <div class="row g-0">
              <div class="col-md-4">

                {{-- <div class="card" style="width: 18rem;">
        {{$product['gallery']}} is not used below because DB join function does not support data in array form we have to represent as object class
        <img src="{{$item->gallery}}" class="card-img-top" style="height: 191px;"> --}}
                <img src="{{$item->gallery}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <p class="card-text">Delivery Status : {{$item->status}}</p>
                <p class="card-text">Payment Status : {{$item->payment_status}}</p>
                <p class="card-text">Payment Method : {{$item->payment_method}}</p>
                <p class="card-text">Address : {{$item->address}}</p>
                </div>
              </div>
            </div>
          </div>
    @endforeach
</div>
@endsection