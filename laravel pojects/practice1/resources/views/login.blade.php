@extends('layout.master')

@section('content')

<div class="container" style="width: 50%  margin:0 auto; width:853px; padding:14px; background:#f9f9f9; border:3px solid #333;">
    <h1>Fill the Required info!</h1>
    
                <form class=" g-3" action="{{url('/login')}}" method="post">
                    @csrf
                    <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                    </div>
                    <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                    <span class="text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                    </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>  
                </form>
                </div>


@endsection