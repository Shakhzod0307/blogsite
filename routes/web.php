<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleriesController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::middleware('auth')->group(function (){
    Route::get('/signout', [CustomAuthController::class, 'SignOut'])->name('signout');
    Route::get('/user/profile', [CustomAuthController::class, 'profile'])->name('user.profile');
    Route::get('/user/profile/edit', [CustomAuthController::class, 'profileEdit'])->name('user.profile.edit');
    Route::post('/user/profile/store', [CustomAuthController::class, 'profileStore'])->name('user.profile.store');
});

// Routes for dashboard pages
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/blogs',[DashboardController::class, 'blogs'])->name('dashboard.blogs');
Route::get('/news',[DashboardController::class, 'news'])->name('dashboard.news');
Route::get('/galleries',[DashboardController::class, 'gallery'])->name('dashboard.galleries');
Route::get('/contact',[DashboardController::class, 'contact'])->name('dashboard.contact');

// Routes for admin panel

Route::middleware('auth')->group(function (){

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

    // routes for Admin blogs
    Route::get('/admin/index/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/admin/index/blog/view/{id}', [BlogController::class, 'show'])->name('admin.blog.view');
    Route::get('/admin/index/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/admin/index/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/admin/index/blog/add', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/index/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/index/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');

    // routes for Admin news
    Route::get('/admin/index/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/admin/index/news/view/{id}', [NewsController::class, 'show'])->name('admin.news.view');
    Route::get('/admin/index/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::post('/admin/index/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::get('/admin/index/news/add', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/admin/index/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/admin/index/news/delete/{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');


    // routes for Admin galleries
    Route::get('/admin/index/galleries', [GalleriesController::class, 'index'])->name('admin.galleries.index');
    Route::get('/admin/index/galleries/add', [GalleriesController::class, 'create'])->name('admin.galleries.create');
    Route::post('/admin/index/galleries/store', [GalleriesController::class, 'store'])->name('admin.galleries.store');
    Route::get('/admin/index/galleries/delete/{id}', [GalleriesController::class, 'destroy'])->name('admin.galleries.delete');
    // Routes for admin users page
    Route::get('/admin/index/users', [UserController::class, 'index'])->name('admin.users.index');

});
