<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function  GalleryStyleOne()
    {
        return view('Pages/Gallery/gallery-one');
    }

 public function  GalleryStyleTwo()
    {
        return view('Pages/Gallery/gallery-two');
    }

public function  GalleryStyleThree()
    {
        return view('Pages/Gallery/gallery-three');
    }



}
