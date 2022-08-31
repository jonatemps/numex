<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function list(){
        $events = Event::all();
        return view('events',['events' => $events]);
    }
}
