<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductType;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use Auth;
class AdminController extends Controller
{
    public function getAdmin()
    {
    	return view('admin.admin');
    }
    public function Addproduct()
    {
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

    public function createProduct(AddProductRequest $product_request)
    {
        $product = new Product();
        $product->id                = $product_request->txtMa;
        $product->name              = $product_request->txtName;
        $product->id_type_product   = $product_request->type;
        if($product_request->hasFile('fImage')){
            $file_name = $product_request->file('fImage')->getClientOriginalName();
            $product_request->file('fImage')->move('sources/images/products/',$file_name);
            $product->image= $file_name;
        }
        $product->new_arrival       = $product_request->txtNewArrivals;
        $product->new               = $product_request->txtNew;
        $product->best_seller       = $product_request->txtBestSeller;
        $product->unit_price        = $product_request->txtGia;
        $product->description       = $product_request->txtMoTa;
        $product->specification     = $product_request->txtChiTietKiThuat;
        $product->save();
        return redirect('admin/detailproduct');
    }
    public function getDetailProduct($id)
    {
        $product = DB::table('products')
        ->join('type_product','id_type_product','=','id_type')
        ->select('products.*','type_product.type_name')
        ->find($id);
        return view('admin.editproduct',compact('product'));
    }
    public function editProduct(EditProductRequest $product_request, $id )
    {
        switch($product_request->submitbutton)
        {
            case 'edit':
                $product = Product::find($id);
                $product->name              = $product_request->txtName;
                $product->unit_price        = $product_request->txtGia;
                $product->description       = $product_request->txtMoTa;
                $product->specification     = $product_request->txtChiTietKiThuat;
                $product->new_arrival       = $product_request->txtNewArrivals;
                $product->new               = $product_request->txtNew;
                $product->best_seller       = $product_request->txtBestSeller;
                $product->update();
                return redirect('admin/detailproduct');
            break;
            case 'delete':
                $product = Product::find($id);
                $product->delete();
                return redirect('admin/detailproduct');
            break;
        }
    }
    public function deleteProduct(Request $product_request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/detailproduct');
    }
    public function getAdminLogin()
    {
        return view('admin.user.login');
    }
    public function postAdminLogin(Request $admin_request)
    {
        $this->validate($admin_request,
        [
          'txtEmail'=>'required|email',
          'txtPassword'=>'required'  
        ],
        [
          'txtEmail.required'=>'Vui lòng nhập email',
          'txtPassword.required'=>'Vui lòng nhập password'
        ]
        );
        if(Auth::attempt(['email'=>$admin_request->txtEmail,'password'=>$admin_request->txtPassword,'admin'=>'1']))
        {
            return redirect()->route('admin')->with('success','Đăng nhập thành công');
        }
        else {
            return redirect()->route('adminlogin')->with('fail','Sai tài khoản hoặc mật khẩu');
        }
    }
    public function getAdminLogout()
    {
        Auth::logout();
        return redirect()->route('adminlogin');
    }

}
