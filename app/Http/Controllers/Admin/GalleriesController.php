<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class GalleriesController extends Controller
{
        /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $galleries = Gallery::all();
        // dd($galleriess);
        return view('admin.galleries.index')->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galleries = new Gallery();
        $galleries->user = Auth::user()->name;
        $galleries->gallery = $request->gallery;


        if($request->gallery)
        {
            $galleries->gallery = $request->gallery;

            if($request->file('gallery')){
                $file= $request->file('gallery');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('admin/gallery/'), $filename);
                $galleries['gallery']= $filename;
            }
            $galleries->gallery = $galleries['gallery']= $filename;
        }
        $galleries->save();
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Gallery::destroy($id);
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully!');
    }
}
