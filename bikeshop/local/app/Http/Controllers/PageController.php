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
        $products = Product::where('new_arrival',1)->get();
        $new_products = Product::where('new',1)->get();
        $bestsale_products = Product::where('best_seller',1)->get();
    	return view('page.trangchu',compact('slide','products','new_products','bestsale_products'));
    }
    public function getAdmin()
    {
    	return view('admin');
    }
    public function getCheckout()
    {
    	return view('page.checkout');
    }
    public function getDetail($id)
    {
        $sanpham = Product::where('id',$id)->first();
        $bestsale_products = Product::where('best_seller',1)->get();
        return view('page.detail',compact('sanpham','bestsale_products'));
    }
 }
