<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>HELLO WORLD!!</h1>';
});

Route::get('/about',function()
{
    return view('pages.about');
});

Route::get('/users/{id}',function($id)
{
    return ('This is a user'.$id);
});
// Route::get('/', 'PagesController@index');

Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/ContactUs', [PageController::class, 'ContactUs']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('Posts','PostController'::class);
Route::resource('Posts', App\Http\Controllers\PostController::class);
// Route::resource('Pages', App\Http\Controllers\PagesController::class);



Route::get('Country', [CountryController::class,'getCountries']);
