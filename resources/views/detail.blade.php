@extends('master')
@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-6">
<img class="detail-img" src="{{$event['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
<a href="/">Go Back</a>
<h2>{{$event['name']}}</h2>
<h3>Price: {{$event['price']}}</h3>
<h4>Details: {{$event['description']}}</h4>
<h4>Category: {{$event['category']}}</h4>
<br><br>
<button class="btn btn-primary">Save for Later</button>
<br><br>
<button class="btn btn-success">Register Now!</button>
<br><br>
        </div>
    </div>

</div>

@endsection
