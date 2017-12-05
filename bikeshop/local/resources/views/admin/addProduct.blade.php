@extends('masterAdmin')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-offset-2">
                <form method="post" action="{!! route('them') !!}"  enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <table>
                        </tr>
                            <th>Mã Sản Phẩm</th>
                            <th><input class="form-control" name="txtMa" placeholder="Mã Sản Phẩm" /></th>
                        </tr>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th><input class="form-control" name="txtName" placeholder="Tên Sản Phẩm" /></th>
                        </tr>
                        <tr>
                            <th>Loại sản phẩm</th>
                            <th><input class="form-control" name="txtLoai" placeholder="Loại" /></th>
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
                            <th>Best seller</th>
                            <th><input class="form-control" name="txtBestSeller" placeholder="1:Yes, 0:No" /></th>
                        </tr>
                        <tr>
                            <th>New Arrivals</th>
                            <th><input class="form-control" name="txtNewArrivals" placeholder="1:Yes, 0:No" /></th>
                        </tr>
                        <tr>
                            <th>New</th>
                            <th><input class="form-control" name="txtNew" placeholder="1:Yes, 0:No" /></th>
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