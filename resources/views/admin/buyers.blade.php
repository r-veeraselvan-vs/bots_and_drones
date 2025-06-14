@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Filters') }}</div>
                  <div class="card-body">
                    <form action="{{ route('admin.buyers.list') }}" method="GET">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="date-range">From Date:</label>
                                <input type="date" class="form-control" id="start-date" name="start-date" value="{{ old('start-date', $startDate) }}">
                            </div>
                            <div class="col-md-2">
                                <label for="date-range">To Date:</label>
                                <input type="date" class="form-control" id="end-date" name="end-date" value="{{ old('end-date', $endDate) }}">
                            </div>
                            <div class="col-md-2">
                                <label for="date-range"></label><br>
                                <button type="submit" class="btn btn-danger">Apply Filter</button>
                            </div>
                            <div class="col-md-2">
                                <label for="date-range"></label><br>
                                <a href="{{ route('admin.buyers.list') }}" class="btn btn-primary">Reset</a>
                            </div>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">SNo</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">No. of Enquiries</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($buyers as $buyer)
                        <?php 
                        $EnquiryCount = App\Models\Contact::where('buyer_id',$buyer->id)->count();
                        ?>
                        <tr>
                            <td>{{ $loop->index + $buyers->firstItem() }}</td>
                            <td>{{ date('d-m-Y', strtotime($buyer->created_at)) ?? 'N/A' }}</td>
                            <td>{{ $buyer->name ?? 'N/A' }}</td>
                            <td>{{ $buyer->email ?? 'N/A' }}</td>
                            <td>{{ $buyer->mobile_no ?? 'N/A' }}</td>
                            <td>{{ $EnquiryCount ?? 'N/A' }}</td>
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
            {{ $buyers->links() }}
        </div>
    </div>
</div>

@endsection
