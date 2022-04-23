@extends('master')
@section("content")

<br>
<div class="container">
    <div class="row">
        <div class="card w-100" style="width: 18rem;">
<img class="" src="{{$event['gallery']}}" alt="">
        
        <div class="card-body">
<h2>{{$event['name']}}</h2>
<h3>Price: {{$event['price']}}</h3>
<h4>Details: {{$event['description']}}</h4>
<h4>Category: {{$event['category']}}</h4>
<br><br>
<form action="/saved_for_later" method="POST">
    @csrf
    <input type="hidden" name="event_id" value={{$event['id']}}>
<button class="btn btn-primary">Save for Later</button>
</form>
<br><br>
<form action="/registernow" method="GET">
@csrf
<button class="btn btn-success">Register Now!</button>
</form>
</div>
<br><br>
        </div>
    </div>

</div>

@endsection
