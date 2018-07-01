<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function  Events3Col()
    {
        return view('Pages/Events/events-3col');
    }
    
    public function  Events4Col()
    {
        return view('Pages/Events/events-4col');
    }
    public function  EventsDetails()
    {
        return view('Pages/Events/events-details');
    }
}
