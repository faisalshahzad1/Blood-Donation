<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use DB;
use Redirect;
use App\file;
use Illuminate\Support\Facades\Input;
use App\getFileName;
use getClientOriginalName;


class BackVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer = Volunteer::paginate(5);
        return view('Backend/allvolunteer',compact('volunteer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/addvolunteer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $volunteer = new Volunteer();
       $volunteer->Name = $request->Name;

       if ($request->hasFile('Image')) {
        $fileName = $request->Image->store('public/Volunteer');                   
        }                   

        
        $volunteer->Image = $fileName;
       $volunteer->Occupation=$request->Occupation;
       $volunteer->Education = $request->Education;
       $volunteer->Phone = $request->Phone;
       $volunteer->Email = $request->Email;
       $volunteer->Adress = $request->Adress;
       $volunteer->Description = $request->Description;
       $volunteer->save();
       return Redirect('/allvolunteer');
      
       
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
        $volunteer= Volunteer::find($id);
        return view('Backend/editvolunteer',compact('volunteer'));
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
        $volunteer = Volunteer::find($id);
        if ($request->hasFile('Image')) {
            $fileName = $request->Image->store('public/Volunteer');                   
        } 
       $volunteer->Name = $request->Name;
       $volunteer->Image= $fileName;
       $volunteer->Occupation = $request->Occupation;
       $volunteer->Education = $request->Education;
       $volunteer->Phone = $request->Phone;
       $volunteer->Email = $request->Email;
       $volunteer->Adress = $request->Adress;
       $volunteer->Description = $request->Description;
       $volunteer->update();
       return Redirect('/allvolunteer');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('Volunteers')->delete($id);
        return redirect::back();
    }
}
