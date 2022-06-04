<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function edit(User $borrower)
    {
        return view('borrower.profile-edit', compact('borrower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $borrower)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string','max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string','max:255'],
        ]);

        //attribute database -> attribute dari form
        $borrower->name = $request->name;
        $borrower->ic = $request->ic;
        $borrower->email = $request->email;
        $borrower->phone = $request->phone;
        $borrower->address = $request->address;
        // $borrower->password = $borrower->password;

        $borrower->save();

        return view('borrower.profile-edit')->with('success', 'Your profile has been updated');;
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
