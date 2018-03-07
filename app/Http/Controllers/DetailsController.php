<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailsController extends Controller
{
	public function detailsProducts(){
    	return view('detail');
    }
}

