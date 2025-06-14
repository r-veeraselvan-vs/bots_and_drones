@extends('layouts.auth')

@section('content')
@if(!Auth::user())
<style>
    .card {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgb(1 41 112 / 10%);
}
.card-header{
    border-color: #fff !important;
    background-color: #fff !important;
    color: #798eb3;
    padding: 15px;
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
.btn-danger {
    color: #fff;
    background-color: #1d2e6f;
    border-color: #1d2e6f;
}
.btn-danger:hover {
    color: #fff;
    background-color: #1d2e6f;
    border-color: #1d2e6f;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('error'))
                        <div class="alert alert-warning alert-dismissible fade show">
                           {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
        <div class="col-md-6 ">
           
            <div class="card">
                <div class="card-header">{{ __('Login to My Account') }}</div>

                <div class="card-body  justify-content-center">
                    <form method="POST" action="{{ route('login.check') }}">
                        @csrf

                          <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="singin-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span toggle="#password-field" class="fas fa-eye-slash field-icon toggle-password" id="login_pwd"></span>
                            </div>
                        </div>
                       

                       
                        <div class="mb-3 d-flex justify-content-center " >
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>&nbsp;
                                 <a href="{{url()->previous()}}" class="btn btn-primary">Go Back</a>
                        </div><br><br>
                        
                        <div class="form-group row mb-1">
                             <p style="text-align:center;">Don't have an account? <a   href="{{ route('register') }}" style="   text-decoration: none;">Signup</a></p>
                        </div>

                         <div class="form-group row mb-3">
                             @if (Route::has('password.request'))
                                    <a class=" btn btn-link" href="{{ route('password.request') }}" style="   text-decoration: none;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@else
     <script>window.location = "{{Session::get('filter_url')}}";</script>
@endif
@endsection