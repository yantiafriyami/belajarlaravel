<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Product;


class NewController extends Controller
{
	public function newProducts()
	{
    	return view('newproduct');
    }
   
    public function store(Request $request)
    {
    	$validator = Validator::make(request()->all(), [
        'kode' => 'required',
        'name' => 'required',
        'price' => 'required',
        'description' => 'required|max:255',
        'category' => 'required',
        'gambar' => 'required',
        ]);
    	  if ($validator->fails())
    	{
            return redirect('new_products')
            ->withErrors($validator)
            ->withInput();
        }

    	$newproduct = new Product;
    	$newproduct->no_product = $request->kode;
    	$newproduct->name = $request->name;
    	$newproduct->price = $request->price;
    	$newproduct->description = $request->description;
    	$newproduct->category = $request->category;
    	$newproduct->image = $request->gambar;
    	$newproduct->save();
    	return redirect ('list_products');
    }
    public function show(Request $request, $id)
    {
    	$findproduct = Product::find($id);
    	return view('showproduct')->with('product', $findproduct);
    }
    public function edit(Request $request, $id)
    {
    	$editproduct = Product::find($id);
    	$editproduct->no_product = $request->kode;
    	$editproduct->name = $request->name;
    	$editproduct->price = $request->price;
    	$editproduct->description = $request->description;
    	$editproduct->category = $request->category;
    	$editproduct->image = $request->gambar;
    	$editproduct->save();
    	return redirect ('list_products');
    }
    public function delete(Request $request, $id)
    {
    	$deleteproduct = Product::find($id);
    	$deleteproduct->delete();
    	return redirect ('list_products');
    }
    public function listProducts(){
    	$products = Product::all();
    	return view('products')->with('data', $products);
    }
}


