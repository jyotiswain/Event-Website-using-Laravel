@extends('master')
@section('content')
<div class="custom-event">
    
<div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>My Registrations</h4>
        
        @foreach($registrations as $item)
       
        <div class="row searched-item saved-list-divider">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
</a>
        </div>

        <div class="col-sm-3">
                <div class="">
                    <h2>Name: {{$item->name}}</h2>
                    <!-- <h5>Description: {{$item->description}}</h5>
                    <h5>Status: {{$item->status}}</h5> -->
                    <h5>Payment Status: {{$item->payment_status}}</h5>
                    <h5>Payment Method: {{$item->payment_method}}</h5>
</div>
        </div>

</div>
@endforeach
</div>
</div>
</div>
@endsection