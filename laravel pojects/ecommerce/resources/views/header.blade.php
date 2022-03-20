@php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @if(Session::has('user'))
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/myorders">My Order</a>
          </li>
          @endif
        </ul>
        {{-- to show search count --}}
        <li><a href="/cartlist" style="margin-left: -27%; color: #adc8f1;">cart({{$total}})</a></li>
        {{-- search querry request --}}
        <form class="d-flex" action="/search" method="GET">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <!-- condition to show when user is loggedin & logged out-->
        @if(Session::has('user'))
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      {{Session::get('user')['name']}}
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/logout">Logout</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>    
  @else
  <li><a href="/login" class="btn btn-primary">Login</a></li>
  <li><a href="/register" class="btn btn-primary">SignUP</a></li>
  @endif

      </div>
    </div>
  </nav>