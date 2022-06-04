<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('staff.book.index', compact('books','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('staff.book.create',compact('categories','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request -> validate([
//            'title' => 'required|unique:books',
//            'writer' => 'required',
//            'description' => 'required',
//            'image' => 'required',
//            'category_id' => 'required',
//            'status_id' => 'required',
//            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
//        ]);



        $book = new Book();
        $book->title = $request->title;
        $book->writer = $request->writer;
        $book->description = $request->description;

        if($request ->file('image'))
        {
            $destination_path= 'public/images/book';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $book['image'] = $image_name;
        }

        $book->status_id = Book::AVAILABLE;
        $book->price = $request->price;
        $book->save();

        foreach ($request->category as $category){
            $bookCategory = new BookCategory();
            $bookCategory->book_id = $book->id;
            $bookCategory->category_id = $category;
            $bookCategory->save();
        }


        return redirect()->route('book.index')->with('success','Category added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
