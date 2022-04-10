<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Savedevent;
use App\Models\Registration;
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
        
        function registrationDone(Request $req)
        {
            $userId=Session::get('user')['id'];
            $allSavedevent = Savedevent::where('user_id', $userId)->get();
            foreach($allSavedevent as $savedevents)
            {
                $registration= new Registration;
                $registration->event_id=$savedevents['event_id'];
                $registration->user_id=$savedevents['user_id'];
                $registration->status="Completed";
                $registration->payment_method=$req->payment;
                $registration->payment_status="Done";
                $registration->save();
                Savedevent::where('user_id', $userId)->delete();
            }
            $req->input();
            return redirect('/');
        }

        function myRegistrations()
        {
            $userId=Session::get('user')['id'];
            $registrations = DB::table('registrations')
             ->join('events','registrations.event_id','=','event_id')
             ->where('registrations.user_id',$userId)
             ->get();

             return view('myregistrations',['registrations'=>$registrations]); 
        }
}
