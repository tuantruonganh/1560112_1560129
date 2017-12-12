<!DOCTYPE html>
<head>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{URL::asset('sources/admin/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{URL::asset('sources/admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('sources/admin/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
	@if (count($errors) > 0 )
			<div class="alert alert-danger">
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
		<form action="{{route('adminlogin')}}" method="post">
		 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="email" class="ggg" name="txtEmail" placeholder="E-MAIL" >
			<input type="password" class="ggg" name="txtPassword" placeholder="PASSWORD">
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
		</form>
</div>
</div>
</body>
</html>