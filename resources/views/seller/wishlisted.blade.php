@extends('layouts.common')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
                            @if (Session::has('warning'))
                        <div class="alert alert-warning">
                           {{ Session::get('warning') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
        <div class="col-md-10">
            <table class="table table-bordered table-hover table-sm table-responsive">
    <thead class="table-primary">
      <tr>
        <th>Date</th>
          <th>Image</th>
           <th>Product / Model</th>
          <th>Price</th>
          <th>Action</th>
          <th>Delete</th>
      </tr>
    </thead>
    <tbody>
	@foreach($products as $product)
    <?php
          $url = route('product.edit', ['id' => $product->id ]);
          if($product->status=="Y")
          {
              $status = "N";
          }
          else
          {
              $status="Y";
          }
        $url = route('product.details', ['slug' => $product->slug ]);
        $contact_url = route('enquiry', ['id' => $product->id ]);

        $seller = App\Models\User::where('id', $product->user_id)->first();
         $d =  App\Models\Wishlist::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
        ?>
        <tr>
            <?php 
                $adId=sprintf("%05d", $product->id);
            ?>
            <td>{{date('d-m-Y', strtotime($d->created_at))}}</td>
            <td><img src="{{$product->images[0]['ImageUrl']}}"></td>
             <td>{{$product->model_name}}</td>
             <?php
       $productUserId = $product['user_id'];
       $user = App\Models\User::find($productUserId);
       $userCountryId = $user ? $user->country_id : null;
       $country = App\Models\Countries::find($userCountryId);
       if ($country && $country->symbol) {
           $symbol = $country->symbol;
       } else {
           $symbol = '-';
       }
      ?>
            <td><span><?php echo $symbol; ?> {{$product->price}}</td>
            <td><a class="btn-link" href="{{$url}}">View</a></td>
            <td><a class="badge badge-danger" onclick="Delete('{{$product->id}}')" style="cursor:pointer" ><i class="fa fa-trash" style="font-size:20px;color:red"></i></a></td>
        </tr>
          @endforeach
    </tbody>
         </div>
</div>
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to Delete")) {
        $.ajax({
            type : 'get',
            url : '{{route('wishlist.Delete')}}',
            data : {'id':value},
            success:function(data){
                alert("Wishlist Deleted Successfully");
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>
