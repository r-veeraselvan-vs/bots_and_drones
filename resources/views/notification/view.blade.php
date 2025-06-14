@extends('layouts.common')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-text">View Notification</h5>
        </div>
        <div class="card-body">
            <div class="row pt-4">
                <div class="col-sm-4">                    
                    <div class="row mb-3">
                        <label for="title" class="col-sm-12 col-form-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" value="{{ $notification->title }}" readonly>
                        </div>
                    </div>
                </div>
                @if($notification->start_date && $notification->start_time)
                <div class="col-sm-4" style="display: none;">                    
                    <div class="row mb-3">
                        <label for="title" class="col-sm-12 col-form-label">Start date / Start Time</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" value="{{ $notification->start_date }} / {{ $notification->start_time }}" readonly>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-sm-4" style="display: none;">                    
                    <div class="row mb-3">
                        <label for="title" class="col-sm-12 col-form-label">End date / End Time</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" value="{{ $notification->end_date }} / {{ $notification->end_time }}" readonly>
                        </div>
                    </div>
                </div>

                    <div class="form-group row mb-3">
                        <label for="description" class="col-12 col-form-label">Description</label>
                        <div class="col-12">
                            <textarea name="description" id="description" class="form-control" rows="5" readonly>{{ $notification->description }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3" align="center">
                        <div class="col-sm-12">
                            <a class="btn btn-danger" href="{{ route('notification.list') }}" style="padding: 10px 50px 10px 50px;">Back</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
