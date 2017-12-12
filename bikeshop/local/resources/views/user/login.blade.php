@extends('master')
@section('content')
<div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Đăng nhập</h3>
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
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <form action="{{route('login')}}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <label>Tên đăng nhập</label>
                    <div class="key">                 
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text"  name="txtEmail" >
                        <div class="clearfix"></div>
                    </div>
                    <label>Mật khẩu</label>
                    <div class="key">                     
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" name="txtPassword" >
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng nhập">
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password</a>
                <a href="registered.html" class="forg-right">Register</a>
            <div class="clearfix"></div>
            </div>
        </div>
	</div>
@endsection