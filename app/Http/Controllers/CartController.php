<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $qty=$request->qty;
        $product_id=$request->product_id;
        $product_info=DB::table('product')
                    ->where('product_id',$product_id)
                    ->first();

        $data['qty']=$qty;
        $data['id']=$product_info->product_id;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->price;
        $data['options']['image']=$product_info->image;

        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart(Request $request){
        // $category = DB::table('category')
        //         ->where('category.status',1)
        //         ->get(); 

        // echo "<pre>";
        // print_r($category);
        // echo "</pre>";
        // exit();
        return view('pages.cart');
    }

    public function delete_cart($rowId)
    {
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }

    public function update_cart(Request $request)
    {
        $qty=$request->qty;
        $rowId=$request->rowId;

        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');
    }
}
