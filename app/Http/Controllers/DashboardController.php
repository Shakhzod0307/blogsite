<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $blogs = DB::table('blogs')->limit(2)->get();
        // dd($blogs);
        $news = DB::table('news')->limit(2)->get();
        // dd($news);
        return view('dashboard.blog')->with('blog',$blogs)->with('news',$news);
    }

    public function blogs()
    {
        $blogs = DB::table('blogs')->get();
        return view('dashboard.blog2')->with('blog',$blogs);
    }

    public function news()
    {
        $news = DB::table('news')->get();
        return view('dashboard.news')->with('news',$news);
    }

    public function gallery()
    {
        $galleries = DB::table('galleries')->get();
        // dd($galleries);
        return view('dashboard.gallery')->with('galleries',$galleries);
    }

    public function contact()
    {
        return view('dashboard.contact');
    }


}
