<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slide;
use App\Product;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $products = Product::where('new_arrival',1)->paginate(4);
        $new_products = Product::where('new',1)->get();
        $bestsale_products = Product::where('best_seller',1)->get();
    	return view('page.homepage',compact('slide','products','new_products','bestsale_products')); 
    }
  
    public function getCheckout()
    {
    	return view('page.checkout');
    }
    public function getDetail($id)
    {
        $sanpham = Product::where('id',$id)->first();
        $bestsale_products = Product::where('best_seller',1)->get();
        $related_products = Product::where('id_type_product',$sanpham->id_type_product)->paginate(4);
        return view('page.detail',compact('sanpham','bestsale_products','related_products'));
    }
    public function getProducts($id)
    {
        $products = Product::where('id_type_product',$id)->paginate(6);
        $product_name = ProductType::where('id_type',$id)->first();
        $arrivals_products = Product::where('new_arrival',1)->paginate(4);
        $new_products = Product::where('new',1)->paginate(4);
        $bestsale_products = Product::where('best_seller',1)->paginate(4);
        return view('page.products',compact('products','arrivals_products','new_products','bestsale_products','product_name'));
    }

 }
