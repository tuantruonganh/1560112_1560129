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
        $product = DB::table('products')
        ->join('type_product','id_type_product','=','id_type')
        ->select('products.id_type_product','type_product.type_name')
        ->get();
        $product_type=DB::table('type_product')->get();
        return view('admin.addProduct',compact('product','product_type'));
    }
    public function getDetail()
    {
        $products = DB::table('products')
        ->join('type_product','id_type_product', '=', 'id_type')
        ->select('products.*','type_product.type_name')
        ->paginate(5);
        return view('admin.detailproduct',compact('products'));
    }

    public function createProduct(Request $product_request)
    {
        if($product_request->hasFile('fImage')){
            $file_name = $product_request->file('fImage')->getClientOriginalName();
            $product_request->file('fImage')->move('sources/images/products/',$file_name);
            $product->image= $file_name;
        }
        $product = new Product();
        $product->id                = $product_request->txtMa;
        $product->name              = $product_request->txtName;
        $product->id_type_product   = $product_request->type;
        $product->new_arrival       = $product_request->txtNewArrivals;
        $product->new               = $product_request->txtNew;
        $product->best_seller       = $product_request->txtBestSeller;
        $product->unit_price        = $product_request->txtGia;
        $product->description       = $product_request->txtMoTa;
        $product->specification     = $product_request->txtChiTietKiThuat;
        $product->save();
    }
    public function getDetailProduct($id)
    {
        $product = DB::table('products')
        ->join('type_product','id_type_product','=','id_type')
        ->select('products.*','type_product.type_name')
        ->find($id);
        return view('admin.editproduct',compact('product'));
    }
    public function editProduct(Request $product_request, $id )
    {
        $product = Product::find($id);
       
        $product->name              = $product_request->txtName;
        $product->unit_price        = $product_request->txtGia;
        $product->description       = $product_request->txtMoTa;
        $product->specification     = $product_request->txtChiTietKiThuat;
        $product->update();
        return redirect('admin/detailproduct');
    }
}
