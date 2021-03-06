<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OpenPagesController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
 Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/', OpenPagesController::class);
Route::get("/about", [BlogController::class, "about"]) -> name("about");
Route::get("/blogs", [BlogController::class, "blogs"]) -> name("blogs");
Route::get("/blog/edit/{id}", [BlogController::class, "blogEdit"]) -> name("editBlog");
Route::get("/blog/create", [BlogController::class, "createBlog"]) -> name("create_blog");
Route::post("/blog/delete", [BlogController::class, "blogDelete"]) -> name("delete_blogs");
Route::post("/blog/submit", [BlogController::class, "submitBlogs"]) -> name("submitBlogs");
Route::post("/blog/update/{id}", [BlogController::class, "updateBlog"]) -> name("updateBlog");
Route::get("/blog/details/{id}", [BlogController::class, "blogDetails"]) -> name("blogDetails");
