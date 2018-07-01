<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogNoSidebar()
    {
        return view('/Pages/blog/blog-no-sidebar');
    }


public function BlogLeftSidebar()
    {
        return view('/Pages/blog/blog-left-sidebar');
    }


public function BlogRightSidebar()
    {
        return view('/Pages/blog/blog-right-sidebar');
    }


public function BlogDetailsLeft()
    {
        return view('Pages/blog/blog-details-left-sidebar');
    }
   

 public function  BlogDetailsRight()
    {
        return view('Pages/blog/blog-details-right-sidebar');
    }


public function  NutrientsDiet()
    {
        return view('Pages/Nutrients');
    }


public function  Vitamin()
    {
        return view('Pages/Vitamins');
    }
}
