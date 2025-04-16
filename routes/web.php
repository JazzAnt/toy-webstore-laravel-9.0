<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", "App\Http\Controllers\HomeController@index")->name("home.index");
Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");
Route::get("/contact", "App\Http\Controllers\HomeController@contact")->name("home.contact");

Route::get("/toys", "App\Http\Controllers\ToyController@index")->name("toy.index");
Route::get("/toys/{id}", "App\Http\Controllers\ToyController@show")->name("toy.show");
Route::get("/checkout", "App\Http\Controllers\ToyController@checkout")->name("toy.checkout");