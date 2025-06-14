<form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
    <label for="seller" class="col-md-4 col-form-label text-md-right">Are you registering as ?</label>
    <div class="col-md-6 mt-1">
       
        <label class="form-check-label ml-3">
            <input type="radio" name="seller" value="N"   onclick="javascript:location.href='register?seller=N'" @if(app('request')->input('seller')!=null) @if(app('request')->input('seller')=="N") checked @endif @else checked @endif> Buyer
        </label>
         <label class="form-check-label">
            <input type="radio" name="seller" value="Y" onclick="javascript:location.href='register?seller=Y'"  @if(app('request')->input('seller')=="Y") checked @endif  @if(Session::get('contact_id')!=null) disabled @endif> Seller
        </label>
    </div>
</div>
                        <div class="row mb-3">
    <label for="country" class="col-md-4 col-form-label text-md-right">Select your country&nbsp;<span class="text-danger">*</span></label>
    <div class="col-md-6">
        <select name="country_id" id="country_id" class="form-control" required>
            <option value="" selected disabled>Please select</option>
            <?php 
                        $countries = App\Models\Countries::orderBy('name')->pluck('name', 'id');
                ?>
            @foreach($countries as $id => $country)
                <option value="{{ $id }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
</div>
                        




    <div class="row mb-3" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"   autocomplete="name" autofocus required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3" >
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                
                               <div class="input-group mb-3">
                                      <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" onkeypress="return /[0-9,+ ]/i.test(event.key)" maxlength="15" name="mobile_no" value="{{ old('mobile_no') }}" required placeholder="Enter Country Code & Mobile Number">
                                </div>
                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3" >
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><span class="text-danger"></span></label>
                            <div class="col-md-6">
                                <small id="passwordHelpBlock" class="form-text text-muted">E.g.+441234567890</small>
                            </div>
                        </div>
                        
<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}&nbsp;<span class="text-danger">*</span></label>

    <div class="col-md-6">
        <input
            id="email"
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            value="{{ old('email') }}"
            autocomplete="email"
            oninput="checkEmailFormat()"
            required
        >

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <!-- Display a message for email format validation -->
        <div id="emailFormatError" class="invalid-feedback" style="display:none;">
            <strong>Please enter a valid email address.</strong>
        </div>

        <!-- Display a message for email uniqueness validation -->
        <div id="emailUniqueError" class="invalid-feedback" style="display:none;">
            <strong>Email already exists. Please choose another.</strong>
        </div>
    </div>
</div>


                       

 
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="buyer-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" minlength="8" required>
                              <span toggle="#password-field1" class="fas fa-eye-slash field-icon toggle-password-buyer" id="login_pwd-1"></span>
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
                            <label for="buyer-singin-conf-password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="buyer-singin-conf-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  minlength="8" required>
                                
                                  <span toggle="#password-field2" class="fas fa-eye-slash field-icon toggle-password-conf-buyer" id="login_pwd_2"></span>
                            </div>
                        </div>
   
                      
                         

                     
                          <div class="row mb-3">
                            <label for="singin-conf-password" class="col-md-4 col-form-label text-md-right"> </label>
                                <div class="col-md-8">
                        <div class="tacbox">
  
  <span>
  <label for="checkbox">
  <input id="checkbox" type="checkbox"  onchange="document.getElementById('register').disabled = !this.checked;" />
   I have read and accept the <a href="https://botsanddrones.asia/terms-%26-conditions" target="_blank">terms &
conditions</a> and <a href="https://botsanddrones.asia/privacy-policy" target="_blank">privacy policy.</a></label>      
  </span>
</div> </div></div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"  id="register" disabled>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>