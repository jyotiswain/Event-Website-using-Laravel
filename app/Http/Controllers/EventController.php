<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    function index()
    {
        $data = Event::all();

        return view('event',['events' => $data]);
    }

    function detail($id){
        $data = Event::find($id);
        return view('detail',['event'=>$data]);
    }
}
