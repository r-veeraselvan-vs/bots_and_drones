@extends('layouts.common')

@section('content')

@if (auth()->user()->seller === 'Y')
<div class="container">
    <div class="row justify-content-center">


                    @if (Session::has('warning'))
                        <div class="alert alert-warning alert-dismissible fade show">
                           {{ Session::get('warning') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('success') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
 
        <div class="col-md-8">
            <div class="card">
                     <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">{{__('Profile')}}</div>
                        <div class="col-md-6" style="text-align: right;">
                            <a href="{{route('profile.edit', ['id' => $user->id])}}" class="btn btn-info btn-circle">
                                <i class="fa fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
<br/>
                <div class="card-body">

                       

                        <div id="seller-details">
                            <div class="row mb-3 mt-3">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                <div class="col-md-6">
                                    <p>{{$user->company_name}}</p>
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="company_email" class="col-md-4 col-form-label text-md-right">Company Email ID</label>
                                <div class="col-md-6">
                                <p>{{$user->company_email}} <img src="{{asset('assets/images/verified.png')}}" width="20px" style="height:20px"></p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company_phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                <p>{{$user->company_phone}} <img src="{{asset('assets/images/verified.png')}}" width="20px" style="height:20px"></p>
                                </div>
                            </div>

                          
                              <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Address 1</label>
                                <div class="col-md-6">
                                <p>{{$user->address1}}</p>
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Address 2</label>
                                <div class="col-md-6">
                                <p>{{$user->address2}}</p>
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Town / City</label>
                                <div class="col-md-6">
                                <p>{{$user->city}}</p>
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Region</label>
                                <div class="col-md-6">
                                <p>{{$user->state}}</p>
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Post Code</label>
                                <div class="col-md-6">
                                <p>{{$user->pincode}}</p>
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Country</label>
                                <div class="col-md-6">
                                <p>{{$user->country}}</p>
                                </div>
                            </div>
                             
                           

                            <div class="row mb-3">
                                <label for="registered_number" class="col-md-4 col-form-label text-md-right">Company Number</label>
                                <div class="col-md-6">
                                <p>{{$user->registered_number}}</p>
                                </div>
                            </div>

                           
                             <div class="row mb-3 mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact   Name') }}</label>

                            <div class="col-md-6">
                                <p>{{$user->name}}</p>
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact   Phone') }}</label>

                            <div class="col-md-6">
                                <p>{{$user->mobile_no}}</p>
                            </div>
                        </div>
                            <br/>
                            <br/>
                            <div class="row mb-3">
                                <a onclick="DeleteUser('{{$user->id}}')" class="btn btn-link">Delete My Account</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>   
</div>
</div>
@else

<div class="container">
    <div class="row justify-content-center">

 @if (Session::has('warning'))
                        <div class="alert alert-warning alert-dismissible fade show">
                           {{ Session::get('warning') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('success') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none;border: none;text-align: right;float: right;">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">{{__('Profile')}}</div>
                        
                    </div>
                </div>
<br/>
                <div class="card-body">

                        <div class="row mb-3 mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <p>{{$user->name}}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">                                
                                <p>{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <p>{{$user->mobile_no}}</p>
                            </div>
                        </div>
                           <div class="row mb-3">
                                <label for="company_phone" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                <div class="col-md-6">
                                <p>{{$user->company_name}}</p>
                                </div>
                            </div>

                        
                              <div class="row mb-3">
                                <label for="registered_address" class="col-md-4 col-form-label text-md-right">Town / City</label>
                                <div class="col-md-6">
                                <p>{{$user->city}}</p>
                                </div>
                            </div>
                             <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <p>{{$user->country}}</p>
                            </div>
                        </div>
                            
                        

                        <div class="container text-center">
                            <a href="{{route('profile.edit', ['id' => $user->id])}}" class="btn btn-info">Edit</a>
                                <a onclick="DeleteUser('{{$user->id}}')" class="btn btn-link">Delete My Account</a>
                        </div>

                </div>
            </div>
        </div>   
</div>
</div>

@endif

@endsection