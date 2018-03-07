<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShowController extends Controller
{
    public function showProducts(){
    	return view('showproduct');
    }
}
