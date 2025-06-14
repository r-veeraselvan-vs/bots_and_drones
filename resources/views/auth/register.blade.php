@extends('layouts.auth')

@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if(app('request')->input('seller')=="Y")

                     @include('auth.seller_register')
                    @else
                     @include('auth.buyer_register')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




 
@endsection
