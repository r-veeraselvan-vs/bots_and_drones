@extends('layouts.common')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">{{__('Subscribe')}}</div>
                    </div>
                </div>
                <div class="card-body text-center"> <!-- Center align the content -->
                    <p><br>
                        You have already used basic package to add products in your account, to add more products please subscribe for the premium package.
                    </p>
                    <p>
                        I would like to subscribe to the premium package and increase my product limit.
                    </p>
                    <form action="{{ route('subscription.subscribe') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Submit</button> <!-- Center align the button -->
                    </form>
                </div>
            </div> 
        </div> 
    </div>
</div>

@endsection