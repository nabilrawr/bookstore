<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{

    public function indexCatalog()
    {
        $books = Book::orderByDesc('created_at')->get();
        $categories = Category::all();
        return view('borrower.catalog-index', compact('books','categories'));
    }

    public function showCatalog(Book $book)
    {
        $categories = Category::all();
        return view('borrower.catalog-show', compact('book','categories'));
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
    public function edit(User $user)
    {
        return view('borrower.profile-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string','max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string','max:255'],
        ]);

        //attribute database -> attribute dari form
        $user->name = $request->name;
        $user->ic = $request->ic;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;


        $user->save();

        return redirect()->route('profile-show',$user->id)->with('success', 'Your profile has been updated');;
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
