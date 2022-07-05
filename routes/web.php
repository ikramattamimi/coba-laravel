<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
// Route::get('/posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function(){
    return view('categories', [
        "title" => "Posts Categories",
        "categories" => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => "Posts",
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});
Route::get('/authors/{author:username}', function(User $author){
    return view('author', [
        "title" => "Posts",
        "posts" => $author->posts,
        "author" => $author->name
    ]);
});
