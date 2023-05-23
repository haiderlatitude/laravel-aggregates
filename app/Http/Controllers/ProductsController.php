<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    function index(){
        $products = Product::all();
        return view('allProducts', ['products' => $products]);
    }

    function showMax(){

    }

    function showMin(){

    }

    function showAvg(){
        
    }
}
