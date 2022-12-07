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

Route::get('/', function () {
    return view('index');
});

//Route that sends back a view
Route::get('/docs', function () {
    return view('frontend.item-details');
});

// Route that sends users - string
Route::get('/users', function () {
    return 'welcome to users page';
});

// Route that sends users Array
Route::get('/users', function(){
    return ['PHP', 'HTML', 'Laravel', 'css'];
});