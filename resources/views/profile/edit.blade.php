@extends('layouts.common')

@section('content')
 

@if ($user->seller == 'Y')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>
<br/>
                <div class="card-body">
                    <form method="POST" action="{{route('profile.update', ['id' => $user->id])}}">
                        @csrf
 <input type="hidden" name="seller" value="Y">
                     

                        <div id="seller-details">
                            <div class="row mb-3 mt-3">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name" value="{{ $user->company_name }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company_email" class="col-md-4 col-form-label text-md-right">Company Email ID</label>
                                <div class="col-md-6">
                                    <input id="company_email" type="email" class="form-control" name="company_email" value="{{ $user->company_email }}" readonly>
                                </div>
                            </div>
                             <div class="row mb-3">
                                    <label for="company_phone" class="col-md-4 col-form-label text-md-right">Phone&nbsp;<span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                                                  <div class="input-group-text">
                                                                     +91 <input type="hidden" name="country_code" value="+91 ">
                                                                  </div>
                                                                  <?php 
                                                                  $new_array = explode(' ',$user->company_phone);
                                                                  ?>
                                                                  <input id="company_phone" type="text" class="form-control @error('company_phone') is-invalid @enderror" onkeypress="return /[0-9,+ ]/i.test(event.key)" maxlength="10" value="{{ $new_array[1]}}" name="company_phone" value="{{ old('company_phone') }}" readonly>
                                                            </div>
                                    </div>
                                </div>
                                                         
                              <div class="row mb-3">
                                <label for="address1" class="col-md-4 col-form-label text-md-right">Address 1</label>
                                <div class="col-md-6">
                                    <input id="address1" type="text" class="form-control" name="address1" value="{{ $user->address1 }}">
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="address2" class="col-md-4 col-form-label text-md-right">Address 2</label>
                                <div class="col-md-6">
                                    <input id="address2" type="text" class="form-control" name="address2" value="{{ $user->address2 }}">
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-right">Town / City</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}">
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
                                <div class="col-md-6">
                                    <select id="state" name="state" class="form-select">
                                     <option value="">Select State</option>
                                <?php 
                                        $states = \App\Models\State::get();
                                ?>
                                @foreach($states as $state)
                                    <option value="{{$state->name}}" @if($state->name==$user->state) selected @endif>{{$state->name}}</option>
                                @endforeach
                                </select>
                                </div>
                            </div>
                                <div class="row mb-3">
                                <label for="pincode" class="col-md-4 col-form-label text-md-right">Pincode</label>
                                <div class="col-md-6">
                                    <input id="pincode" type="text" class="form-control" name="pincode" value="{{ $user->pincode }}" onkeypress="return /[0-9,+ ]/i.test(event.key)"  maxlength="7">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country" value="{{ $user->country }}">
                                </div>
                            </div>
                          

                            <div class="row mb-3">
                                <label for="registered_number" class="col-md-4 col-form-label text-md-right">GST Number</label>
                                <div class="col-md-6">
                                    <input id="registered_number" type="text" class="form-control" name="registered_number" value="{{ $user->registered_number }}">
                                </div>
                            </div>

                            
                               <div class="row mb-3 mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact  Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"   autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                         
                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control" name="mobile_no" value="{{ $user->mobile_no }}"  onkeypress="return /[0-9,+ ]/i.test(event.key)"   >

                                @error('mobile_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

 


                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{route('profile.index')}}" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
@else

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>

                <div class="card-body">
                    <br/>
                     <form method="POST" action="{{route('profile.update', ['id' => $user->id])}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"     readonly>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>

                    
                                 <div class="row mb-3" >
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}&nbsp;<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                
                                <div class="input-group mb-3">                                       
                                      <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" onkeypress="return /[0-9,+ ]/i.test(event.key)" maxlength="15" name="mobile_no" value="{{ $user->mobile_no }}" required>
                                </div>
                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                               
                        <div class="row mb-3 mt-3">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name" value="{{ $user->company_name }}">
                                </div>
                            </div>
                        <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-right">Town / City</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country" value="{{ $user->country }}">
                                </div>
                            </div>
   
                      
                            



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{route('profile.index')}}" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
   function showSellerDetails() {
        document.getElementById('company_name').required = true; 
         document.getElementById('registered_number').required = true; 
        document.getElementById('company_email').required = true; 
        document.getElementById("seller-details").style.display = "block";
    }

    function hideSellerDetails() {
         document.getElementById('company_name').required = false; 
         document.getElementById('registered_number').required = false; 
        document.getElementById('company_email').required = false; 
        document.getElementById("seller-details").style.display = "none";
    }
</script>

@endif

@endsection

