<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\News;
use App\Models\Gallery;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usercount = User::count();
//        dd($usercount);
        $blogcount = Blog::count();
        $newscount = News::count();
        $gallerycount = Gallery::count();
        return view('admin.index ',compact('usercount','blogcount','newscount','gallerycount'));
    }

}
