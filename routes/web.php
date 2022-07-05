<?php

use GuzzleHttp\Middleware;
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


Route::view('/home','front.index')->middleware('auth');
Route::view('/blog','front.blog')->middleware('auth');

Route::get('/', function(){
    return view('auth.login');
});

// Route::get('register', function(){
//     return view('auth.register');
// });

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::get('create-blog', function(){
    return view('dashboard.create');
});

Route::get('edit', function(){
    return view('dashboard.edit');
});

Route::get('view', function(){
    return view('dashboard.view');
});