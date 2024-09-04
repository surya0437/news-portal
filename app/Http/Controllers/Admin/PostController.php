<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('Admin.Post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Post.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = Company::first();
        $request->validate([
            'title' => 'required|string|max:255',
            'categories' => 'required|array',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        if (is_null($request->author)) {
        }
        $post->author = is_null($request->author) ? $company->name : $request->author;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = 'post' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('PostImage/', $fileName);
            $post->image = 'PostImage/' . $fileName;
        }


        $post->save();
        $post->categories()->attach($request->categories);

        toast('Record created successfully', 'success');
        return redirect()->route('post.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('Admin.Post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'categories' => 'required|array',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        if (is_null($request->author)) {
        }
        $post->author = $request->author;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;
        $post->status = $request->status;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = 'post' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('PostImage/', $fileName);
            $post->image = 'PostImage/' . $fileName;
        }


        $post->update();
        $post->categories()->sync($request->categories);

        toast('Record updated successfully', 'success');
        return redirect()->route('post.edit', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if (file_exists(public_path($post->image))) {
            unlink(public_path($post->image));
        }

        $post->delete();

        toast('Record deleted successfully', 'success');
        return redirect()->route('post.index');
    }
}
