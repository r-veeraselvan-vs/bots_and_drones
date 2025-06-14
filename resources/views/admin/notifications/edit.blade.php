@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-text">Edit Notification</h5>
        </div>
        <div class="card-body">
            <div class="col-md-12 pt-4">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
                @endif
                <form method="post" action="{{ route('notifications.update', $notification->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mb-3">
                        <label class="col-sm-12 col-form-label">Do you want to Publish Notification?</label>
                        <div class="col-sm-12">
                            <label class="radio-inline">
                                <input type="radio" name="publish_option" value="now" {{ $notification->publish_option == 'now' ? 'checked' : '' }} onchange="toggleDateTimeFields()"> Now
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="publish_option" value="later" {{ $notification->publish_option == 'later' ? 'checked' : '' }} onchange="toggleDateTimeFields()"> Later
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" id="start-date-time" style="{{ $notification->publish_option == 'later' ? 'display: block;' : 'display: none;' }}">
                            <!-- Fields for start date and time -->
                            <div class="form-group row mb-3">
                                <label for="start_date" class="col-sm-6 col-form-label">Start Date:</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $notification->start_date }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="start_time" class="col-sm-6 col-form-label">Start Time:</label>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control" name="start_time" id="start_time" value="{{ $notification->start_time }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" id="end-date-time">
                            <!-- Fields for end date and time -->
                            <div class="form-group row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">End Date:</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $notification->end_date }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="end_time" class="col-sm-6 col-form-label">End Time:</label>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control" name="end_time" id="end_time" value="{{ $notification->end_time }}"> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-sm-12 col-form-label">Title&nbsp;<span style="color:red">*</span></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" required value="{{ $notification->title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="description" class="col-12 col-form-label">Description&nbsp;<span style="color:red">*</span></label>
                        <div class="col-12">
                            <textarea name="description" id="description" class="form-control" rows="5" required>{{ $notification->description }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3" align="center">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Update</button>
                            <a class="btn btn-danger" href="{{ route('notifications.index') }}" style="padding: 10px 50px 10px 50px;">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDateTimeFields() {
        var publishOption = document.querySelector('input[name="publish_option"]:checked').value;
        var startDateField = document.getElementById('start-date-time');
        var startDateTimeFields = startDateField.querySelectorAll('input[type="date"], input[type="time"]');

        if (publishOption === 'later') {
            startDateField.style.display = 'block';
        } else {
            startDateField.style.display = 'none';

            // Clear start date and start time fields
            startDateTimeFields.forEach(function(field) {
                field.value = '';
            });
        }
    }
</script>

@endsection
