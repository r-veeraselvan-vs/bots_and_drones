@extends('layouts.app')

@section('content')
            
<div class="container" style="margin-top: -60px;">
    <div class="row justify-content-center">

               <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">


  </div>

    <div class="row ">
        <div class="col-md-12">
                                             <div class="card">
  <div class="row no-gutters" style="background-color:#F5F5F5;">
    <div class="col-md-3" style="background-color:#F5F5F5;margin-top:10px">
      <img src="{{$product->image}}" class="card-img" style="padding:10px;border-radius:30px;background-color:#fff;">
      <div style="background-color:#F5F5F5;padding:10px;">
           <h3 class="card-title">{{$product->name}}</h3>
                    <p class="card-text"><small class="text-muted">Brand : </small>{{$product->brand}}</p>
                    <p class="card-text"><small class="text-muted">Color : </small>{{$product->color}}</p>
                    <p class="card-text"><small class="text-muted">Model Name/Number : {{$product->model_name}}</small></p>
                    
      </div>
    </div>
    <div class="col-md-9" style="padding-top:10px;padding-bottom:20px;background-color:white">
      <div class="card-body">
        <h5 class="card-title"><b>Contact Seller</b> and Get Details Quickly</h5>
        <!-- <form method="POST" action="{{route('enquiry.add')}}" style="margin-top:50px"> -->
            @csrf
            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control " name="name" value="" required>

                                
                            </div>
                        </div>
                        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                        <div class="alert alert-danger" id="error" style="display: none;"></div>
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile_no"  type="text" class="form-control" name="mobile_no" maxlength="15" value="" placeholder="Enter Country code & Mobile Number" required>
                               
                               
                            </div>
                        
                        </div>
                        <div class="form-group row">
                             <div class="col-md-4 col-form-label text-md-left"></div>
                              <div class="col-md-8 col-form-label text-md-left">
                                  
                                   <small id="passwordHelpBlock" class="form-text text-muted">E.g.+91 1234567890</small>
                              </div>
                            
                            </div>
                         <div class="form-group row" style="display:none">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                             <button type="button" class="btn btn-info" onclick="sendOTP();" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:500">Send OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                         <div class="form-group row" id="verification_div" style="display:none">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Enter Verification Code</label>

                            <div class="col-md-5">
                                <input id="verification_code"  type="text" class="form-control" name="verification_code" maxlength="10" value="" required>

                               
                            </div>
                            <div class="col-md-3">
                               
                            </div>
                        </div>
                          <div class="form-group row" style="display:none">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                              <button type="button" class="btn btn-info  " onclick="verify();" id="verify_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:500" disabled>Verify OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                        <div id="verified_div">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                               
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-left">City/ Town</label>

                            <div class="col-md-6">
                                <input id="Country" type="text" class="form-control " name="country"required>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-left">Country</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control " name="location" required>

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control " name="quantity"   required>

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control " name="company_name"  >

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="usage" class="col-md-4 col-form-label text-md-left">Usage / Application</label>

                            <div class="col-md-6">
                                <input id="usage" type="text" class="form-control " name="usage_application"  required>

                                
                            </div>
                        </div>
                        </div>
                        <div class="tacbox  justify-content-center mt-5" id="checkbox_verify" style="display:none">

                          <input id="checkbox" type="checkbox"   onclick="agreed(this)" />
                          <label for="checkbox">  I accept terms and conditions of data  <a href="https://botsanddrones.in/"> privacy</a>.</label>
                        </div>

                       
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5" id="recaptcha-container"></div>
                        </div>
                        
                        <div class="form-group row mb-0" style="margin-top:50px">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info btn-lf" id="submit_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 160px;font-weight:900" onclick="this.disabled=true;this.form.submit();" >
                                    Submit
                                </button>

                                
                            </div>
                        </div>

                        <br>
                  
                        <input type="hidden" class="form-control" name="suppliers_id"  value="">
                        <input type="hidden" class="form-control" name="products_id"  value="1">

                    </form>
      
                    <form method="POST" action="{{route('enquiry.add')}}" style="margin-top:50px" id="enquiryForm">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>
        <div class="col-md-6">
            <input id="name" type="name" class="form-control " name="name" value="" required>
        </div>
    </div>

    <div class="alert alert-success" id="successAuth" style="display: none;"></div>
    <div class="alert alert-danger" id="error" style="display: none;"></div>
    <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>

    <div class="form-group row">
        <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>
        <div class="col-md-6">
            <input id="mobile_no" type="text" class="form-control" name="mobile_no" maxlength="15" value="" placeholder="Enter Country code & Mobile Number" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4 col-form-label text-md-left"></div>
        <div class="col-md-8 col-form-label text-md-left">
            <small id="passwordHelpBlock" class="form-text text-muted">E.g.+91 1234567890</small>
        </div>
    </div>

    <div id="verified_div">
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Country" class="col-md-4 col-form-label text-md-left">City/ Town</label>
            <div class="col-md-6">
                <input id="Country" type="text" class="form-control" name="country" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-left">Country</label>
            <div class="col-md-6">
                <input id="location" type="text" class="form-control" name="location" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-md-4 col-form-label text-md-left">Quantity</label>
            <div class="col-md-6">
                <input id="quantity" type="number" class="form-control" name="quantity" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="company_name" class="col-md-4 col-form-label text-md-left">Company Name</label>
            <div class="col-md-6">
                <input id="company_name" type="text" class="form-control" name="company_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="usage" class="col-md-4 col-form-label text-md-left">Usage / Application</label>
            <div class="col-md-6">
                <input id="usage" type="text" class="form-control" name="usage_application" required>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0" style="margin-top:50px">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-info btn-lf" id="submit_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 160px;font-weight:900" disabled>
                Submit
            </button>
        </div>
    </div>

    <br>

    <input type="hidden" class="form-control" name="suppliers_id" value="">
    <input type="hidden" class="form-control" name="products_id" value="1">
</form>

<script>
    // Function to check if all fields are filled
    function checkFormValidity() {
        const form = document.getElementById('enquiryForm');
        const submitButton = document.getElementById('submit_button');
        
        // Check if the form is valid
        // if (form.checkValidity()) {
        //     submitButton.disabled = false;
        // } else {
        //     submitButton.disabled = true;
        // }
    }

    // Get all input fields
    const inputs = document.querySelectorAll('#enquiryForm input[required]');

    // Add event listeners to each required input field
    inputs.forEach(input => {
        input.addEventListener('input', checkFormValidity);
    });

    // Initial check in case fields are pre-filled
    checkFormValidity();
</script>

                </div>
    </div>
  </div>
</div>
           
        </div>
    </div>
</div>

 
@endsection
