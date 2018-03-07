<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProfilController extends Controller
{
    public function index(){
    	return view('profil');
    }
}
