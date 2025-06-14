@extends('layouts.admin')

@section('content')
                 <div class="card" style="width:fit-content">
                    <div class="card-header"  style="height: 80px;border:none">
                        
                        <table class="table table-borderless ">
                           <tr>
                               <td><h3 class="card-text">Products</h3></td>
                               <td>  <div style="float: right;">
                            <a  class="btn btn-primary " href="{{route('product.add')}}" style="padding: 6px 20px 6px 20px;"><i class="fa fa-plus" aria-hidden="true" ></i> Add</a>
                            </div></td>
                           </tr>
                           </table>
                           
                    </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-2">
                       
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif

                    <table class="table table-bordered table-responsive">
    <?php
        $i=1;
        ?>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Supplier Name</th>
            <th>Image</th>
            <th>Brand Name</th>
            <th>Color</th>
            <th>Model Name</th>
            <th>Link</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($products as $i=>$product)
    <tr>
        <?php

        $supplier = \App\Supplier::where('id',$product->supplier_id)->first();
        
        $count = \App\Enquiry::where('products_id',$product->id)->count();

        ?>
        <td>{{$i+1}}</td>
        
        <td>{{$product->name}}</td>
        <td>{{$product->product_code}}</td>
        <td>{{$product->description}}</td>
        <td>{{$supplier->name}}</td>
        <td><a  class="btn btn-sm btn-warning" href="{{$product->image}}"role="button" onclick="copyToClipboard(this.id)">open</a></td>
        <td>{{$product->brand}}</td>
        <td>{{$product->color}}</td>
        <td>{{$product->model_name}}</td>
         <td>
          <a  class="btn btn-sm btn-success" id="{{$product->link}}"role="button" onclick="copyToClipboard(this.id)">Copy</a>

        </td>
          <td><a class="badge badge-primary" href="{{url('/products/edit')}}/{{$product->id}}"><i class="bi bi-pencil-square" style="font-size:20px;color:white"></i></a>
          </td>
          <td>
              @if($count<=0)
              <a class="badge badge-info" onclick="Delete({{$product->id}})" style="cursor:pointer"><i class="bi bi-trash" style="font-size:20px;color:white"></i></a>&nbsp;
              @else
              
                -
              @endif
              </td>
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
                  <div class="row" style="float:right">
                {{ $products->links() }}
            </div>
            </div>
        </div>
@endsection
<script>
   function copyToClipboard(text) {
    console.log(text);
    const elem = document.createElement('textarea');
   elem.value = text;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
   document.body.removeChild(elem);
   alert("Copied");
   
}
</script>
<script>
    function Delete (value) {
        console.log(value);
      if (confirm("Are your sure you want to product")) {
        $.ajax({
            type : 'get',
            url : '{{route('product.delete')}}',
            data : {'id':value},
            success:function(data){
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>