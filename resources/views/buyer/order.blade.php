@extends('layouts.app')

@section('content')
            
<div class="container" style="margin-top: -60px;">
    <div class="row justify-content-center">

               <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">


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
                            <br>      
                            
        <form method="POST" id="form" action="{{route('order.add')}}" style="margin-top:50px">
            @csrf
            <input type="hidden" name="product_id" value="{{$id ?? ''}}">
            <input type="hidden" name="seller_id" value="{{$enquiry->seller_id}}">
            <input type="hidden" name="product_id" value="{{$enquiry->product_id}}">
            <input type="hidden" name="enquiry_id"  value="{{$enquiry->id}}">
                           <br>                             
                        
                                <div class="form-group row" id="verify_btn" style="margin-top: 50px;">
                                            <label for="otp_verify" class="col-md-4 col-form-label text-md-left">OTP Verification:</label>
                                            <div class="col-md-6">
                                                <input id="otp_verify" type="text" class="form-control" name="otp_verify" value="" placeholder="Enter the OTP" required>
                                        <br/>
                                            <button type="submit" class="btn btn-green-light" onclick="verifyOTP()">
                                                {{ __('Verify OTP') }}
                                            </button>
                                            </div>
                                        </div><br>
                           <br>
        <h5 class="card-title"><b>Buyer Details</b></h5>
                            <br>
                            <br>
<?php
    $user = App\Models\User::where('id',$enquiry->buyer_id)->first();
?>
<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>

                            <div class="col-md-6">
                                <p>{{$user->name}}</p>
                                <input id="name" type="name" class="form-control " name="name" value="{{$user->name}}"   style="display:none">

                                
                            </div>
                        </div>
                            <br>
                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>

                            <div class="col-md-6">
                                <p>{{$user->mobile_no}}</p>
                                <input id="mobile_no"  type="text" class="form-control" name="mobile_no" maxlength="15" value="{{$user->mobile_no}}" placeholder="Enter Country code & Mobile Number"   style="display:none">
                               
                               
                            </div>
                        
                        </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>

                                <div class="col-md-6">
                                     @if($user->seller!=null)
                                       <p>{{$user->company_email}}</p>
                                             <input id="email" type="email" class="form-control" name="email" value="{{$user->company_email}}"   style="display:none">
                                             @else
                                               <p>{{$user->email}}</p>
                                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}"   style="display:none">
                                            @endif
                              
 
                                   
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="delivery_address" class="col-md-4 col-form-label text-md-left">Delivery Address</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->delivery_address}}</p>
                                    <input id="delivery_address" type="text" class="form-control " name="delivery_address" value="{{$enquiry->delivery_address}}"   style="display:none">

                                    
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-left">Country</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->country}}</p>
                                    <input id="country" type="text" class="form-control " name="country" value="{{$enquiry->country}}"   style="display:none">

                                    
                                </div>
                            </div>
                            <br>
                             <div class="form-group row">
                                <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->quantity}}</p>
                                    <input id="quantity" type="number" class="form-control " name="quantity"  value="{{$enquiry->quantity}}"    style="display:none">

                                    
                                </div>
                            </div>
                            <br>
                             <div class="form-group row">
                                <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->company_name}}</p>
                                    <input id="company_name" type="text" class="form-control " name="company_name"  value="{{$enquiry->company_name}}"   style="display:none">
                                    
                                </div>
                            </div>
                            <br>
                             <div class="form-group row">
                                <label for="usage" class="col-md-4 col-form-label text-md-left">Usage / Application</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->usage}}</p>
                                    <input id="usage" type="text" class="form-control " name="usage"  value="{{$enquiry->usage}}"   style="display:none">

                                    
                                </div>
                            </div>
                            <br>   
                             <div class="form-group row">
                                <label for="tax_register_no" class="col-md-4 col-form-label text-md-left">Tax Registration Number</label>

                                <div class="col-md-6">
                                <p>{{$enquiry->tax_register_no}}</p>
                                    <input id="tax_register_no" type="text" class="form-control " name="tax_register_no"  value="{{$enquiry->tax_register_no}}"   style="display:none">

                                    
                                </div>
                            </div>

                        <br>
                  
                        <input type="hidden" class="form-control" name="suppliers_id"  value="">
                        <input type="hidden" class="form-control" name="products_id"  value="1">

                    </form>
      </div>
    </div>
  </div>
</div>
           
        </div>
    </div>
</div>


@endsection