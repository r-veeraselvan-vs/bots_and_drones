@extends('layouts.common')

@section('content')
 

 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>
<br/>
                <div class="card-body ">
                     @if($errors->any())
            {!! implode('', $errors->all('<div class="mt-3" style="color:red">:message</div>')) !!}
            @endif
            @if(Session::get('error') && Session::get('error') != null)
            <div class="mt-3" style="color:red">{{ Session::get('error') }}</div>
            @php
            Session::put('error', null)
            @endphp
            @endif
            @if(Session::get('success') && Session::get('success') != null)
            <div class="mt-3" style="color:green">{{ Session::get('success') }}</div>
            @php
            Session::put('success', null)
            @endphp
            @endif
                    <form method="POST" action="{{route('profile.changePassword')}}">
                        @csrf
                      

                            <div class="mb-3 mt-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                     <span toggle="#password-field1" class="fas fa-eye-slash field-icon toggle-password" id="login_pwd"></span>
                      
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="new_password">
                    <span toggle="#password-field1" class="fas fa-eye-slash field-icon toggle-password-1" id="login_pwd-1"></span>
                    
                </div>
                 <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
    Your password must be 8-20 characters.
    </span>
  </div>
                <div class="mb-3 mt-3">
                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="singin-conf-password" name="new_password_confirmation">
                    <span toggle="#password-field2" class="fas fa-eye-slash field-icon toggle-password-conf" id="login_pwd_2"></span>
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
 

@endsection

