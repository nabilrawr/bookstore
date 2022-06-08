<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::paginate(5);
        $categories = Category::orderByDesc('created_at')->get();
        return view('staff.category.index', compact('categories'));
    }

    public function IndexRestore()
    {
        $categories = Category::onlyTrashed()
            ->get();
        return view('staff.category.deleted', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        Alert::success('Success', 'Category Has Been Added');

        return redirect()->route('category.index')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('staff.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        Alert::success('Success', 'Category Has Been Edited');

        return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Alert::success('Success', 'Category Has Been Deleted');
        return redirect()->route('category.index')->with('success', 'Category Deleted Successfully');
    }

    public function restore($category_id)
    {

        $category = Category::onlyTrashed()->findOrFail($category_id);
        $category->restore();
        // Book::withTrashed()->where('id', $book)->restore();

        Alert::success('Success', 'Category Has Been Restored');
        return redirect()->route('category.index');
    }

    public function restoreAll()
    {
        Category::onlyTrashed()->restore();

        return redirect()->route('category.index');
    }
}
