<?php
use App\Http\Controllers\EventController;
$total=0;
if(Session::has('user'))
{
$total= EventController::savedItem();
}
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/">EVENT</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myregistrations">Registrations</a>
        </li>
      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav">
      @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/savedevents">Saved Events({{$total}})</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">{{Session::get('user')['name']}}</a>
        <!-- <span class="caret"></span></a> -->
        <ul class="dropdown-menu">
          <li class="nav-item active">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item active"><a class="nav-link" href="/login">Login</a></li>
      <li class="nav-item active"><a class="nav-link" href="/signup">Sign Up</a></li>
      @endif
          
      </ul>
  
</nav>
