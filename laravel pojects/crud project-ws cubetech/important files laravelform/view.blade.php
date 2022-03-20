@extends('layout.containent')

@section('main-container')
 

<div class="container mx-auto" >
<h1>view infos</h1>


<form action="" class="col-8">
    <div class="form">
      <input type="search" name="search" class="form-control" placeholder="search by name of email" value="{{$search}}" />
    </div>
    {{-- in below type is not mentioned so it act as search button when clicked on search or pressed enter inside search box --}}
    <button class="btn btn-primary">Search</button>
    <a href="{{url('/view')}}"><button class="btn btn-primary" type="button">Reset</button></a>
    {{-- in above type is mentioned along with anchor tag(a href="") so it will act on url--}}
</form>


<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact number</th>
        <th scope="col">Address</th>
        <th scope="col">Pin Code</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    @php
        $i=1;
        @endphp
        @foreach ($info as $info) 
    <tbody>
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$info->name}}</td>
        <td>{{$info->email}}</td>
        <td>{{$info->mobile}}</td>
        <td>{{$info->address}}</td>
        <td>{{$info->pincode}}</td>
        <td>
            @if ($info->gender== "M")
                Male
            @elseif($info->gender== "F")
                Female
            @elseif($info->gender== "O") 
                Other
            @endif
        </td>
        <td>
            @if ($info->status== "1")
                Active
            @elseif($info->status== "0") 
                Inactive
            @endif
        </td>
        <td>{{$info->created_at}}</td>
        <td><a href="{{url('/view/softdelete')}}/{{$info->id}}"><button type="button" class="btn btn-primary">Move to trash</button></a></td>
        <td><a href="{{url('/view/edit')}}/{{$info->id}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
      </tr>
    </tbody>
    
        @php
        $i++;
    @endphp

    @endforeach 


  </table>

  @endsection