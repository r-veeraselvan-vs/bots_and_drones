<form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
    <label for="seller" class="col-md-4 col-form-label text-md-right">Are you registering as ?</label>
    <div class="col-md-6 mt-1">
       
        <label class="form-check-label ml-3">
            <input type="radio" name="seller" value="N"   onclick="javascript:location.href='register?seller=N'" @if(app('request')->input('seller')!=null) @if(app('request')->input('seller')=="N") checked @endif @else checked @endif> Buyer
        </label>
         <label class="form-check-label">
            <input type="radio" name="seller" value="Y" onclick="javascript:location.href='register?seller=Y'"  @if(app('request')->input('seller')=="Y") checked @endif> Seller
        </label>
    </div>
</div>
                        




     <div class="row mb-3">
        <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input id="company_name" type="text" class="form-control" name="company_name"  required>
        </div>
    </div>
 <div class="row mb-3">
    <label for="company_email" class="col-md-4 col-form-label text-md-right">Company Email ID&nbsp;<span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input id="company_email" type="email" class="form-control" name="company_email" oninput="checkCompanyEmailFormat()" required>

        <!-- Display a message for email format validation -->
        <div id="companyEmailFormatError" class="invalid-feedback" style="display:none;">
            <strong>Please enter a valid company email address.</strong>
        </div>

        <!-- Display a message for email uniqueness validation -->
        <div id="companyEmailUniqueError" class="invalid-feedback" style="display:none;">
            <strong>Company email already exists. Please choose another.</strong>
        </div>
    </div>
</div>

<div class="alert alert-success" id="successAuth" style="display: none;"></div>

<div class="alert alert-danger alert-dismissible"  id="error" style="display: none;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   
</div>
<div class="alert alert-success alert-dismissible"  id="successOtpAuth" style="display: none;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   
</div>

      <div class="row mb-3">
        <label for="company_phone" class="col-md-4 col-form-label text-md-right">Phone&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <div class="input-group mb-3">
                                      <div class="input-group-text">
                                         +44 <input type="hidden" name="country_code" value="+44 ">
                                      </div>
                                      <input id="company_phone" type="text" class="form-control @error('company_phone') is-invalid @enderror" onkeypress="return /[0-9,+ ]/i.test(event.key)" maxlength="10" name="company_phone" value="{{ old('company_phone') }}" required>
                                </div>
        </div>
    </div>
     
      <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5" id="recaptcha-container"></div>
                        </div>
                         <div class="form-group row">
                             <label for="company_phone" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5 mb-3">
                             <button type="button" class="btn btn-info" onclick="submitPhoneNumberAuth();" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:500">Send OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div>
                         <div class="form-group row" id="verification_div">
                            <label for="company_phone" class="col-md-4 col-form-label text-md-right">Enter Verification Code</label>

                            <div class="col-md-5">
                                <input id="verification_code"  type="text" class="form-control" name="verification_code" maxlength="10" value="" required>

                               
                            </div>
                            <div class="col-md-3">
                               
                            </div>
                        </div>
                          <div class="form-group row">
                             <label for="company_phone" class="col-md-5 col-form-label text-md-left"></label>

                            <div class="col-md-5 mt-3 mb-3">
                              <button type="button" class="btn btn-info  " onclick="submitPhoneNumberAuthCode();" id="verify_button" style="color:white;background-color:#ed3c4a;border:1px solid #ed3c4a;width: 110px;font-weight:500" disabled>Verify OTP</button>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                            </div> 
                            <div id="verified_div" style="display:none">
     <div class="row mb-3">
        <label for="address1" class="col-md-4 col-form-label text-md-right">Address 1&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input id="address1" type="text" class="form-control" name="address1" required>
        </div>
    </div>
      <div class="row mb-3">
        <label for="address2" class="col-md-4 col-form-label text-md-right">Address 2</label>
        <div class="col-md-6">
            <input id="address2" type="text" class="form-control" name="address2">
        </div>
    </div>
      <div class="row mb-3">
        <label for="city" class="col-md-4 col-form-label text-md-right">City / Town&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input id="city" type="text" class="form-control" name="city" required>
        </div>
    </div>
     <div class="row mb-3">
        <label for="pincode" class="col-md-4 col-form-label text-md-right">Post Code&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input id="pincode" type="text" class="form-control" name="pincode" onkeypress="return /[a-zA-Z0-9,+ ]/i.test(event.key)"  maxlength="8" required>
        </div>
    </div>
      <div class="row mb-3">
        <label for="state" class="col-md-4 col-form-label text-md-right">Region&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            
            <select id="state" type="text" class="form-select" name="state" required>
                <option value="">Select Region</option>
                <?php 
                        $states = \App\Models\State::get();
                ?>
                @foreach($states as $state)
                    <option value="{{$state->name}}">{{$state->name}}</option>
                @endforeach
                </select>
        </div>
    </div>

    

    <div class="row mb-3">
        <label for="registered_number" class="col-md-4 col-form-label text-md-right">Company Number&nbsp;<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input id="registered_number" type="text" class="form-control" name="registered_number" required>
        </div>
    </div>
       <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="new-password" minlength="8" required>
                              <span toggle="#password-field1" class="fas fa-eye-slash field-icon toggle-password-1" id="login_pwd-1"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
    Your password must be 8-20 characters.
    </span>
  </div>
                            </div>

                        </div>


                        <div class="row mb-3">
                            <label for="singin-conf-password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="singin-conf-password" type="password" class="form-control" name="password_confirmation"   autocomplete="new-password"  minlength="8" required>
                                
                                  <span toggle="#password-field2" class="fas fa-eye-slash field-icon toggle-password-conf" id="login_pwd_2"></span>
                            </div>
                        </div>
   
                        <div class="row mb-3" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Name') }}&nbsp;<span class="text-danger">*</span> </label>

                            <div class="col-md-6">
                                <input id="contact_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"   autocomplete="name" autofocus required>
                              
                                <input id="buyer_email" type="hidden" class="form-control " name="email" >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3" >
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Phone') }}&nbsp;<span class="text-danger">*</span> </label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" onkeypress="return /[0-9,+ ]/i.test(event.key)" maxlength="10" name="mobile_no" value="{{ old('mobile_no') }}" required>
                              

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 
                        

                     
                          <div class="row mb-3">
                            <label for="singin-conf-password" class="col-md-4 col-form-label text-md-right"> </label>
                                <div class="col-md-6">
                        <div class="tacbox">
  
  <span>
  <label for="checkbox">
  <input id="checkbox" type="checkbox"  onchange="document.getElementById('register').disabled = !this.checked;" />
   I have read and accept the <a href="https://botsanddrones.uk/terms-%26-conditions" target="_blank">terms &
conditions</a> and <a href="https://botsanddrones.uk/privacy-policy" target="_blank">privacy policy.</a></label>      
  </span>
</div> </div></div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"  id="register" disabled>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div></div>

                    </form>