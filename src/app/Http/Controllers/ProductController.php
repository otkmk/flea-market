<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',['products' => $products]);
    }
    public function login()
    {
        return view('login');
    }
    public function show($item_id)
    {
        $product = Product::findOrFail($item_id);
        return view('item',['product'=>$product]);;
    }
}
