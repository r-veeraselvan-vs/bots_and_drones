@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header"  style="height: 80px;border:none">
                         <table class="table table-borderless ">
                           <tr>
                               <td><h3 class="card-text">Suppliers</h3></td>
                               <td>  <div style="float: right;">
                            <a  class="btn btn-primary " href="{{route('supplier.add')}}" style="padding: 6px 20px 6px 20px;"><i class="fa fa-plus" aria-hidden="true" ></i> Add</a>
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

                    <table class="table table-bordered ">
    <?php
        $i=1;
        ?>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th>No of products</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($suppliers as $i=>$supplier)
    <?php 
        $productCount = \App\Product::where('supplier_id',$supplier->id)->count();
    ?>
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$supplier->name}}</td>
         <td>{{$supplier->email}}</td>
        <td>{{$supplier->mobile_no}}</td>
        <td>{{$supplier->address}}</td>
         <td><p  class="badge badge-success">{{$productCount}}</p></td>
          <td><a class="badge badge-primary" href="{{url('/suppliers/edit')}}/{{$supplier->id}}"><i class="bi bi-pencil-square" style="font-size:20px;color:white"></i></a>
          </td>
          @if($productCount<=0)
          <td><a class="badge badge-info" onclick="Delete({{$supplier->id}})" style="cursor:pointer"><i class="bi bi-trash" style="font-size:20px;color:white"></i></a>&nbsp;</td>
          @else
          <td> - </td>
          @endif
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
                <div class="row" style="float:right">
                {{ $suppliers->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function Delete (value) {
        console.log(value);
      if (confirm("Are your sure you want to supplier")) {
        $.ajax({
            type : 'get',
            url : '{{route('supplier.delete')}}',
            data : {'id':value},
            success:function(data){
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>