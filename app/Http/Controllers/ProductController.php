<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function productpage()
    {
        $product_datas=Product::all();
        return view('products', ['product'=>$product_datas]);
    }
}