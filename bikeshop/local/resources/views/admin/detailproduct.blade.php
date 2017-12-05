 @extends('masterAdmin')
 @section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <table id="table-detail" class="table table-bordered">
                <tr class="success">
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $pr)
                <tr>
                    <th>{{$pr->id}}</th>
                    <th>{{$pr->name}}</th>
                    <th>{{$pr->type_name}}</th>
                    <th>{{number_format($pr->unit_price)}} VNĐ</th>      
                    <th><img src="../sources/images/products/{{$pr->image}}" style="width:30%;"></img></th>
                </tr>
                @endforeach
             </table>
            
        </div>
        <div class="row">{{$products->links()}}</div>
    </section>
</section>

<!--<script>
    $(document).ready(function(){
        $("#table-detail").colResizable({liveDrag:true});
    }
</script>-->
@endsection