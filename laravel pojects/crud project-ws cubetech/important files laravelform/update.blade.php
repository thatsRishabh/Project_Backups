@extends('layout.containent')

@section('main-container')
 

<div class="container mx-auto" style="width: 50%">
<h1>Update the info!</h1>

            <form class="row g-3" action="{{$url}}" method="post">
                {{-- action="{{url('/view/update')}}/{{$info->id}}" --}}
                {{-- in above action url is passed dynamically, we can also pass it directly --}}
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="name" class="form-control" id="inputEmail4" name="name" value=" {{$info->name}}">
                    <span class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" value=" {{$info->email}}">
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
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Confrim Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="cpassword">
                    <span class="text-danger">
                        @error('cpassword')
                            {{'Both passwords do not match or field is empty'}}
                        @enderror
                    </span>
                </div>
                <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value=" {{$info->address}}"/>
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
                </div>
                <div class="col-md-6">
                <label for="inputCity" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="inputCity" name="mobile" value=" {{$info->mobile}}">
                <span class="text-danger">
                    @error('mobile')
                    {{'Number is not 10 digits or field is empty'}}
                    @enderror
                </span>
                </div>
                <div class="col-md-4" >
                <label for="inputState" class="form-label">Status</label>
                {{--for drop down type buttons we have to mention name in select element only --}}
                <select id="inputState" class="form-select" name="status">
                    <option value="1" selected>Active</option>
                    <option value="0">Unactive</option>
                </select>
                <span class="text-danger">
                    @error('status')
                        {{$message}}
                    @enderror
                </span>
                </div>
                <div class="col-md-2">
                <label for="inputZip" class="form-label">Pin Code</label>
                <input type="text" class="form-control" id="inputZip" name="pincode" value=" {{$info->pincode}}">
                <span class="text-danger">
                    @error('pincode')
                        {{$message}}
                    @enderror
                </span>
                </div>
            
                <div class="col-12" name="gender">
                    <label for="inputZip" class="form-label">Gender</label></br>
                    <div class="form-check form-check-inline">
                        {{--for radio type buttons we have to mention name in of the option, seperately  --}}
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O">
                        <label class="form-check-label" for="inlineRadio3">Other</label>
                    </div>
                    <span class="text-danger">
                        @error('gender')
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



  