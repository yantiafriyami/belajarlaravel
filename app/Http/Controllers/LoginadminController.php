<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LoginadminController extends Controller
{
	public function loginAdmin(){
    	return view('login');
    }
}

