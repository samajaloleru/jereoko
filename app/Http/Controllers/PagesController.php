<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class PagesController extends Controller
{
    
    public function index() {
        // $product = DB::table('product')
        //        ->where('product.status',1)
        //         ->select('product.*')
        //         ->get(); 

        return view('pages.index');
        // return view('pages.index',['product'=>$product]);
    }

    public function search(Request $request){
      $q = $request->input('q');
      if($q != ""){
         $product = DB::table('product')
                  ->where('product_name', 'LIKE', '%' . $q . '%')
                  ->get();

         if(count($product) > 0)
         return view('pages.shop')->withDetails($product)->withQuery($q);
      }
      //dd($q);
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();

      return view('pages.shop')->withMessage("No Product Found!");
   }

   public function about(){
    // $product = DB::table('product')
    //             ->where('product.status',1)
    //             ->inRandomOrder()
    //             ->limit('30')
    //             ->select('product.*')
    //             ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.about');
    // return view('pages.shop',['product'=>$product]);
   }
   
   public function shop(){
    // $product = DB::table('product')
    //             ->where('product.status',1)
    //             ->inRandomOrder()
    //             ->limit('30')
    //             ->select('product.*')
    //             ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.shop');
    // return view('pages.shop',['product'=>$product]);
   }


   // public function product_by_category($category_id)
   // {
   //    $product=DB::table('product')
   //          ->join('category','product.category_id','=','category.category_id')
   //          ->select('product.*','category.category_name')
   //          ->where('category.category_id',$category_id)
   //          ->limit('30')
   //          ->where('product.status',1)
   //          ->get(); 

   //    // echo "<pre>";
   //    // print_r($category);
   //    // echo "</pre>";
   //    // exit();
   //    return view('pages.product_by_category',['product'=>$product]);
   // }

   // public function product_by_brand($brand_id)
   // {
   //    $product=DB::table('product')
   //          ->join('brand','product.brand_id','=','brand.brand_id')
   //          ->select('product.*','brand.brand_name')
   //          ->where('brand.brand_id',$brand_id)
   //          ->where('product.status',1)
   //          ->get(); 

   //    // echo "<pre>";
   //    // print_r($brand);
   //    // echo "</pre>";
   //    // exit();
   //    return view('pages.product_by_brand',['product'=>$product]);
   // }

   public function view_product(){
//    public function view_product($product_id){
    //   $product = DB::table('product')
    //            ->where('product.product_id',$product_id)
    //            ->where('product.status',1)
    //            ->first(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
      return view('pages.view_product');
   }

    public function blog() {
        return view('pages.blog');
    }

    public function service() {
        return view('pages.service');
    }

    public function contact() {
        return view('pages.contact');
    }    
    
}
