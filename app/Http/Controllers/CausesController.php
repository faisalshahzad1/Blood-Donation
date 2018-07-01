<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



     public function  CausesNoSidebar()
    {
        return view('Pages/Causes/causes-no-sidebar');
    }

     public function  CausesLeftSidebar()
    {
        return view('Pages/Causes/causes-left-sidebar');
    }

     public function  CausesRightSidebar()
    {
        return view('Pages/Causes/causes-right-sidebar');
    }
    
    public function  SingleCausesLeft()
    {
        return view('Pages/Causes/causes-details-left');
    }
    public function  SingleCausesRight()
    {
        return view('Pages/Causes/causes-details-right');
    }
    public function  DonorAcceptor()
    {
        return view('Pages/DonorAcceptor');
    }


}
