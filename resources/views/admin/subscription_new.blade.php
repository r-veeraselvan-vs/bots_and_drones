@extends('layouts.admin')

@section('content')

<div class="container">
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

  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Premium Subscription') }}</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Date</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Location</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->index + $users->firstItem() }}</td>
                                <td>
                                    <?php
                                        $subscribe = App\Models\Subscription::where('user_id', $user->id)->first();
                                    ?>
                                    @if ($subscribe)
                                        {{ \Carbon\Carbon::parse($subscribe->created_at)->format('d-m-Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $user->company_name }}</td>
                                <td>{{ $user->company_email }}</td>
                                <td>{{ $user->company_phone }}</td>
                                <td>{{ $user->state }}</td>
                                <td>{{ $user->subscription_type == 2 ? 'Premium' : 'Basic' }}</td>
                                <td>
                                    @if($user->status === 'active')
                                        <span class="verified-sticker"><i class="fas fa-check-circle"></i> Verified</span>
                                    @else
                                        <form id="accept-form-{{$user->id}}" action="{{ route('users.accept', $user->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <form id="reject-form-{{$user->id}}" action="{{ route('users.reject', $user->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                        <button style="border-radius: 20px;" class="btn btn-success accept-btn" onclick="confirmAndSubmit(event, 'accept', {{$user->id}});">Accept</button>

                                        <button style="border-radius: 20px;" class="btn btn-danger reject-btn" onclick="confirmAndSubmit(event, 'reject', {{$user->id}});">Reject</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Add pagination links -->
            {{ $users->links() }}
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function confirmAndSubmit(event, action, userId) {
        event.preventDefault();
        
        var formId = (action === 'accept') ? 'accept-form-' : 'reject-form-';

        if (confirm("Are you sure you want to " + action + " this user?")) {
            document.getElementById(formId + userId).submit();
        } else {
            return false;
        }
    }
</script>

@endsection