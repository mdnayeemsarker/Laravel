<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('home');
});

Route::get('/products', [ProductsController::class, 'index']);

//Pattern is integer
// Route::get('/products/{id}', 
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');

//Pattern is string
Route::get('products/{name}',
    [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

Route::get('/products/about', [ProductsController::class, 'about']);
Route::get('/products/about/back', [ProductsController::class, 'about_back']);
