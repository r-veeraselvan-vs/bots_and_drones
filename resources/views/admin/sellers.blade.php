@extends('layouts.admin')

@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Filters') }}</div>
                  <div class="card-body">
                    <form action="{{ route('admin.sellers.list') }}" method="GET">
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
                                <a href="{{ route('admin.sellers.list') }}" class="btn btn-primary">Reset</a>
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
              <th>SNo</th>
              <th>Date</th>
              <th>Name</th>
              <th>Tax No</th>
              <th>Email</th>
              <th>Mobile No</th>
              <th>No. of Enquiries</th>
              <th>No. of Products</th>
              <th>Contact Person</th>
            </tr>
          </thead>
          <tbody id="table-body">
              @foreach($sellers as $seller)
               <?php 
                $productCount = App\Models\Products::where('user_id',$seller->id)->count();
                $product = App\Models\Products::where('user_id', $seller->id)->first();
                $EnquiryCount = 0; 

                if ($product) {
                    $EnquiryCount = App\Models\Contact::where('product_id', $product->id)->count();
                }
               ?>
              <tr>
                <td>{{ $loop->index + $sellers->firstItem() }}</td>
                <td>{{ date('d-m-Y', strtotime($seller->created_at)) ?? 'N/A' }}</td>
                <td>{{ $seller->company_name ?? 'N/A' }}</td>
                <td>{{ $seller->registered_number ?? 'N/A' }}</td>
                <td>{{ $seller->email ?? 'N/A' }}</td>
                <td>{{ $seller->mobile_no ?? 'N/A' }}</td>
                <td>{{ $EnquiryCount ?? 'N/A' }}</td>
                <td>{{ $productCount ?? 'N/A' }}</td>
                <td>{{ $seller->name ?? 'N/A' }}</td>
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
            {{ $sellers->links() }}
        </div>
    </div>
</div>

@endsection
