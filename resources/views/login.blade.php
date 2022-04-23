@extends('master')
@section("content")

<div class="container p-5">
<center>
<div class="card text-white bg-info mb-3" style="width: 20rem;">
<div class="card-header">
    Login
  </div>
  <div class="card-body">
    <form action="login" method="POST">
  <div class="form-group">
      @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-warning">Login</button>
</form>
</div>
</div>
</div>
</center>
</div>


@endsection
