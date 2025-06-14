@extends('layouts.auth')

@section('content')
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
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">{{ __('Admin Login') }}</div>

                <div class="card-body  justify-content-center">
                    <form method="POST" action="{{ route('admin.login.post') }}">
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
                       

                       
                        <div class="mb-3" style="position: absolute;left:43%;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div><br><br>
                       
                       
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
