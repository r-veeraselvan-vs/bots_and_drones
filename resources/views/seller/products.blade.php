@extends('layouts.common')

@section('content')

@if ($user->seller == 'Y')
<div class="container">
<div class="row justify-content-center">
     @if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('status') }}   <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

</div>

                        
                    @endif
	<table class="table table-borderless ">
                           <tr>
                               <td>  <div style="float: right;">
                            <a class="btn btn-primary" id="add-product-button" style="padding: 6px 20px 6px 20px;">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Product
                            </a>
                            </div></td>
                           </tr>
                           </table>
	@foreach($products as $product)
    <?php
          $url = route('product.edit', ['id' => $product->id ]);
          if($product->status=="Y")
          {
              $status = "N";
              $message  ="Are you sure you want to Delete this product?";
          }
          else
          {
              $status="Y";
              $message  ="Are you sure you want to Delete this product?";
          }
           $delete_url = route('product.delete', ['id' => $product->id,'status' => $status ]);
        ?>
        <div class="col-md-3">
            <div class="card">

            	@if(!empty($product->images) && isset($product->images[0]['ImageUrl']))
                    <img src="{{$product->images[0]['ImageUrl']}}" class="card-img-top" alt="..." style="aspect-ratio:1/1; height: 100%;">
                @endif

                <div class="card-body">
                	<a href="{{$url}}"><h5 class="card-title" style="
					    text-align: center;
					    font-size: 15px;">{{$product->title}}</h5></a>
    				<?php $state = App\Models\State::where('id',$product->state)->first(); ?>
                    @if($state!=null)
                        <p class="card-text" ><span style="color:red">£ {{$product->price}}</span><span style="text-align: right;float: right;color:black"><i class="fa fa-map-marker"></i> {{$product->location}}<br>{{$state->name}}</span></p>
                    @endif
                    <br>
    				<div style="display:flex;justify-content:space-between">
    				    <a href="{{$url}}" class="badge bg-primary" ><i class="fa fa-edit"></i></a> 
    				<a  onclick='return confirm("{{$message}}")'  href="{{$delete_url}}" class="badge bg-danger" ><i class="fa fa-trash"></i> </a>
    				</div>
    					<div style="display:flex;justify-content:center">
    				    @if($product->status=="Y") <span  class="badge bg-primary" >Active</span> 
    				    @else
    				      <span  class="badge bg-danger" >Inactive</span> 
    				    @endif
    				</div>
    				
                </div>
             </div>
          </div>
          @endforeach
         </div>
</div>
<script>
// Add an event listener to the button
document.getElementById('add-product-button').addEventListener('click', function(event) {
    // Prevent the default behavior of the anchor
    event.preventDefault();

    // Your existing JavaScript code here
    var subscriptionStatus = "{{ $subscriptionStatus }}";
    var subscription_product = <?php echo $subscription_product; ?>;
    var userProductsCount = <?php echo $userProductsCount; ?>;

    console.log("Subscription Status:", subscriptionStatus);
    console.log("User Products Count:", userProductsCount);
    console.log("Subscription Product:", subscription_product);

    if (userProductsCount >= subscription_product) {
        if (subscriptionStatus !== '0') { // Check if subscriptionStatus is not '0'
            if (subscriptionStatus === 'active') {
                if (userProductsCount >= subscription_product) {
                    alert("You have already used Premium package to add products in your account");
                    window.location.href = "{{ route('product.list') }}";
                } else {
                    console.log("Redirecting to post-ad page...");
                    window.location.href = "{{ route('post-ad') }}";
                }
            } else {
                // If the subscription status is inactive, display a message
                console.log("Subscription is inactive. Displaying alert message...");
                alert("Your subscription is inactive. Admin will communicate with you.");
                window.location.href = "{{ route('product.list') }}";
            }
        } else {
            console.log("Subscription status is '0'. Redirecting to Subscribe.index...");
            window.location.href = "{{ route('Subscribe.index') }}";
        }
    } else {
        // If the product count limit is not reached, proceed to the add product page
        console.log("Product count limit not reached. Redirecting to post-ad page...");
        window.location.href = "{{ route('post-ad') }}";
    }
});
</script>
@endif
@endsection