@extends('layouts.app')

@section('content')
            
<div class="container" style="margin-top: -60px;">
    <div class="row justify-content-center">

               <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">


  </div>
  <div class="row mb-2">
                        <div class="col-md-2">
                             <a href="{{ Session::get('backpage_product')}}" class="btn btn-green-light btn-cont-seller w-t-line"><i class="fa-solid fa-arrow-left"></i></a>
                        </div>
                         
                    </div>
    <div class="row ">
        <div class="col-md-12">
                                             <div class="card">

                    @if (Session::has('warning'))
                        <div class="alert alert-warning alert-dismissible fade show">
                           {{ Session::get('warning') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('success') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
  <div class="row no-gutters" style="background-color:#F5F5F5;">
    <div class="col-md-3" style="background-color:#F5F5F5;margin-top:10px">
      <img src="{{$product->image}}" class="card-img" style="padding:10px;border-radius:30px;background-color:#fff;">
      <div style="background-color:#F5F5F5;padding:10px;">
           <h3 class="card-title">{{$product->name}}</h3>
                    <p class="card-text"><small class="text-muted">Brand : </small>{{$product->brand}}</p>
                    <p class="card-text"><small class="text-muted">Model Name/Number : {{$product->model_name}}</small></p>
                    
      </div>
    </div>
    <div class="col-md-9" style="padding-top:10px;padding-bottom:20px;background-color:white">
      <div class="card-body">
                             
        <form method="POST" id="form" action="{{route('ordered.add')}}" style="margin-top:50px">
            @csrf
            <input type="hidden" name="product_id" value="{{$id ?? ''}}">
            <input type="hidden" name="seller_id" value="{{$contact->seller_id}}">
            <input type="hidden" name="product_id" value="{{$contact->product_id}}">
            <input type="hidden" name="contact_id"  value="{{$contact->id}}">
         <h5 class="card-title"><b>Buyer Details</b></h5>
                             <br>
<?php
    $user = App\Models\User::where('id',$contact->buyer_id)->first();
?>
 <?php 
                                $adId=sprintf("%05d", $product->id);
                          ?>
<div class="d-md-none">
    @if($user->name!=null)
    <div class="d-flex">
       <b>Name : </b>
        <p class="ml-5" style="margin-left: 10px;"> {{$user->name}}</p>
                        
   </div>
   @endif
    @if($user->company_name!=null)
   <div class="d-flex">
       <b>Company Name : </b>
        <p class="ml-5" style="margin-left: 10px;"> {{$user->company_name}}</p>
                        
   </div>
   @endif
    <div class="d-flex">
       <b>E-Mail : </b>
       @if($user->seller=="Y")
        <p class="ml-5" style="margin-left: 10px;"> {{$user->company_email}}</p>
         @else
             <p class="ml-5" style="margin-left: 10px;">{{$user->email}}</p>
         @endif                
   </div>
    <div class="d-flex">
       <b>Mobile No : </b>
       @if($user->seller=="Y")
        <p class="ml-5" style="margin-left: 10px;"> {{$user->company_phone}}</p>
         @else
             <p class="ml-5" style="margin-left: 10px;">{{$user->mobile_no}}</p>
         @endif                
   </div>
    <div class="d-flex">
       <b>Town / City : </b>
        <p class="ml-5" style="margin-left: 10px;"> {{$user->city}}</p>
                        
   </div>
    <div class="d-flex">
       <b>Country : </b>
        <?php
                            $country = App\Models\Countries::where('id', $user->country_id)->first();
                            ?>
                            @if ($country)
                                <p>{{ $country->name }}</p>
                            @else
                                <p>Country not found</p>
                            @endif
                        
   </div>
     <div class="d-flex">
       <b>Product ID : </b>
        <p class="ml-5" style="margin-left: 10px;"> {{$adId}}</p>
                        
   </div>
   <div class="d-flex">
       <b>Model : </b>
        <p class="ml-5" style="margin-left: 10px;">{{$product->model_name}}</p>
                        
   </div>
   <div class="d-flex">
       <b>Brand : </b>
        <p class="ml-5" style="margin-left: 10px;">{{$product->brand}}</p>
                        
   </div>
   <div class="d-flex">
      <?php
       $productUserId = $product['user_id'];
       $user = App\Models\User::find($productUserId);
       $userCountryId = $user ? $user->country_id : null;
       $country = App\Models\Countries::find($userCountryId);
       if ($country && $country->symbol) {
           $symbol = $country->currency_symbol . ' ' . $country->symbol;
       } else {
           $symbol = '-';
       }
      ?>
       <b>Price <span><?php echo $symbol; ?></span> :</b>
       @if($product->pricing_request=="N")
        <p class="ml-5" style="margin-left: 10px;">
           USD ${{$product->usd_price}}<br>
          @if(!empty($product->price))
          <span><?php echo $symbol; ?></span>
              {{$product->price}}
          @endif
        </p> 
        @else
            <p class="price">Price on request</p>
        @endif
                        
   </div>
     <div class="d-flex">
       <b>Quantity : </b>
        <p class="ml-5" style="margin-left: 10px;">{{$contact->quantity}}</p>
                        
   </div>
     <div class="d-flex">
       <b>Requirement : </b>
        <p class="ml-5" style="margin-left: 10px;">{{$contact->requirement}}</p>
                        
   </div>
      </div>
                     <div class="row d-sm-none d-md-flex">
                          @if($user->name!=null)
    <div class="col-md-6 flex-container">
                              <b>Name :</b>
                        <p>{{$user->name}}</p>
                         </div> 
   @endif
                         
                          @if($user->company_name!=null)
                          <div class="col-md-6 flex-container">
                            
                         <b>Company Name :</b>
                        <p>{{$user->company_name}}</p>
                       
                         </div> @endif
                       
                       
                     
                        <div class="col-md-6 flex-container">
                        <b>E-Mail :</b>
                         @if($user->seller=="Y")
                            <p>{{$user->company_email}}</p>
                        @else
                            <p>{{$user->email}}</p>
                        @endif
                        </div>
                        <div class="col-md-6 flex-container">
                        <b>Mobile No :</b>
                         @if($user->seller=="Y")
                            <p>{{$user->company_phone}}</p>
                        @else
                            <p>{{$user->mobile_no}}</p>
                        @endif
                        </div>
                        <div class="col-md-6 flex-container">
                          <b>Town / City :</b>
                        <p>{{$user->city}}</p>
                        </div>
                     
                         <div class="col-md-6 flex-container">
                         <b>Country :</b>
                         <?php
                            $country = App\Models\Countries::where('id', $user->country_id)->first();
                            ?>
                            @if ($country)
                                <p>{{ $country->name }}</p>
                            @else
                                <p>Country not found</p>
                            @endif
                          </div>
                       <div class="col-md-6 flex-container">
                        

                         <b>Product ID :</b>
                        <p>{{$adId}}</p>
                        </div>
                     
                        <div class="col-md-6 flex-container">
                         <b>Model :</b>
                        <p>{{$product->model_name}}</p>
                         </div>
                          <div class="col-md-6 flex-container">
                         <b>Brand :</b>
                        <p>{{$product->brand}}</p>
                         </div>
                          
                        <div class="col-md-6 flex-container">
                         <b>Price <span><?php echo $symbol; ?></span> :</b> 
                           @if($product->pricing_request=="N")
                            <p class="ml-5" style="margin-left: 10px;">
                               USD ${{$product->usd_price}}<br>
                              @if(!empty($product->price))
                              <span><?php echo $symbol; ?></span>
                                  {{$product->price}}
                              @endif
                            </p> 
                            @else
                                <p class="price">Price on request</p>
                            @endif
                        </div>
                        <div class="col-md-6 flex-container">
                         <b>Quantity :</b>
                        <p>{{$contact->quantity}}</p>
                         </div>
                         
                       
                    </div>
                   <div class="col-md-12 d-sm-none d-md-flex">
                         <b>Requirement : </b>
                        <p >{{$contact->requirement}}</p>
                        </div>
                  
                        <input type="hidden" class="form-control" name="suppliers_id"  value="">
                        <input type="hidden" class="form-control" name="products_id"  value="1">

                           <br>                             
                         <div class="row mb-3">
                            <label for="singin-conf-password" class="col-md-4 col-form-label text-md-right"> </label>
                                <div class="col-md-8">
                        <div class="tacbox">
  <input id="checkbox" type="checkbox"  onchange="document.getElementById('register').disabled = !this.checked;" />
  <label for="checkbox">I have read and accept the <a href="https://botsanddrones.asia/terms-%26-conditions" target="_blank">terms &
conditions</a> and <a href="https://botsanddrones.asia/privacy-policy" target="_blank">privacy policy.</a></label>
</div> </div></div>
                               
                                <div class="form-group row" id="verify_btn" style="margin-top: 30px;">
                                            <div for="otp_verify" class="col-md-4 col-form-label text-md-left"> </div>
                                            <div class="col-md-6">
                                         <br/>
                                            <button type="submit" class="btn btn-green-light"   id="register" disabled>
                                                {{ __('Send Enquiry') }}
                                            </button>
                                            </div>
                                        </div><br>

                    </form>
      </div>
    </div>
  </div>
</div>
           
        </div>
    </div>
</div>


@endsection