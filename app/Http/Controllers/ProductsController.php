<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\ViewName;

class ProductsController extends Controller
{
    function index(){
        $products = Product::all();
        return view('allProducts', ['products' => $products]);
    }

    function showMax(){
        $max = Product::max('price');
        return $max;
    }

    function showMin(){
        $min = Product::min('price');
        return $min;
    }

    function showAvg(){
        $avg = Product::avg('price');
        return $avg;
    }
}
