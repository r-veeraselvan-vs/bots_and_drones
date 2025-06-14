@extends('layouts.common')

@section('content')
@if (auth()->user()->seller === 'Y')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-sm table-responsive">
    <thead class="table-primary">
      <tr>
        <th>Date</th>
           <th>Product ID</th>
          
        <th>Product / Model</th>
         <th>Buyer Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Price GBP</th>
         <th>Reminders</th>
         <th>Remark</th>
         <th>Delete</th>
       </tr>
    </thead>
    <tbody>
        @foreach($enquiries as $enquiry)
        <?php 
            $seller = App\Models\User::where('id',$enquiry->seller_id)->first();
            $product = App\Models\Products::where('id',$enquiry->product_id)->where('status','Y')->first();
            $buyer = App\Models\User::where('id',$enquiry->buyer_id)->first();
        ?>
         @if($product!=null)
      <tr>
          
          <?php 
                                        $adId=sprintf("%05d", $product->id);
                                    ?>
                                    <td>{{$enquiry->updated_at->format('d-m-Y')}}</td>
                                    <td class="dark">{{$adId}}</td>
          
        <td>{{$product->model_name}}</td>
         <td>{{$buyer->name}}</td>
        <td>{{$buyer->email}}</td>
        <td>{{$buyer->mobile_no}}</td>
        <td>
            @if($product->pricing_request == "N")
                <p class="price m-0">£{{$product->price}}</p>
            @else
                On Request
                <!-- @if($enquiry->price_request == '0')
                    <p class="price">On Request</p>
                @elseif($enquiry->price_request == '1')
                    <form method="POST" action="{{ route('handle.accept', ['contact' => $enquiry->id]) }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Accept') }}
                        </button>
                    </form>
                @else
                    <p class="price" style="color: green;">Accepted</p>
                @endif -->
            @endif
        </td>
          <td>
            @if($enquiry->remainders == 0)
                
            @else
                {{$enquiry->remainders}}
            @endif
        </td>
        
        <td>
            @if (!empty($enquiry->remark))
                <p id="buyerRemark{{ $enquiry->id }}">{{ $enquiry->remark }}</p>
            @else
                <p id="buyerRemark{{ $enquiry->id }}" style="display: none;"></p>
            @endif

            &nbsp;
            <a class="badge badge-danger" onclick="openEditRemarkPopup('{{ $enquiry->id }}')" style="cursor:pointer">
                <i class="fa fa-edit" style="font-size:20px;color:blue;"></i>
            </a>

            <div id="editRemarkPopup{{ $enquiry->id }}" style="display: none;">
                <form action="{{ route('enquiry.addRemark', ['id' => $enquiry->id]) }}" method="POST">
                    @csrf
                    <input id="editedRemarkInput{{ $enquiry->id }}" class="form-control" name="remark" value="{{ $enquiry->remark }}">
                    <br/>
                    <button type="submit" class="btn btn-info">Save</button>
                </form>
            </div>
        </td>
        <td><a class="badge badge-danger" onclick="Delete('{{$enquiry->id}}')"   style="cursor:pointer" ><i class="fa fa-trash" style="font-size:20px;color:red"></i></a></td>
      </tr>
      @endif
      @endforeach
      
    </tbody>
  </table>
 
        </div>
    </div>
</div>
@else


<br/>
<div class="container text-center">
    <h4>Buyer Enquiries available to Registered Sellers Only</h4>
    <br/>
                            <a href="{{route('profile.edit', ['id' => $user->id])}}" class="btn btn-info">Register as Seller</a>
</div>

@endif
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to delete this enquiry")) {
        $.ajax({
            type : 'get',
            url : '{{route('buyer.delete')}}',
            data : {'id':value},
            success:function(data){
                alert("Enquiry Deleted Successfully");
              window.location.reload();
          } 
      });

    } else {
     
    }
}

    function openEditRemarkPopup(enquiryId) {
        // Show the edit remark popup for the specific enquiryId
        var editRemarkPopup = document.getElementById('editRemarkPopup' + enquiryId);
        if (editRemarkPopup) {
            editRemarkPopup.style.display = 'block';
        }

        // Set the current remark value in the input field
        var editedRemarkInput = document.getElementById('editedRemarkInput' + enquiryId);
        var buyerRemark = document.getElementById('buyerRemark' + enquiryId);
        if (editedRemarkInput && buyerRemark) {
            editedRemarkInput.value = buyerRemark.textContent.trim();
        }
    }

</script>
