@extends('master')
@section('content')
<div class="content">
    <div class="products-agileinfo">
            <h2 class="tittle">{{$product_name->type_name}}</h2>
        <div class="container">
            <div class="product-agileinfo-grids w3l">
                <div class="col-md-3 product-agileinfo-grid">
                    <div class="categories">
                        <h3>Categories</h3>
                        <ul class="tree-list-pad">
                            <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>New Arrivals</label>
                                <ul>                                   
                                @foreach($arrivals_products as $aprd)
                                    <li><a href="{{route('single',$aprd->id)}}">{{$aprd->name}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">New</label>
                                <ul>                                                                  
                                @foreach($new_products as $new)
                                    <li><a href="{{route('single',$new->id)}}">{{$new->name}}</a></li>
                                @endforeach                           
                                </ul>
                            </li>
                            <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Seller</label>
                                <ul>                                                                         
                                @foreach($bestsale_products as $best)
                                    <li><a href="{{route('single',$best->id)}}">{{$best->name}}</a></li>
                                @endforeach  
                                </ul>
                            </li>
                        </ul>
                    </div>
          
                    <div class="brand-w3l">
                        <h3>Brands Filter</h3>
                        <ul>
                            <li><a href="#">Ralph Lauren</a></li>
                            <li><a href="#">adidas</a></li>
                            <li><a href="#">Bottega Veneta</a></li>
                            <li><a href="#">Valentino</a></li>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Burberry</a></li>
                            <li><a href="#">Michael Kors</a></li>
                            <li><a href="#">Louis Vuitton</a></li>
                            <li><a href="#">Jimmy Choo</a></li>
                        </ul>
                    </div>
                    <div class="cat-img">
                        <img class="img-responsive " src="images/45.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-9 product-agileinfon-grid1 w3l">
                    <div class="product-agileinfon-top">
                        <div class="col-md-6 product-agileinfon-top-left">
                            <img class="img-responsive " src="images/img1.jpg" alt="">
                        </div>
                        <div class="col-md-6 product-agileinfon-top-left">
                            <img class="img-responsive " src="images/img2.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mens-toolbar">
                        <p >Showing 1–9 of 21 results</p>
                            <p class="showing">Sorting By
                            <select>
                                    <option value=""> Name</option>
                                    <option value="">  Rate</option>
                                    <option value=""> Color </option>
                                    <option value=""> Price </option>
                            </select>
                            </p> 
                            <p>Show
                            <select>
                                    <option value=""> 9</option>
                                    <option value="">  10</option>
                                    <option value=""> 11 </option>
                                    <option value=""> 12 </option>
                            </select>
                            </p>
                        <div class="clearfix"></div>		
                    </div>
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                            <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{URL::asset('sources/images/icon/menu1.png')}}"></a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="{{URL::asset('sources/images/icon/menu.png')}}"></a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="product-tab">
                                @foreach($products as $product)
                                    <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                    
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>		
                                                    <a href="{{route('single',$product->id)}}" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                        <div class="grid-img">
                                                            <img  src="../sources/images/products/{{$product->image}}" class="img-responsive" alt="">
                                                        </div>		
                                                    </a>		
                                                </figure>	
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="{{route('single',$product->id)}}">{{$product->name}}</a></h6>
                                                <p ><em class="item_price">{{number_format($product->unit_price)}} VNĐ</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                   
                                    </div>
                                      @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="product-tab1">
                                @foreach($products as $product)
                                <div class="row" id="row-detail">
                                    <div class="col-md-4 product-tab1-grid">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>		
                                                    <a href="{{route('single',$product->id)}}" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                        <div class="grid-img">
                                                            <img  src="../sources/images/products/{{$product->image}}" class="img-responsive"  alt="">
                                                        </div>			
                                                    </a>		
                                                </figure>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                    <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                        <div class="women">
                                            <h6><a href="{{route('single',$product->id)}}">{{$product->name}}</a></h6>
                                            <p>{{$product->description}}</p>
                                            <p ><em class="item_price">{{number_format($product->unit_price)}} VNĐ</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div> 
                                </div>
                                @endforeach   
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
@endsection