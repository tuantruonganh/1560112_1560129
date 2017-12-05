<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductType;
class AdminController extends Controller
{
    public function getAdmin()
    {
    	return view('admin.admin');
    }
    public function Addproduct()
    {
        return view('admin.addProduct');
    }
    public function getDetail()
    {
        $products = DB::table('products')
        ->join('type_product','id_type_product', '=', 'id_type')
        ->select('products.*','type_product.type_name')
        ->paginate(5);
        return view('admin.detailproduct',compact('products'));
    }
    public function postAdd(Request $product_request)
    {
        $file_name = $product_request->file('fImage')->getClientOriginalName();
        $product = new Product();
        $product->id                = $product_request->txtMa;
        $product->name              = $product_request->txtName;
        $product->id_type_product   = $product_request->txtLoai;
        $product->new_arrival       = $product_request->txtNewArrivals;
        $product->new               = $product_request->txtNew;
        $product->best_seller       = $product_request->txtBestSeller;
        $product->unit_price        = $product_request->txtGia;
        $product->image             = $file_name;
        $product->description       = $product_request->txtMoTa;
        $product->specification     = $product_request->txtChiTietKiThuat;
        $product_request->file('fImage')->move('sources/images/products/',$file_name);
        $product->save();
    }
}
