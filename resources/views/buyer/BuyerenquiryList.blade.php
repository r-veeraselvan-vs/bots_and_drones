@extends('layouts.common')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                            @if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

            <table class="table table-bordered table-hover table-sm table-responsive">
    <thead class="table-primary">
      <tr>
        <th>Date</th>
          <th>Product ID</th>
          
        <th>Product / Model</th>
        <th>Price</th>
        <th>City</th>
        <!-- <th>Finance / Finance Required</th> -->
        <th>Seller Name</th>
         <th>Email</th>
         <th>Reminders</th>
         <!-- <th>Action</th> -->
          <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($buyer_enquiries as $enquiry)
        <?php 
            $seller = App\Models\User::where('id',$enquiry->seller_id)->first();
            $product = App\Models\Products::where('id',$enquiry->product_id)->where('status','Y')->first();
            $buyer = App\Models\User::where('id',$enquiry->buyer_id)->first();
        ?>
        @if($product!=null)
      <tr>
          
           <?php 
                                        $adId=sprintf("%05d", $product->id);
                                    ?><td>{{$enquiry->updated_at->format('d-m-Y')}}</td>
                                    <td class="dark">{{$adId}}</td>
          
         <td>{{$product->model_name}}</td>
         <td>
            @if($product->pricing_request == "N")
                <p class="price m-0">₹{{$product->price}}</p>
            @else
                <p class="price">On Request</p>
                <!-- @if($enquiry->price_request == '0')
                    <form method="POST" action="{{ route('handle.request', ['contact' => $enquiry->id]) }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Request') }}
                        </button>
                    </form>
                @elseif($enquiry->price_request == '1')
                    <p class="price" style="color: green;">Requested</p>
                @else
                    <p class="price m-0">₹{{$product->price}}</p>
                @endif -->
            @endif
        </td>
        <td>
            @if($product != null)
                {{ $product->location }}
            @endif
        </td>
        <!-- <td>
            @if($product->finance=="Lease")
                Available 
            @else 
                Not Available
            @endif
            /
            @if($enquiry->finance_required == "yes")
                Yes
            @elseif($enquiry->finance_required == "no")
                No
            @else
                -
            @endif
        </td> -->
        <td>{{$seller->company_name}}</td>
          <td>{{$seller->company_email}}</td>
          <td>
            @if($enquiry->remainders == 0)
                
            @else
                {{$enquiry->remainders}}
            @endif
        </td>
          <!-- <td>
              <a class="badge badge-danger" onclick="SendRemainder('{{$enquiry->id}}')" style="cursor:pointer" ><i class="fa fa-paper-plane" style="font-size:20px; color:green;" title="Send Remainder"></i></a>
          </td> -->
         <td><a class="badge badge-danger" onclick="Delete('{{$enquiry->id}}')" style="cursor:pointer" ><i class="fa fa-trash" style="font-size:20px;color:red" title="Delete"></i></a></td>
       
      </tr> @endif
      @endforeach
      
    </tbody>
  </table>
        </div>
    </div>
</div>
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to delete this enquiry")) {
        $.ajax({
            type : 'get',
            url : '{{route('seller.delete')}}',
            data : {'id':value},
            success:function(data){
                alert("Enquiry Deleted Successfully");
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>
<script>
    function SendRemainder (value) {
      if (confirm("Are your sure you want to send reminder to seller!")) {
        $.ajax({
            type : 'get',
            url : '{{route('remainder')}}',
            data : {'id':value},
            success:function(data){
                alert("Reminder Sent Successfully");
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>