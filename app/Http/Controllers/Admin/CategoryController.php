<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|unique:categories,title",
            "nep_title" => "required|string",

        ],);


        $category = new Category();

        $category->title = $request->title;
        $category->nep_title = $request->nep_title;
        $category->slug = Str::slug($request->title);


        $category->save();
        toast('Record created successfully', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.Category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            "title" => "required|string|unique:categories,title," . $category->id,
            "nep_title" => "required|string",
            "slug" => "required|string",

        ],);

        $category->title = $request->title;
        $category->nep_title = $request->nep_title;
        $category->slug = $request->slug;
        $category->status = $request->status;


        $category->update();
        toast('Record updated successfully', 'success');
        return redirect()->route('category.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        toast('Record deleted successfully', 'success');
        return redirect()->route('category.index');
    }
}
