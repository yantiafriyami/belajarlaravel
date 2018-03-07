<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProducts(){
    	$products = Product::all();
    	return view('products')->with('data', $products);
    }
}

