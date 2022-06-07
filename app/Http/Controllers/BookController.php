<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Status;
use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderByDesc('created_at')->get();
        $categories = Category::all();

        return view('staff.book.index', compact('books', 'categories'));
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
        return view('staff.book.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate ([
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->writer = $request->writer;
        $book->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //            $image_name = $image->getClientOriginalName();
            //            $path = $request->file('image')->storeAs($destination_path,$image_name);
            //
            //            $book->image = $path;

            $path = Storage::disk('uploads')->putFileAs(
                'book',
                $request->file('image'),
                'book-' . $request->file('image')->getClientOriginalName()
            );

            $book->image = 'uploads/' . $path;
        }

        $book->status_id = Book::AVAILABLE;
        $book->price = $request->price;
        $book->save();

        foreach ($request->category as $category) {
            $bookCategory = new BookCategory();
            $bookCategory->book_id = $book->id;
            $bookCategory->category_id = $category;
            $bookCategory->save();
        }

        Alert::success('Success', 'Book Has Been Added');
        return redirect()->route('book.index');
        // return redirect()->route('book.index')->with('success', 'Book Has Been Added');
    }

    /**
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $bookCategories = $book->categories;
        return view('staff.book.show', compact('book', 'bookCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $BookCategories = BookCategory::all();
        $genres = Book::with(['categories'])->get()->find($book);
        // return $genres->categories;

        return view('staff.book.edit', compact('book', 'categories', 'genres'));
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
        $request->validate ([
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->writer = $request->writer;
        $book->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //            $image_name = $image->getClientOriginalName();
            //            $path = $request->file('image')->storeAs($destination_path,$image_name);
            //
            //            $book->image = $path;

            $path = Storage::disk('uploads')->putFileAs(
                'book',
                $request->file('image'),
                'book-' . $request->file('image')->getClientOriginalName()
            );

            $book->image = '/uploads/' . $path;
        }

        $book->status_id = Book::AVAILABLE;
        $book->price = $request->price;
        $book->save();

        foreach ($request->category as $category) {
            $bookCategory = new BookCategory();
            $bookCategory->book_id = $book->id;
            $bookCategory->category_id = $category;
            $bookCategory->save();
        }

        Alert::success('Success', 'Book Has Been Edited');
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        Alert::success('Success', 'Book Has Been Deleted');
        return redirect()->route('book.index');
    }
}
