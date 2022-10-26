<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

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

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id = $req->session()->get('user')['id']; //user_id
            $cart->product_id = $req->product_id; //product_id
            $cart->save();

            return redirect('/productcontroller');

        }
        else
        {
            return redirect('/');
        }
       
    }

    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::WHERE('user_id', $userId)->count(); //returns number of products or cart
    }

}