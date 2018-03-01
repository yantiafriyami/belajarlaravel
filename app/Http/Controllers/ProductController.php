<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProducts(){
    	$products = Product::all(); // select * from products
    	return view('products')->with('data', $products);
    }
}

