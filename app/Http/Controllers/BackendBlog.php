<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Hash;
use Redirect;
use DB;
use Illuminate\Support\Facades\Input;
use App\file;

class BackendBlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { $blog = Blog::paginate(5);
        return view('Backend/Pages/AllBlogs',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/Pages/addblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog= new Blog() ;
      $blog->title = $request->title;
    
      $blog->image = $request->image;
      $blog->body = $request->body;
      $blog->save();
      return Redirect('/allblog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('Backend/Pages/editblog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog=Blog::find($id);
      $blog->title = $request->title;
      //if(!empty($_FILES['image']['image'])){
                   

       // $path='public/uploads/';
       // $pathname=$path.$_FILES['image']['image'];
       // move_uploaded_file($request->file('image'),$pathname);
       // $blog->image=$_FILES['image']['image'];
       // }
      $blog->body = $request->body;
      $blog->update();
      return Redirect('/allblog');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('blogs')->delete($id);
        return redirect::back();
    }
}
