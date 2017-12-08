@extends('master')
@section('content')
<!--banner-->
<div id="wowslider-container1">
	<div class="ws_images"><ul>
    @foreach($slide as $sl)
		<li><img src="sources/images/slide/{{$sl->image}}" alt="" title="" id="wows1_0"/></li>
    @endforeach
	</ul></div>
	<div class="ws_bullets">
        <div>
             @foreach($slide as $sl)
            <a href="#" title=""><span><<img src="sources/images/slide/{{$sl->image}}" alt=""/>1</span></a>
            @endforeach
        </div>
    </div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
</div>	 
<!--banner-->
<!--content-->
<div class="content">
<!--banner-bottom-->
  
    </div>
<!--banner-bottom-->
<!--new-arrivals-->
     <div class="new-arrivals-w3agile">
        <div class="container">
            <h2 class="tittle">New Arrivals</h2>
            <div class="arrivals-grids">
             @foreach($products as $prds)
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">   
                        <div  class="grid-arrival">
                        <a href="{{route('single',$prds->id)}}">
                            <div class="grid-img">
                                <img  src="sources/images/products/{{$prds->image}}" class="img-responsive"  alt="" width="400px">
                            </div>  
                        </a>                                                     
                        </div>
                        <div class="women">
                            <h6> <a href="{{route('single',[$prds->id,$prds->id_type_product])}}">{{$prds->name}}</a></h6>
                            <p >{{number_format($prds->unit_price)}} VNĐ</p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--<div class="row">{{$products->links()}}</div>-->
    </div>
<!--new-arrivals-->
 <div class="accessories-w3l">
                <div class="container">
                    <h3 class="tittle">20% Discount on</h3>
                    <span style="color: red;">CBR S1000RR</span>
                    <div class="button">
                        <a href="#" class="button1"> Shop Now</a>
                        <a href="#" class="button1"> Quick View</a>
                    </div>
                </div>
            </div>
<!--Products-->
    <div class="product-agile">
        <div class="container">
            <h3 class="tittle1"> New Products</h3>
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>     
                            <div class="caption">
                                @foreach($new_products as $nprds)
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div  class="grid-arrival">
                                            <figure>        
                                                <a href="{{route('single',[$nprds->id,$nprds->id_type_product])}}">
                                                    <div class="grid-img">
                                                        <img  src="sources/images/products/{{$nprds->image}}" class="img-responsive" alt="">
                                                    </div>         
                                                </a>        
                                            </figure>   
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single">{{$nprds->name}}</a></h6>
                                            <p >{{number_format($nprds->unit_price)}}VNĐ</p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--Products-->

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
                                        <img  src="sources/images/products/{{$bprds->image}}" class="img-responsive" alt="">
                                    </div>        
                                </a>        
                            </figure>   
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single">{{$bprds->name}}</a></h6>
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
<script type="text/javascript" src="sources/engine1/wowslider.js"></script>
<script type="text/javascript" src="sources/engine1/script.js"></script>
<!--content-->
@endsection

      