<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Laravel Deep Learning Project";
        $des = "This is an Laravel deep learning program.";
        return view('products.index', compact('title', 'des'));
    }
    
    public function about(){
        return 'About Us Page';
    }
    
    public function about_back(){
        return redirect('/products');
    }
}
