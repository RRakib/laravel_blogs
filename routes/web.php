<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoPageController;

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
// Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [DemoPageController::class, "landing"]) -> name("landing");
Route::get("/about", [DemoPageController::class, "about"]) -> name("about");
Route::get("/service", [DemoPageController::class, "service"]) -> name("service");
Route::post("/service", [DemoPageController::class, "serviceAddData"]) -> name("service_add_data");
Route::post("/service", [DemoPageController::class, "todoDelete"]) -> name("service_delete_data");
Route::post("/service", [DemoPageController::class, "todoEdit"]) -> name("service_edit_data");
