@extends('master')
@section('content')
<div class="custom-event">
    
<div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Result for Events</h4>
        <a class="btn btn-success" href="registernow">Register Now</a><br><br>
        @foreach($events as $item)
       
        <div class="row searched-item saved-list-divider">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
</a>
        </div>

        <div class="col-sm-3">
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5>
</div>
        </div>

        <div class="col-sm-3">
        <a href="/remove/{{$item->savedevents_id}}" class="btn btn-warning">Remove</a>
        </div>
</div>
@endforeach
</div>
</div>
</div>
@endsection