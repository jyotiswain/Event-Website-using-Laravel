@extends('master')
@section("content")



<div class="container p-5">
<center>
<div class="card text-white bg-info mb-3" style="width: 25rem;">
<div class="card-header">
    Sign Up
  </div>
 
  <div class="card-body">
    <form action="signup" method="POST">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Username" value="{{old('name')}}">
      @error('name')
      <div class="alert alert-warning">
     {{$message}}
</div>
      @enderror
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{old('email')}}">
    <span class="text-danger">
      @error('email')
      {{$message}}
      @enderror
    </span>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span class="text-danger">
      @error('password')
      {{$message}}
      @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-warning">Sign Up</button>
</form>

<!-- @if($errors->any())
<div>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</div>
@endif -->

</div>
</div>
</div>
</center>

@error('name')
      <div class="alert alert-warning">
     {{$message}}
</div>
      @enderror
      
</div>



@endsection
