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
        $data = [
            '01' => "iPhone",
            '101' => "Xiome",
            '09' => "Samsong",
        ];
        return view('products.index', [
            'products' => $data[$id] ?? 'Product ' . $id . " dose not exist."
        ]);
    }
    // public function show ($name){
    //     $data = [
    //         'iphone' => "iPhone",
    //         'xiome' => "Xiome",
    //         'samesong' => "Samsong",
    //     ];
    //     return view('products.index', [
    //         'products' => $data[$name] ?? 'Product ' . $name . " dose not exist."
    //     ]);
    // }

    public function about(){
        return 'About Us Page';
    }
    
    public function about_back(){
        return redirect('/products');
    }
}
