@extends('master')
@section("content")
<div class="container" >
  <div class="row">

    {{-- here we will take class="col-sm-6" so that we can have 2 items in one page, side by side  --}}

    <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}" style="height: 400px; width: 90%;">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
        <h2>{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4>category: {{$product['category']}}</h4>
        <h5>Details: {{$product['description']}}</h5>
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
        <br><br>
     </div>
</div>
</div>
@endsection