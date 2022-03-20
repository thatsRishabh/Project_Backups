<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Enter info!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/register')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/register/view1')}}">View Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/register/trash')}}">View Trashed</a>
              {{-- <a class="nav-link active" aria-current="page" href="{{route('register.view1')}}">View Data</a> --}}
            </li>
        </div>
      </div>
    </nav>




    <div class="container mx-auto" style="width: 50%">
        {{-- <pre>
            {{print_r($customers)}}
        </pre> --}}

        
            <form action="" class="col-8">
              <div class="form">
                <input type="search" name="search" class="form-control" placeholder="search by name of email" value="{{$search}}" />
              </div>
              {{-- in below type is not mentioned so it act as search button when clicked on search or pressed enter inside search box --}}
              <button class="btn btn-primary">Search</button>
              <a href="{{url('/register/view1')}}"><button class="btn btn-primary" type="button">Reset</button></a>
              {{-- in above type is mentioned along with anchor tag(a href="") so it will act on url--}}
        </form>

        @php
        $i=1;
        @endphp
        @foreach ($customers as $customers)      
        <div class="card" style="width: 18rem;">
            <div class="card-header">
              Contact {{$i}}
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Name: {{$customers->name}}</li>
              <li class="list-group-item">Contact number: {{$customers->number}}</li>
              <li class="list-group-item">Email: {{$customers->email}}</li>
              <li class="list-group-item">created at: {{$customers->created_at}}</li>
            </ul>
          </div>
         <a href="{{url('/register/delete')}}/{{$customers->customer_id}}"><button type="button" class="btn btn-primary">Move to trash</button></a>
         <a href="{{route('register.edit', ['id' =>$customers->customer_id])}}"><button type="button" class="btn btn-primary">Edit</button></a>
          @php
              $i++;
          @endphp

          @endforeach 
        </div>
       
</body>
</html>