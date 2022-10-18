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

    function detailPage($id)
    {
        $data=Product::find($id);
        return view('detail', ['product'=>$data]);
    }
    function search(Request $req)
    {
        $data=Product::where('name', 'like','%'.$req->input('query').'%')->get();
        return view('search', ['product'=>$data]);
    }
}