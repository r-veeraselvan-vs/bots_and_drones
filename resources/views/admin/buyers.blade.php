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
                            <div class="col-md-4">
                                <label for="country">Filter by Country:</label>
                                <select class="form-control" id="country" name="country">
                                    <option value="">All</option>
                                    <?php $countries = App\Models\Countries::get(); ?>
                                    @foreach($countries as $c)
                                        <option value="{{ $c->id }}" {{ $c->id == $country ? 'selected' : '' }}>{{ $c->name }}</option>
                                    @endforeach
                                </select>
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
              <th scope="col">Country</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile No</th>
              <th scope="col">No. of Enquiries</th>
            </tr>
          </thead>
          <tbody id="table-body">
            @foreach($buyers as $buyer)
             <?php 
              $EnquiryCount = App\Models\Contact::where('buyer_id',$buyer->id)->count();
              $country = App\Models\Countries::where('id',$buyer->country_id)->first();
             ?>
              <tr>
                <td>{{ $loop->index + $buyers->firstItem() }}</td>
                <td>{{ optional($buyer->created_at)->format('d-m-y') ?? 'N/A' }}</td>
                <td>{{ $buyer->name ?? 'N/A' }}</td>
                <td>{{ $country->name ?? 'N/A' }}</td>
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
