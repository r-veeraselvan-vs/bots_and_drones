@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                     <div class="card-header"  style="height: 80px;border:none">
                        <h3 class="card-text">Service Enquiry</h3>
                      
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
            <th>Contact Person</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Country</th>
            <th>Service Name</th>
            <th> Service Provider</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($enquiries as $i=>$enquiry)
    <tr>
        <?php

         $service = \App\Service::where('id',$enquiry->service_id)->first();
         $provider = \App\ServiceProvider::where('id',$enquiry->provider_id)->first();

        ?>
        <td>{{$i+1}}</td>
        <td><a onclick="openModal({{$enquiry->id}})" style="cursor:pointer;color:blue">{{$enquiry->contact_person_name}}</a></td>
        <td>{{$enquiry->email}}</td>
        <td>{{$enquiry->mobile_no}}</td>
        <td>{{$enquiry->country}}</td>
        <td>{{$service->name}}</td>
        <td>{{$provider->name}}</td>
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
            </div>
        </div>
    </div>
</div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
             <th>Contact Person Name</th>
               <th>Company Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>City</th>
            <th>Country</th>
            <th>Service Name</th>
            <th> Service Provider Name</th>
            <th>Expected date</th>
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
        
        var ProductArray1 =  @json($services);
        var filteredProductArray1 = ProductArray1.filter(x => x.id == filteredArray1[0]['service_id']);
         
        var SupplierArray1 =  @json($providers);
        var filteredSupplierArray1 = SupplierArray1.filter(x => x.id == filteredArray1[0]['provider_id']);
        
        
        $("table #modal").empty();
        markup = "<tr><td>"+filteredArray1[0]['contact_person_name']+"</td><td>"+ filteredArray1[0]['company_name'] + "</td>><td>"+ filteredArray1[0]['email'] +"</td><td>"+ filteredArray1[0]['mobile_no'] +"</td><td>"+ filteredArray1[0]['city'] +"</td><td>"+ filteredArray1[0]['country'] +"</td><td>"+ filteredProductArray1[0]['name'] +"</td><td>"+ filteredSupplierArray1[0]['name'] +"</td><td>"+ filteredArray1[0]['expected_date'] +"</td></tr>";
                
            
                tableBody = $("table #modal");
                tableBody.append(markup);
                
        $('#myModal').modal('show');
    }
</script>
@endsection