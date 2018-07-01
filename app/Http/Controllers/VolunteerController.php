<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    

     public function  Volunteers3Col()
    {
        return view('Pages/Volunteers/Volunteers-3col');
    }

     public function  Volunteers4Col()
    {
        return view('Pages/Volunteers/Volunteers-4col');
    }

     public function  SingleVolunteers()
    {
        return view('Pages/Volunteers/Volunteers-details');
    }
}
