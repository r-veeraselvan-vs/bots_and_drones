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
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="padding-top:10px;padding-bottom:20px;background-color:white">
                      <div class="card-body">
                        <h5 class="card-title"><b>Contact Seller</b> and Get Details Quickly</h5>
                        <form method="POST" action="{{route('enquiry.add')}}" style="margin-top:50px">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="name" class="form-control " name="name" value="{{$user->name}}" required disabled>
                                    </div>
                            </div>
                            <br/>
                            <div class="form-group row">
                                <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>
                                    <div class="col-md-6">
                                        <input id="mobile_no"  type="text" class="form-control" name="mobile_no" maxlength="15" value="{{$user->mobile_no}}" disabled>                    
                                    </div>
                            </div>
                            <br/>
                            <div id="verified_div">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>
                                        <div class="col-md-6">
                                            @if($user->seller=="Y")
                                             <input id="email" type="email" class="form-control" name="email" value="{{$user->company_email}}" required disabled>
                                             @else
                                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required disabled>
                                            @endif
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="delivery_address" class="col-md-4 col-form-label text-md-left">Delivery address</label>
                                        <div class="col-md-6">
                                            <input id="delivery_address" type="text" class="form-control " name="delivery_address" value="" required>
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-left">Country</label>
                                        <div class="col-md-6">
                                            <input id="country" type="text" class="form-control " name="country" value="" required>    
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity</label>
                                        <div class="col-md-6">
                                            <input id="quantity" type="number" class="form-control " name="quantity"  min="1"  required>  
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>
                                        <div class="col-md-6">
                                            <input id="company_name" type="text" class="form-control " name="company_name"  >
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="usage" class="col-md-4 col-form-label text-md-left">Usage / Application</label>
                                        <div class="col-md-6">
                                            <input id="usage" type="text" class="form-control " name="usage"  required>  
                                        </div>
                                </div>
                            <br/>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-right">Are you Buying for Business Purpose?</label>
                                <div class="col-md-6">
                                    <label class="form-check-label">
                                        <input type="radio" name="register_as_seller" value="yes" onclick="showSellerDetails()"> Yes
                                    </label>
                                    <label class="form-check-label ml-3">
                                        <input type="radio" name="register_as_seller" value="no" checked onclick="hideSellerDetails()"> No
                                    </label>
                                </div>
                            </div>
                            <div id="seller-details" style="display: none;">
                                <div class="row mb-3">
                                    <label for="tax_register_no" class="col-md-4 col-form-label text-md-right">Tax Registration Number</label>
                                    <div class="col-md-6">
                                        <input id="tax_register_no" type="text" class="form-control" name="tax_register_no">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0" style="margin-top:50px">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-green-light" onclick="sendOTP()">
                                        {{ __('Next') }}
                                    </button>
                                </div>
                            </div>
                            <br>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>           
        </div>
    </div>
</div>

<script>
    function showSellerDetails() {
        document.getElementById("seller-details").style.display = "block";
    }

    function hideSellerDetails() {
        document.getElementById("seller-details").style.display = "none";
    }
</script>
 
@endsection