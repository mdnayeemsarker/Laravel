<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $data = [
            'p1' => "iPhone",
            'p2' => "Xiome",
            'p3' => "Samsong",
        ];

        // Data parching Directly in view 
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function show ($id){
        return $id;
    }

    public function about(){
        return 'About Us Page';
    }
    
    public function about_back(){
        return redirect('/products');
    }
}
