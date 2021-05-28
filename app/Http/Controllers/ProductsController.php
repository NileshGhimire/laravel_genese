<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function Index(){
        $products= Product::latest()->get();
        return view('home',['products' => $products]);
    }
}
