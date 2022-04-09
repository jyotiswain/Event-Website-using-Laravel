<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Savedevent;
use Session;
use Illuminate\Support\Facades\DB;

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

    // function search(Request $req)
    // {
    //     $data=Product::
    //     where('name','like','%'.$req->input('query').'%')->get();
    //     return view('search',['eventss'=>$data]);
    // }
    
    function saveforlater(Request $req){
        if($req->session()->has('user'))
        {
            $savedevent= new savedevent;
            $savedevent->user_id=$req->session()->get('user')['id'];
            $savedevent->event_id=$req->event_id;
            $savedevent->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
           }
          static function savedItem()
           {
$userId=Session::get('user')['id'];
return Savedevent::where('user_id',$userId)->count();
           }

           function savedEvents()
           {
               $userId=Session::get('user')['id'];
$events = DB::table('savedevents')
->join('events','savedevents.event_id','=','event_id')
->where('savedevents.user_id',$userId)
->select('events.*', 'savedevents.id as savedevents_id')
->get();

return view('savedevents',['events'=>$events]);
           }

           function reMove($id)
           {
Savedevent::destroy($id);
return redirect('savedevents');
           }

        function registerNow()
        {
            $userId=Session::get('user')['id'];
           $total = DB::table('savedevents')
            ->join('events','savedevents.event_id','=','event_id')
            ->where('savedevents.user_id',$userId)
            ->sum('events.price');
            
            return view('registernow',['total'=>$total]); 
        }   
}
