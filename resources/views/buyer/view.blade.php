@extends('layouts.app')

@section('content')
            
<div class="container" style="margin-top: 10px;">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">

                    @if (Session::has('warning'))
                        <div class="alert alert-warning">
                           {{ Session::get('warning') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    
  <div class="row no-gutters" style="background-color:#F5F5F5;">
    <div class="col-md-12" style="padding-top:10px;padding-bottom:20px;background-color:white">
      <div class="card-body" style="text-align: center">  

                
                        <div class="col-auto">
                            <h3 style="color: black;font-weight:bold">Seller has received your enquiry!</h3>
                            <a href="/asia" class="btn btn-link mt-5">Home  </a>
                             <a href="/asia" class="btn btn-link mt-5">  |  </a>
                            
                            <a href="{{route('profile.index')}}" class="btn btn-link mt-5">My Account</a>
                        </div>
                
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection