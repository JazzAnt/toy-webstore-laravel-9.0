<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//home
Route::get("/", "App\Http\Controllers\HomeController@index")->name("home.index");
Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");
Route::get("/contact", "App\Http\Controllers\HomeController@contact")->name("home.contact");

//toys
Route::get("/toys", "App\Http\Controllers\ToyController@index")->name("toy.index");
Route::get("/toys/{id}", "App\Http\Controllers\ToyController@show")->name("toy.show");
Route::get("/checkout", "App\Http\Controllers\ToyController@checkout")->name("toy.checkout");

//admin
Route::get("/admin", "App\Http\Controllers\AdminHomeController@index")->name("admin.home.index");

//admin toys
Route::get("/admin/toys", "App\Http\Controllers\AdminToyController@index")->name("admin.toy.index");
//add
Route::get("/admin/toys/add", "App\Http\Controllers\AdminToyController@add")->name("admin.toy.add");
Route::post("/admin/toys/post", "App\Http\Controllers\AdminToyController@post")->name("admin.toy.post");
//update
Route::get("/admin/toys/{id}/edit", "App\Http\Controllers\AdminToyController@edit")->name("admin.toy.edit");
Route::put("/admin/toys/{id}/update", "App\Http\Controllers\AdminToyController@update")->name("admin.toy.update");
//delete
Route::delete("/admin/toys/{id}/delete", "App\Http\Controllers\AdminToyController@delete")->name("admin.toy.delete");
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
