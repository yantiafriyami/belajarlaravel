<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailController extends Controller
{
	public function detailsProducts(){
    $detail = details::all(); // select * from products
    	return view('products')->with('data', $details);
    }
}

