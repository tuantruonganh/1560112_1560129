<!--search jQuery-->
	<script src="sources/js/main.js"></script>
<!--search jQuery-->
<script type="text/javascript" src="sources/js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="sources/js/simpleCart.min.js"></script>
<!-- cart -->
  <script defer src="sources/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="sources/css/flexslider.css" type="text/css" media="screen" />
<script src="{{URL::asset('sources/js/imagezoom.js')}}"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

  <!--mycart-->
  <!--start-rate-->
<script src="sources/js/jstarbox.js"></script>
	<link rel="stylesheet" href="sources/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<link href="sources/css/owl.carousel.css" rel="stylesheet">
<script src="sources/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
@extends('master')
@section('content')
<!--content-->
	<div class="content">
		<!--single-->
		<div class="single-wl3">
			<div class="container">
				<div class="single-grids">
					<div class="col-md-9 single-grid">
						<div clas="single-top">
							<div class="single-left">
								<div class="flexslider">
									<ul class="slides">
										<li data-thumb="../sources/images/products/{{$sanpham->image}}">
											<div class="thumb-image"> <img src="../sources/images/products/{{$sanpham->image}}" data-imagezoom="true" class="img-responsive" width="150%"></div>
										</li>
									 </ul>
								</div>
							</div>
						</div>
							<div class="single-right simpleCart_shelfItem">
								<h4>{{$sanpham->name}}</h4>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<p class="price item_price">{{number_format($sanpham->unit_price)}}VNĐ</p>
								<div class="description">
									<p><span>Giới Thiệu: </span>{{$sanpham->description}} </p>
								</div>
								</br>
								<div class="women">
									<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!--Recent Products-->
						<div class="col-md-3 single-grid1">
							<h3>Recent Products</h3>
							@foreach($related_products as $rprds)
							<div class="recent-grids">
								<div class="recent-left">
									<a href="{{route('single',$rprds->id)}}"><img class="img-responsive " src="../sources/images/products/{{$rprds->image}}" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">{{$rprds->name}}</a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1">{{number_format($rprds->unit_price)}}VNĐ</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							@endforeach
						<!--Recent Products-->
					</div>

					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
				<!--Product Description-->
					<div class="product-w3agile">
						<h3 class="tittle1">Thông Số Kĩ Thuật</h3>
						<div class="product-grids">
							<div class="col-md-offset-3 col-md-8 product-grid1">
								<div class="tab-wl3">
									<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
										<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
											<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
											<li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

										</ul>
										<div id="myTabContent" class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
												<div class="descr">
													<pre>{{$sanpham->specification}}</pre>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
												<div class="descr">
													<div class="reviews-top">
														<div class="reviews-left">
															<img src="images/men3.jpg" alt=" " class="img-responsive">
														</div>
														<div class="reviews-right">
															<ul>
																<li><a href="#">Admin</a></li>
																<li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
															</ul>
															<p></p>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="reviews-bottom">
														<h4>Add Reviews</h4>
														<p>Your email address will not be published. Required fields are marked *</p>
														<p>Your Rating</p>
														<div class="block">
															<div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
														</div>
														<form action="#" method="post">
															<label>Your Review </label>
															<textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
															<div class="row">
																<div class="col-md-6 row-grid">
																	<label>Name</label>
																	<input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
																</div>
																<div class="col-md-6 row-grid">
																	<label>Email</label>
																	<input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
																</div>
																<div class="clearfix"></div>
															</div>
															<input type="submit" value="SEND">
														</form>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				<!--Product Description-->
			</div>
		</div>
		<!--single-->
		<div class="new-arrivals-w3agile">
				<div class="container">
					<h3 class="tittle1">Best Sellers</h3>
					<div class="arrivals-grids">
						<?php
							foreach($bestsale_products as $bprds)
							{
						?>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div  class="grid-arrival">
									<figure>		
										<a href="{{route('single',$bprds->id)}}">
											<div class="grid-img">
												<img  src="../sources/images/products/{{$bprds->image}}" class="img-responsive" alt="">
											</div>		
										</a>		
									</figure>	
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html"></a>{{$bprds->name}}</h6>
									<p >{{number_format($bprds->unit_price)}}VNĐ</p>
									<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		<!--new-arrivals-->
	</div>
	<!--content-->
@stop