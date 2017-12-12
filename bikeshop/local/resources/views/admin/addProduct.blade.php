@extends('masterAdmin')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-offset-2 col-md-5">
                @if (count($errors) > 0 )
                    <div class="alert alert-danger">
                        <strong>Xảy ra lỗi!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2">
                <form method="post" action="{!! route('add') !!}"  enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <table>
                    <tr>
                        <th>Mã Sản Phẩm</th>
                        <th><input class="form-control" name="txtMa" placeholder="Mã Sản Phẩm" /></th>
                    </tr>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th><input class="form-control" name="txtName" placeholder="Tên Sản Phẩm" /></th>
                    </tr>
                    <tr>
                        <th>Loại sản phẩm</th>
                        <th>  
                            <select name="type">
                            @foreach($product_type as $product_type)
                                <option name="type" value="{{$product_type->id_type}}" >{{$product_type->type_name}}</option>
                            @endforeach
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Giá</th>
                        <th><input class="form-control" name="txtGia" placeholder="Giá" /></th>
                    </tr>
                    <tr>
                        <th>Chi Tiết Kĩ Thuật</th>
                        <th><textarea class="form-control" rows="3" name="txtChiTietKiThuat" placeholder="Chi Tiết Kĩ Thuật"></textarea></th>
                    </tr>
                    <tr>
                        <th>Mô Tả Ngắn Gọn</th>
                        <th><textarea class="form-control" rows="3" name="txtMoTa" placeholder="Mô Tả"></textarea></th>
                    </tr>
                    <tr>
                        <th>Hình Ảnh</th>
                        <th><input type="file" name="fImage"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <input type="radio" id="txtNewArrivals" name="txtNewArrivals" value="1" onclick="radiobuttons('1')"> New Arrivals
                            <input type="radio" id="txtNew" name="txtNew" value="1" onclick="radiobuttons('2')"> New<br>
                            <input type="radio" id="txtBestSeller" name="txtBestSeller" value="1" onclick="radiobuttons('3')"> Best Seller
                            <input type="radio" id="none" name="none" value="0" style="margin-left: 13px;" onclick="radiobuttons('4')"> None
                        </th>
                    </tr>
                 </table>
                            
                        <button type="submit" class="btn btn-default" align-center>Thêm</button>
                        <button type="reset" class="btn btn-default">Làm Mới</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>

@endsection