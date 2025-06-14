@extends('layouts.app')

@section('content')

@if($user->seller == "Y")

<div class="container" style="margin-top: 10px;">
    <div class="row justify-content-center">
        <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">
    </div>
 
  <div class="row mb-2">
                        <div class="col-md-2">
                             <a href="{{ session::get('backpage_product')}}" class="btn btn-green-light btn-cont-seller w-t-line"><i class="fa-solid fa-arrow-left"></i></a>
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
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="padding-top:10px;padding-bottom:20px;background-color:white">
                      <div class="card-body">
                        <h5 class="card-title"><b>Contact Seller</b> and Get Details Quickly</h5>
                       <form method="POST"  action="{{route('contact.add')}}"    style="margin-top:50px">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$id}}">
                        
                                <div class="form-group row">
                                    <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>
                                        <div class="col-md-6">
                                            <input id="company_name" type="text" class="form-control " name="company_name" value="{{$user->company_name}}" readonly>
                                        </div>
                                </div>
                            <br/>
                            <div id="verified_div">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>
                                        <div class="col-md-6">
                                             <input id="email" type="email" class="form-control" name="email" value="{{$user->company_email}}" required readonly>
                                        </div>
                                </div>
                            <br/>
                            <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-left">Mobile No</label>
                                        <div class="col-md-6">
                                             <input id="email" type="email" class="form-control" name="email" value="{{$user->company_phone}}" required readonly>
                                        </div>
                                </div>
                            <br/>
                            <div class="form-group row"><label for="" class="col-md-4 col-form-label text-md-left"></label><div class="col-md-6 text-center" id="recaptcha-container"></div></div></br>
                                <div class="form-group row">
                                    <label for="town_city" class="col-md-4 col-form-label text-md-left">Town / City&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="town_city" name="town_city" type="text" class="form-control "  value="{{$user->city}}"  @if($user->city!=null) readonly @endif>
                                        </div>
                                </div>
                                 <br/>
                               
                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-left">Country&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="country" type="text" class="form-control " name="country" value="{{$user->country}}" readonly required>    
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <?php 
                                        $adId=sprintf("%05d", $product->id);
                                    ?>
                                    <label for="product_id" class="col-md-4 col-form-label text-md-left">Product ID</label>
                                        <div class="col-md-6">
                                            <input id="product_id" type="text" class="form-control " name="product_id" value="{{$adId}}" required readonly>    
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="model" class="col-md-4 col-form-label text-md-left">Model</label>
                                        <div class="col-md-6">
                                            <input id="model" type="text" class="form-control" name="model" value="{{$product->model_name}}" required readonly>  
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-left">Price  £</label>
                                        <div class="col-md-6">
                                    @if($product->pricing_request=="N")
                                            <input id="price" type="text" class="form-control" name="price" value="{{$product->price}}" required readonly> 
                                    @else 
                                            <input id="price" type="text" class="form-control" name="price" value="Price on request" required readonly> 
                                    @endif
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="quantity" type="number" class="form-control " name="quantity" value="1"   min="1"  required>  
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="requirement" class="col-md-4 col-form-label text-md-left">Requirement&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <textarea id="requirement" class="form-control" name="requirement" rows="2" required></textarea> 
                                        </div>
                                </div>
                            <br/>
                            </div>
                              <div class="alert alert-danger  alert-dismissible fade show" id="error" style="display: none;margin-top:50px">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>   
                            <div class="form-group row mb-0" style="margin-top:30px">
                                <div class="col-md-8 offset-md-4">
                                     <button type="submit" id="buyer-submit-id" class="btn btn-green-light"  >
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
 
@else

