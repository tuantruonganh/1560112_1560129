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
                <form method="post" action="{!! route('edit',$product->id) !!}"  enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <table>
                        </tr>
                            <th>Mã Sản Phẩm </th>
                            <th><input class="form-control" value="{{$product->id}}" name="txtMa" placeholder="Mã Sản Phẩm" readonly/></th>
                        </tr>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th><input class="form-control" value="{{$product->name}}" name="txtName" placeholder="Tên Sản Phẩm" /></th>
                        </tr>
                        <tr>
                            <th>Loại sản phẩm</th>
                            <th><input class="form-control" value="{{$product->type_name}}" name="txtLoai" placeholder="Loại" readonly/></th>
                        </tr>
                        <tr>
                            <th>Giá</th>
                            <th><input class="form-control" value="{{$product->unit_price}}" name="txtGia" placeholder="Giá" /></th>
                        </tr>
                        <tr>
                            <th>Mô tả</th>
                            <th><textarea class="form-control" rows="3" value="{{$product->description}}" name="txtChiTietKiThuat" style="width:537px;height:116px;" >{{$product->description}}</textarea></th>
                        </tr>
                        <tr>
                            <th>Chi Tiết Kĩ Thuật</th>
                            <th><textarea class="form-control" rows="3" value="{{$product->specification}}" name="txtMoTa" placeholder="Mô Tả" style="width:537px;height:268px;">{{$product->specification}}</textarea></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>
                                <input type="radio" id="txtNewArrivals" name="txtNewArrivals" value="1" onclick="radiobuttons('1')"> New Arrivals
                                <input type="radio" id="txtNew" name="txtNew" value="1" onclick="radiobuttons('2')"> New<br>
                                <input type="radio" id="txtBestSeller" name="txtBestSeller" value="1" onclick="radiobuttons('3')"> Best Seller
                                <input type="radio" id="none" name="none" value="0" style="margin-left: 13px;" onclick="radiobuttons('4')">None
                            </th>
                        </tr>
                        </table>
                            
                        <button type="submit" class="btn btn-default" value="edit" name="submitbutton" align-center>Edit</button>
                        <button type="submit" class="btn btn-default" value="delete" name="submitbutton" align-center>Delete</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>

@endsection