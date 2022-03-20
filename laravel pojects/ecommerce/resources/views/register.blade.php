@extends('master')
@section("content")
{{-- this below style setting will keep entire login form inside the box --}}
    <div class="container" style="width: 50%  margin:0 auto; width:853px; padding:14px; background:#f9f9f9; border:3px solid #333;">
        <form action="{{url('/register')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter your name</label>
                <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
              <span class="text-danger">
                @error('cpassword')
                        {{$message}}
                 @enderror
            </span>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
    </div>
    @endsection