<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;

class PostController extends Controller
{
	 public function authorize(){
    	return true;
    }
    public function error(Request $request)
    {
        $validatedData = $request->validate([
        'kode' => 'required|unique:posts',
        'name' => 'required',
        'price' => 'required',
        'description' => 'required|max:255',
        'category' => 'required',
        'gambar' => 'required',
    ]);
    	// Validate and store the blog post...
    }
}
