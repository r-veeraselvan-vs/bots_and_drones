@extends('layouts.common')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" style="height: 80px;border:none">
            <h3 class="card-text"></h3>
            <table class="table table-borderless ">
                <tr>
                    <td><h3 class="card-text">Notifications</h3></td>
                </tr>
            </table>
        </div>
        <div class="card-body">
            <div class="col-md-12 pt-2">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notifications as $notification)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $notification->title }}</td>
                            <td>
                                <a class="badge badge-primary" href="{{ route('notification.view', $notification->id) }}">
                                    <i class="bi bi-eye" style="font-size:20px;color:white"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection