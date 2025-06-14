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
            <div class="card-header">{{ __('Unverified Users') }}</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">User Type</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->index + $users->firstItem() }}</td>
                                <td>
                                    @if($user->seller == 'Y')
                                        <b>Seller</b>
                                    @else
                                        Buyer
                                    @endif
                                </td>
                                <td>
                                    @if($user->seller == 'Y')
                                        <b>{{ $user->company_name }}</b>
                                    @else
                                        {{ $user->name }}
                                    @endif
                                </td>
                                <td>
                                    @if($user->seller == 'Y')
                                        <b>{{ $user->company_email }}</b>
                                    @else
                                        {{ $user->email }}
                                    @endif
                                </td>
                                <td>
                                    @if($user->seller == 'Y')
                                        <b>{{ $user->company_phone }}</b>
                                    @else
                                        {{ $user->mobile_no }}
                                    @endif
                                </td>
                                <td>
                                    <form id="activate-form-{{$user->id}}" action="{{ route('unverifiedusers.verify', $user->id) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <button style="border-radius: 20px;" class="btn btn-success activate-btn" onclick="confirmAndSubmit(event, {{$user->id}})">Verify</button>
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
    function confirmAndSubmit(event, userId) {
        event.preventDefault();

        if (confirm("Are you sure you want to verify this user?")) {
            document.getElementById('activate-form-' + userId).submit();
        } else {
            // User clicked "Cancel", do nothing
            return false;
        }
    }
</script>

@endsection