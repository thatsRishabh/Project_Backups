<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trashed page!</title>
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


    <div class="container mx-auto" style="width: 50%"">
        {{-- <pre>
            {{print_r($customers)}}
        </pre> --}}
        @foreach ($customers as $customers)      
        <div class="card" style="width: 18rem;">
            <div class="card-header">
              Featured
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Name: {{$customers->name}}</li>
              <li class="list-group-item">Contact number: {{$customers->number}}</li>
              <li class="list-group-item">Email: {{$customers->email}}</li>
              <li class="list-group-item">created at: {{$customers->created_at}}</li>
            </ul>
          </div>
         <a href="{{url('/register/forcedelete')}}/{{$customers->customer_id}}"><button type="button" class="btn btn-primary">Delete</button></a>
         <a href="{{url('/register/restore')}}/{{$customers->customer_id}}"><button type="button" class="btn btn-primary">Restore</button></a>
          @endforeach
          
        </div>
       
</body>
</html>