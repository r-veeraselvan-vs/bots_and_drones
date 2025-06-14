@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header"  style="height: 80px;border:none">
                        <h3 class="card-text">Product Enquiry</h3>
                      
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
            <th>S.No</th>
            <th>Product Name</th>
            <th>Supplier Name</th>
            <th>Customer Name</th>
            <th> Mobile No</th>
             <th> Country</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($enquiries as $i=>$enquiry)
    
    <tr>
        <?php

        $supplier = \App\Supplier::where('id',$enquiry->suppliers_id)->first();
         $product = \App\Product::where('id',$enquiry->products_id)->first();
         $customer = \App\Customer::where('id',$enquiry->customer_id)->first();

        ?>
        <td>{{$i+1}}</td>
        <td><a onclick="openModal({{$enquiry->id}})" style="cursor:pointer;color:blue">{{$product->name}}</a></td>
        <td>{{$supplier->name}}</td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->mobile_no}}</td>
        <td>{{$customer->country}}</td>
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
         <table class="table table-bordered table-responsive">
    <?php
        ?>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Supplier Name</th>
            <th>Customer Name</th>
            <th> Email</th>
            <th> Mobile No</th>
             <th> City / Town</th>
             <th> Country</th>
              <th> Company Name</th>
            <th> Quantity</th>
            <th> Usage / Application</th>
        </tr>
    </thead>
    <tbody id="modal">

</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    function openModal(id)
    {
        console.log(id);
        var substateArray1 =  @json($enquiries);
        var filteredArray1 = substateArray1.filter(x => x.id == id);
        
        console.log(filteredArray1);
        
        var ProductArray1 =  @json($products);
        var filteredProductArray1 = ProductArray1.filter(x => x.id == filteredArray1[0]['products_id']);
         
        var SupplierArray1 =  @json($suppliers);
        var filteredSupplierArray1 = SupplierArray1.filter(x => x.id == filteredArray1[0]['suppliers_id']);
        
         var CustomerArray1 =  @json($customers);
        var filteredCustomerArray1 = CustomerArray1.filter(x => x.id == filteredArray1[0]['customer_id']);
         console.log(filteredCustomerArray1);
        $("table #modal").empty();
        markup = "<tr><td>"+filteredProductArray1[0]['name']+"</td><td>"+ filteredSupplierArray1[0]['name'] + "</td><td>"+ filteredCustomerArray1[0]['name'] +"</td><td>"+ filteredCustomerArray1[0]['email'] +"</td><td>"+ filteredCustomerArray1[0]['mobile_no'] +"</td><td>"+ filteredCustomerArray1[0]['location'] +"</td><td>"+ filteredCustomerArray1[0]['country'] +"</td><td>"+ filteredArray1[0]['company_name'] +"</td><td>"+ filteredArray1[0]['quantity'] +"</td><td>"+ filteredArray1[0]['usage_application'] +"</td></tr>";
                
            
                tableBody = $("table #modal");
                tableBody.append(markup);
                
        $('#myModal').modal('show');
    }
</script>
@endsection
