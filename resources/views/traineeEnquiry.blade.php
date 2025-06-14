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
           <h3 class="card-title">{{$centers->name}}</h3>
                   <p class="card-text"><small class="text-muted">Location - </small>{{$centers->location}}</p>
                  
                    
      </div>
    </div>
    <div class="col-md-9" style="padding-top:10px;padding-bottom:20px;background-color:white">
      <div class="card-body">
        <form method="POST" action="{{route('trainee.enquiry.add')}}"   style="margin-top:50px">
            <input type="hidden" name="center_id" value="{{$centers->id}}">
                       @csrf
                      
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="" >

                                
                            </div>
                        </div>
                       
                      
                       <div class="alert alert-success" id="successAuthTrainee" style="display: none;"></div>
                        <div class="alert alert-danger" id="errorTrainee" style="display: none;"></div>
                        <div class="alert alert-success" id="successOtpAuthTrainee" style="display: none;"></div>
                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-left">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile_no_trainee"  type="text" class="form-control" name="mobile_no" maxlength="15" value="" placeholder="Enter mobile number" required>

                               
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
                            <div class="col-md-5" id="recaptcha-container-trainee"></div>
                        </div>
                        <div class="form-group row">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                             <button type="button" class="btn btn-info" onclick="sendTraineeOTP();" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:900">Send OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                            
                         <div class="form-group row" id="verification_div" >
                            <label for="verification_code_trainee" class="col-md-4 col-form-label text-md-left">Enter Verification Code</label>

                            <div class="col-md-6">
                                <input id="verification_code_trainee"  type="text" class="form-control" name="verification_code" maxlength="10" value="" required>

                               
                            </div>
                           
                        </div>
                          <div class="form-group row">
                             <label for="mobile_no" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5">
                             <button type="button" class="btn btn-info" onclick="verifyTrainee();" id="verify_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:500">Verify OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                        
                        <div id="verified_div" style="display:none">
                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-left">City/ Town</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control " name="location"  value=""  required>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-left">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control " name="country"  value="" required>

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-left">Select Course</label>

                            <div class="col-md-6">
                                <?php 
                                    $myArray = explode(',', $centers->training_course_id);
                                    $services = \App\TrainingCourse::whereIn('id',$myArray)->get();
                                ?>
                                <select id="course" class="form-select"  name="course_id"  required>
                                    <option value="">Select Course</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="requirement" class="col-md-4 col-form-label text-md-left">Message</label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control " name="message" required></textarea>

                                
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
            renderTrainee();
        };
        function renderTrainee() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container-trainee');
            recaptchaVerifier.render();
        }
        function sendTraineeOTP() {
            var number = $("#mobile_no_trainee").val();
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuthTrainee").text("OTP is send to your entered mobile number");
                $("#successAuthTrainee").show();
                const btn = document.getElementById('verify_button');
                btn.removeAttribute('disabled');
            }).catch(function (error) {
                $("#errorTrainee").text(error.message);
                $("#errorTrainee").show();
            });
        }
        function verifyTrainee() {
            var code = $("#verification_code_trainee").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuthTrainee").text("Auth is successful");
                $("#successOtpAuthTrainee").show();
               document.getElementById("verified_div").style.display = "block";
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>

@endsection
