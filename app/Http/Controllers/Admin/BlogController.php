<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        // dd($blogs);
        return view('admin.blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->images)
        {
            $blog->images = $request->images;

            if($request->file('images')){
                $file= $request->file('images');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('admin/blog/images/'), $filename);
                $blog['images']= $filename;
            }
            $blog->images = $blog['images']= $filename;
        }
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog item created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::find($id);
        return view('admin.blogs.show')->with('blogs',$blogs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog =Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->images)
        {
            $blog->images = $request->images;

            if($request->file('images')){
                $file= $request->file('images');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('admin/blog/images/'), $filename);
                $blog['images']= $filename;
            }
            $blog->images = $blog['images']= $filename;
        }
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Blog::destroy($id);
        return redirect()->route('admin.blog.index')->with('success', 'Blog item deleted successfully!');
    }
}
