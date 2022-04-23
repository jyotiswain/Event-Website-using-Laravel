@extends('master')
@section('content')
<div class="container">
    

    
        <h4>Saved Events</h4>
        <div class="row row-cols-1 row-cols-md-2">
        @foreach($events as $item)
       
        <div class="">
        <div class="col mb-4">
        <div class="card h-100" style="width:18rem;">
        <a href="detail/{{$item->id}}">
                <img class="card-img-top" src="{{$item->gallery}}">
</a>
        

        <div class="card-body">
                <div class="">
                    <h2 class="card-title">{{$item->name}}</h2>
                    <h5 class="card-text">{{$item->description}}</h5>
</div>
        </div>

        <div class="">
        <a href="/remove/{{$item->savedevents_id}}" class="btn btn-warning">Remove</a>
        </div>
        </div>
        
</div>

@endforeach
<br>
<a class="btn btn-success" href="registernow">Register Now</a><br><br>
</div>
</div>
</div>
@endsection