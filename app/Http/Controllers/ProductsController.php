<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // Data parching Directly in view 
        return view('products.index');
    }

    public function about(){
        return 'About Us Page';
    }
    
    public function about_back(){
        return redirect('/products');
    }
}
