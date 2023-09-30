<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index():View
    {
        $news = News::all();
        // dd($newss);
        return view('admin.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->category = $request->category;
        $news->updated_time = $request->updated_time;
        $news->description = $request->description;

        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'News created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        return view('admin.news.show')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $news = News::find($id);
        return view('admin.news.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news =News::find($id);
        $news->title = $request->title;
        $news->category = $request->category;
        $news->updated_time = $request->updated_time;
        $news->description = $request->description;

        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'News  updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        News::destroy($id);
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
    }
}
