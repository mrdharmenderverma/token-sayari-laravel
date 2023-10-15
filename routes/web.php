<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('index');
});

Route::get('/mission', function(){
    return view('mission');
});

Route::get('/our-journey', function(){
    return view('our-journey');
});

Route::get('/funds-assets', function(){
    return view('funds-assets');
});

Route::get('program', function(){
    return view('program');
});

Route::get('/instrument', function(){
    return view('instrument');
});

Route::get('project', function(){
    return view('project');
});


