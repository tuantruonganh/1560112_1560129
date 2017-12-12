<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>BikeShop</title>
<!--css-->
<link href="{{URL::asset('sources/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('sources/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('sources/css/font-awesome.css')}}" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{URL::asset('sources/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('sources/js/imagezoom.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
    <script src="{{URL::asset('sources/js/main.js')}}"></script>
<!--search jQuery-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('sources/engine1/style.css')}}" />
<script type="text/javascript" src="{{URL::asset('sources/engine1/jquery.js')}}"></script>
<script src="{{URL::asset('sources/js/responsiveslides.min.js')}}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="{{URL::asset('sources/js/bootstrap-3.1.1.min.js')}}"></script>
 <!-- cart -->
<script src="{{URL::asset('sources/js/simpleCart.min.js')}}"></script>
<!-- cart -->
  <!--start-rate-->
<script src="{{URL::asset('sources/js/jstarbox.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('sources/css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
<!--//End-rate-->
</head>




<body>
    <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                     <div class="top-left">
                        <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
                    </div>
                    <div class="top-right">
                    <ul>
                        @if(Auth::check())
                            <li><a href="">Xin chào, {{Auth::user()->full_name}}!</a></li>
                            <li><a href="">{{Auth::user()->full_name}}</a></li>
                            <li><a href="{{route('userlogout')}}">Đăng xuất</a></li>
                        @else
                        <li><a href="{{route('login')}}"> Đăng nhập </a></li>
                        <li><a href="{{route('register')}}"> Đăng kí </a></li>
                        @endif
                    </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav">
                        <div class="logo-nav-left">
                            <h1><a href="{{route('homepage')}}">BIKE SHOP</a></h1>
                        </div>
                        <div class="logo-nav-left1">
                            <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{route('homepage')}}" class="act">Home</a></li>  
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hãng Sản Xuất<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                    @foreach($ds_the_loai as $the_loai)
                                                        <li><a href="{{route('products',$the_loai->id_type)}}">{{$the_loai->type_name}}</a></li>
                                                     @endforeach
                                                    </ul>
                                                </div>
                                              <!--  <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="products.html">Sunglasses</a></li>
                                                        <li><a href="products.html">Wallets,Bags</a></li>
                                                        <li><a href="products.html">Footwear</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                        <li><a href="products.html">Jewellery</a></li>
                                                    </ul>
                                                </div>-->
                                               
                                            </div>
                                        </ul>
                                    </li>
                                    <!--<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu1</h6>
                                                        <li><a href="products.html">Clothing</a></li>
                                                        <li><a href="products.html">Wallets</a></li>
                                                        <li><a href="products.html">Shoes</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html"> Underwear </a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="products.html">Sunglasses</a></li>
                                                        <li><a href="products.html">Wallets,Bags</a></li>
                                                        <li><a href="products.html">Footwear</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                        <li><a href="products.html">Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products1.html"><img src="sources/images/woo3.jpg" alt=" "/></a>
                                                </div> 
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products1.html"><img src="sources/images/woo4.jpg" alt=" "/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>-->
                                    <li><a href="codes.html">Giới Thiệu</a></li>
                                    <li><a href="mail.html">Liên Hệ</a></li>
                                </ul>

                            </div>
                            </nav>
                        </div>
                        <div class="logo-nav-right">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Search...">
                                </form>
                            </div>  
                        </div>
                        <div class="header-right2">
                            <div class="cart box_1">
                                <a href="{{route('checkout')}}">
                                    <h3> <div class="total">
                                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                        <img src="sources/images/bag.png" alt="" />
                                    </h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                                <div class="clearfix"> </div>
                            </div>  
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-->
        
            @yield('content')
       
        <!---footer-->
                    <div class="footer-w3l">
                        <div class="container">
                            <div class="footer-grids">
                                <div class="col-md-3 footer-grid">
                                    <h4>About </h4>
                                    <p>ĐỒ ÁN NHÓM WEB1.</p>
                                    <p>Trương Tiến Dũng-1560112.</p>
                                    <p>Nguyễn Thành Đạt-1560129.</p>
                                    <div class="social-icon">
                                        <a href="#"><i class="icon"></i></a>
                                        <a href="#"><i class="icon1"></i></a>
                                        <a href="#"><i class="icon2"></i></a>
                                        <a href="#"><i class="icon3"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3 footer-grid">
                                    <h4>My Account</h4>
                                    <ul>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="registered.html"> Create Account </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footer-grid">
                                    <h4>Information</h4>
                                    <ul>
                                        <li><a href="{{route('homepage')}}">Home</a></li>
                                        <li><a href="codes.html">Short Codes</a></li>
                                        <li><a href="mail.html">Mail Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footer-grid foot">
                                    <h4>Contacts</h4>
                                    <ul>
                                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">ĐH KHTN Nguyễn Văn Cừ</a></li>
                                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
                                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> dungtruongtien41197@mail.com</a></li>
                                        
                                    </ul>
                                </div>
                            <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>
 

</body>
</html>