@extends('layouts.app')

@section('content')
            
<div class="container" style="margin-top: -60px;">
      <div class="row justify-content-center">

               <img src="http://botsanddrones.biz/assets/img/logo.png" style="width:320px">


  </div>

    <div class="row ">
        <div class="col-md-12">
              @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
         <div class="card">
  <div class="row no-gutters" style="background-color:#F5F5F5;">
    <div class="col-md-3" style="background-color:#F5F5F5;margin-top:10px">

      <div style="background-color:#F5F5F5;padding:10px;">
           <h3 class="card-title">{{$provider->name}}</h3>
                   <p class="card-text"><small class="text-muted">Location - </small>{{$provider->location}}</p>
                  
                    
      </div>
    </div>
    <div class="col-md-9" style="padding-top:10px;padding-bottom:20px;background-color:white">
      <div class="card-body">
          <h5 class="card-title"> Contact Drone as a Service Provider</h5>
        <form method="POST" action="{{route('service.enquiry.add')}}"   style="margin-top:50px">
            <input type="hidden" name="provider_id" value="{{$provider->id}}">
                       @csrf
                       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Contact Person</label>

                            <div class="col-md-6">
                                <input id="contact_person_name" type="text" class="form-control " name="contact_person_name" value="" required>

                                
                            </div>
                        </div>
                      
                       <div class="alert alert-success" id="successAuthService" style="display: none;"></div>
                        <div class="alert alert-danger" id="errorService" style="display: none;"></div>
                        <div class="alert alert-success" id="successOtpAuthService" style="display: none;"></div>
                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile_no_service"  type="text" class="form-control" name="mobile_no" maxlength="15" value="" placeholder="Enter mobile number" required>

                               
                            </div>
                           
                        </div>
                          <div class="form-group row">
                             <div class="col-md-4 col-form-label text-md-left"></div>
                              <div class="col-md-8 col-form-label text-md-left">
                                  
                                  <small id="passwordHelpBlock" class="form-text text-muted">Eg.+91 123456789</small>
                              </div>
                            
                            </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5" id="recaptcha-container-service"></div>
                        </div>
                          <div class="form-group row">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                             <button type="button" class="btn btn-info" onclick="sendServiceOTP();" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:900">Send OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                         <div class="form-group row" id="verification_div" >
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Enter Verification Code</label>

                            <div class="col-md-6">
                                <input id="verification_code_service"  type="text" class="form-control" name="verification_code" maxlength="10" value="" required>

                               
                            </div>
                            
                        </div>
                          <div class="form-group row">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                             <button type="button" class="btn btn-info" onclick="verifyService();" id="verify_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:900">Verify OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                         <div id="verified_div" style="display:none">
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control " name="company_name" value="" >

                                
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-left">City/ Town</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control " name="location" value=""  required>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-left">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control " name="country" value="" required>

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label text-md-left">Service</label>

                            <div class="col-md-6">
                                <?php 
                                    $myArray = explode(',', $provider->service_id);
                                    $services = \App\Service::whereIn('id',$myArray)->get();
                                ?>
                                <select id="service" class="form-select"  name="service_id"  required>
                                    <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="requirement" class="col-md-4 col-form-label text-md-left">Requirement Details</label>

                            <div class="col-md-6">
                                                                <textarea id="requirement" type="text" class="form-control " name="requirement" required></textarea>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="expected_date" class="col-md-4 col-form-label text-md-left">Expected Date</label>

                            <div class="col-md-6">
                                <input id="expected_date" type="date" class="form-control " name="expected_date" value=""  required>

                                
                            </div>
                        </div>
                        <div class="tacbox  justify-content-center mt-5">

                          <input id="checkbox" type="checkbox"   onclick="agree(this)" />
                          <label for="checkbox">  I accept terms and conditions of data  <a href="https://botsanddrones.in/"> privacy</a>.</label>
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
 <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
 <script>
        const firebaseConfig = {

    apiKey: "AIzaSyCJGmJKf_qkIkLjYBQB4QCOJsh43MkUEdg",

    authDomain: "otpverification-57a46.firebaseapp.com",

    projectId: "otpverification-57a46",

    storageBucket: "otpverification-57a46.appspot.com",

    messagingSenderId: "193180545531",

    appId: "1:193180545531:web:be96a84b2b014c49ce5b5e"

  };

        firebase.initializeApp(firebaseConfig);
    </script>
<script type="text/javascript">
        window.onload = function () {
            renderService();
        };
        function renderService() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container-service');
            recaptchaVerifier.render();
        }
        function sendServiceOTP() {
            var number = $("#mobile_no_service").val();
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuthService").text("OTP is send to your entered mobile number");
                $("#successAuthService").show();
                const btn = document.getElementById('verify_button');
                btn.removeAttribute('disabled');
            }).catch(function (error) {
                $("#errorService").text(error.message);
                $("#errorService").show();
            });
        }
        function verifyService() {
            var code = $("#verification_code_service").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuthService").text("Verified Successfully");
                $("#successOtpAuthService").show();
                document.getElementById("verified_div").style.display = "block";
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>

@endsection
