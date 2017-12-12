@extends('master')
@section('content')		
    <div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Đăng kí</h3>
                    @if (count($errors) > 0 )
                        <div class="alert alert-danger">
                            <strong>Xảy ra lỗi!</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
					<form action="{!! route('register') !!}" method="post">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" >
                            <label>Tên: </label>
                            <div class="key">						
                                <input  type="text"  name="txtFullname"  >
                                <div class="clearfix"></div>
                            </div>
                            <label>Email đăng nhập: </label>
                            <div class="key">							
                                <input  type="text"  name="txtUsername"  >
                                <div class="clearfix"></div>
                            </div>
                            <label>Mật khẩu: </label>
                            <div class="key">						
                                <input  type="password"  name="txtPassword" >
                                <div class="clearfix"></div>
                            </div>
                            <label>Nhập lại Mật Khẩu: </label>
                            <div class="key">					
                                <input  type="password"  name="txtRe_password" >
                                <div class="clearfix"></div>
                            </div>
                            <label>Số Điện Thoại: </label>
                            <div class="key">					
                                <input  type="text"  name="txtPhone_number" >
                                <div class="clearfix"></div>
                            </div>
                            <label>Địa chỉ: </label>
                            <div class="key">					
                                <input  type="text"  name="txtAddress" >
                                <div class="clearfix"></div>
                            </div>
                            <input class="btnSubmit" type="submit" value="Đăng kí">
					</form>
				</div>				
			</div>
		</div>
				<!--login-->
	</div>
@endsection