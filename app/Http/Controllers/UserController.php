<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use DB;
use Redirect;
use Illuminate \Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages/Login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages/Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user= new User() ;
      $user->Name = $request->Name;
      $user->BloodGroup = $request->BloodGroup;
      $user->PhoneNumber = $request->Phone;
      $user->Email = $request->Email;
      $user->Hospital = $request->Hospital;
      $user->Age = $request->Age;
      $user->Password = Hash::make($request->input('Password'));
      $user->Adress = $request->Adress;
      $user->save();
      return Redirect('/userlist');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     $user =User::all();
     return view('Pages/userlist',compact('user'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    
    {
        $user=User::find($id);
        return view('Pages/edituser',compact('user'));
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
      $user=User::find($id);
      $user->Name = $request->Name;
      $user->BloodGroup = $request->BloodGroup;
      $user->PhoneNumber = $request->Phone;
      $user->Email = $request->Email;
      $user->Hospital = $request->Hospital;
      $user->Age = $request->Age;
      $user->Password = Hash::make($request->input('Password'));
      $user->Adress = $request->Adress;
      $user->update();
      return Redirect('userlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->delete($id);
        return redirect::back();
    }
    
    public function single()
    {
       return view('Pages/singleuser');
    }

    public function signin(Request $request){
  
  Validator::make($request->all(),
    [
    'Name'=>'required',
      'Password'=>'required',
    ])->validate();
  
 
 
   if(Auth::attempt(['Name'=>$request->input('Name'),'Password'=>$request->input('Password')]))
   {
    alert()->success('You have been logged In.','Its pleasure to see you');
    return Redirect('/');
   }
   else{
    return redirect::back();
  }

}
}

