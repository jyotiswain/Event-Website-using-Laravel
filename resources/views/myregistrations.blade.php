@extends('master')
@section('content')
<div class="container">
    
<div class="row">
    <div class="col-12">
        <h1 class="">My <span class="badge badge-success"> Registrations </span> </h1>
        <br>
        @foreach($registrations as $item)
       
        <div class="row searched-item saved-list-divider">
        <div class="media col-sm-3">
        <a href="detail/{{$item->id}}">
                <img class="mr-3" src="{{$item->gallery}}">
</a>
        

        <div class="col-sm-12">
                <div class="media-body">
                    <h2 class="mt-0">Name: {{$item->name}}</h2>
                    <!-- <h5>Description: {{$item->description}}</h5>
                    <h5>Status: {{$item->status}}</h5> -->
                    <h5 >Payment Status: {{$item->payment_status}}</h5>
                    <h5>Payment Method: {{$item->payment_method}}</h5>
</div>
        </div>
        </div>

</div>
@endforeach
</div>
</div>
</div>
@endsection