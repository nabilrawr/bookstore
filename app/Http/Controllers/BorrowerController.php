<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowerController extends Controller
{

    public function index()
    {
        return view('borrower.index');

    }
    public function bookView()
    {
        return view('borrower.bookview');
    }

    public function profile()
    {
        return view('borrower.profile');
    }

    public function borrowRecord()
    {
        return view('borrower.borrow-record');
    }




    public function create()
    {
        //
    }

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
}