<div class="container" style="margin-top: -60px;">
    <div class="row justify-content-center">
        <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">
    </div>
      <div class="alert alert-danger  alert-dismissible fade show" id="error" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
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
                        <form method="POST"  action="{{route('contact.add')}}"  id="buyer_form" onsubmit="return submitPhoneNumberAuthCode()"  style="margin-top:50px">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="name" class="form-control " name="name" value="{{$user->name}}" required readonly>
                                    </div>
                            </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <input id="company_name" type="text" class="form-control " name="company_name" value="{{$user->company_name}}">
                                                 </div>
                                                  <div class="col-md-1 mt-2">
                                                        
                                                        <div class="popup" onmouseover="myFunction()"><i class="fa fa-info-circle" aria-hidden="true"></i>
  <span class="popuptext" id="myPopup">Not a company ? Enter Individual</span>
</div> 

                                                    
                                                 </div>
                                            </div>
                                            
                                        </div>
                                </div>
                            <br/>
                           
                            <div id="verified_div">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required readonly>
                                        </div>
                                </div>
                            <br/>
                            
                                 <div class="form-group row">
                                    <label for="town_city" class="col-md-4 col-form-label text-md-left">Town / City&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="buyer_town_city" type="text" class="form-control " name="town_city" value="{{$user->city}}"  @if($user->city!=null) readonly @endif required>
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-left">Country&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="buyer_country" type="text" class="form-control " name="country" value="{{$user->country}}"   required>    
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <?php 
                                        $adId=sprintf("%05d", $product->id);
                                    ?>
                                    <label for="product_id" class="col-md-4 col-form-label text-md-left">Product ID</label>
                                        <div class="col-md-6">
                                            <input id="product_id" type="text" class="form-control " name="product_id" value="{{$adId}}" required readonly>    
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="model" class="col-md-4 col-form-label text-md-left">Model</label>
                                        <div class="col-md-6">
                                            <input id="model" type="text" class="form-control" name="model" value="{{$product->model_name}}" required readonly>  
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-left">Price  £</label>
                                        <div class="col-md-6">
                                    @if($product->pricing_request=="N")
                                            <input id="price" type="text" class="form-control" name="price" value="{{$product->price}}" required readonly> 
                                    @else 
                                            <input id="price" type="text" class="form-control" name="price" value="Price on request" required readonly> 
                                    @endif 
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="buyer_quantity" type="number" class="form-control " name="quantity"  value="1"   min="1"  required>  
                                        </div>
                                </div>
                            <br/>
                                <div class="form-group row">
                                    <label for="requirement" class="col-md-4 col-form-label text-md-left">Requirement&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <textarea id="buyer_requirement" class="form-control" name="requirement" rows="2" required></textarea> 
                                        </div>
                                </div>
                            <br/>
                            </div>
                              <div class="alert alert-danger  alert-dismissible fade show" id="error" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>   
  <div class="alert alert-danger  alert-dismissible fade show" id="bug" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
   <div class="alert alert-success  alert-dismissible fade show" id="successAuth" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>   
                                <div class="form-group row">

                                    <label for="email" class="col-md-4 col-form-label text-md-left">Mobile No&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6 mb-3">
                                            <input id="buyer_phone" type="buyer_phone" class="form-control" name="buyer_phone" value="{{$user->mobile_no}}" required>
                                        </div><br>
                                        
                                        <div class="col-md-4"></div>

                                        <div class="col-md-6 mb-3">
                                            <div class="col-md-5" id="recaptcha-container"></div>
                                        </div><br>

                                        <div class="col-md-4"></div>

                                        <div class="col-md-6 mb-3">
                                            <button type="button" id="buyer-submit-id" class="btn btn-green-light" onclick="sendOTP()">
                                                {{ __('Send OTP') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <br/>
                            <div  id="verification_div" style="display:none">
                             <div class="form-group row">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-left">Verification Code&nbsp;<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="buyer_verification_code" type="text" class="form-control" name="buyer_verification_code"  required>
                                        </div>
                                         
                                </div>
                             </div>
                            <div class="form-group row mb-0" style="margin-top:50px">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button"  class="btn btn-green-light"  onclick="submitPhoneNumberAuthCode()">
                                        {{ __('Next') }}
                                    </button>
                                </div>
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

@endif


@endsection