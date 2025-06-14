@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" style="height: 80px;border:none">
            <h3 class="card-text"></h3>
            <table class="table table-borderless ">
                <tr>
                    <td><h3 class="card-text">Notifications</h3></td>
                    <td>
                        <div style="float: right;">
                            <a class="btn btn-primary" href="{{ route('notifications.create') }}" style="padding: 6px 20px 6px 20px;">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-body">
            <div class="col-md-12 pt-2">
                
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start Date / Start Time</th>
                            <th>End Date / End Time</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notifications as $notification)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $notification->title }}</td>
                            <td>{{ $notification->description }}</td>
                            <td>
                                @if($notification->start_date && $notification->start_time)
                                    {{ date('d-m-Y', strtotime($notification->start_date)) }} / {{ $notification->start_time }}
                                @else
                                    {{ $notification->created_at->format('d-m-Y') }} / {{ $notification->created_at->format('H:i:s') }}
                                @endif
                            </td>
                            <td>
                                @if($notification->end_date && $notification->end_time)
                                    {{ date('d-m-Y', strtotime($notification->end_date)) }} / {{ $notification->end_time }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a class="badge badge-primary" href="{{ route('notifications.edit', $notification->id) }}">
                                    <i class="bi bi-pencil-square" style="font-size:20px;color:white"></i>
                                </a>
                                <a class="badge badge-danger" onclick="Delete('{{ $notification->id }}')" href="#">
                                    <i class="fa fa-trash" style="font-size:20px;color:red"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Add pagination links -->
            {{ $notifications->links() }}
        </div>
    </div>
</div>
<script>
    function Delete(value) {
        if (confirm("Are you sure you want to delete?")) {
            $.ajax({
                type: 'post',
                url: '{{ route('notifications.destroy', ['id' => ':id']) }}'.replace(':id', value),
                data: {
                    '_method': 'DELETE',
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data) {
                    window.location.reload();
                }
            });
        }
    }
</script>

@endsection