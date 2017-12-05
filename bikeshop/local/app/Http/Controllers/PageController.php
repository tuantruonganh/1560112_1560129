<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;

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
 }
