@extends('master')
@section("content")

<div class="card border border-dark p-5 m-3">
<h1 class="mx-auto w-25 p-3" >Live <span class="badge badge-warning ">Events</span><h1>
  <div class=container>
    <div class="row">
@foreach($events as $item)
<div class="p-3 m-2">
<div class="card border border-warning" style="width: 20rem;">
  <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$item['name']}}</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="detail/{{$item['id']}}" class="btn btn-primary">See Details</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
</div>

@endsection
