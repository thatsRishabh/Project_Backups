@extends('master')
@section("content")
<div class="container" >
  <div class="row">
    {{-- <div class="row"> is must to keep all its inner containent in horizontal row --}}
    @foreach ($products as $item)
    {{-- class="col-md-4" is for 3 cards in one row. class="col-md-6" is for 2 cards in one row--}}
    <div class="col-md-4">
      
    <div class="card" style="width: 18rem;">
        <img src="{{$item['gallery']}}" class="card-img-top" style="height: 191px;">
        <div class="card-body">
          {{-- putting here achortag on link, so that our user can view it after clicking on its name --}}
          <a href="/detail/{{$item['id']}}">
          {{-- <h5 class="card-title">{{$item['name']}}</h5> --}}
          <h5 class="card-title">{{$item->name}}</h5>
        </a>
          <p class="card-text">{{$item['description']}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">$ {{$item['price']}}</li>
        </ul>
        <div class="card-body">
          <a href="/detail/{{$item['id']}}" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection