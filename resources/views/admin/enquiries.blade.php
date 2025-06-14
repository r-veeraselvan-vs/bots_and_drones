@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Filters') }}</div>
                  <div class="card-body">
                    <form action="{{ route('admin.enquiry.list') }}" method="GET">
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
                    <th scope="col">SNo</th>
                    <th scope="col">Enquiry Date</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Seller Name</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach($enquiries as $enquiry)
                    <?php 
                        $seller = App\Models\User::find($enquiry->seller_id);
                        $buyer = App\Models\User::find($enquiry->buyer_id);
                        $product = App\Models\Products::find($enquiry->product_id);
                        $productcountry = App\Models\Countries::where('id',$product->country)->first();
                    ?>
                    <tr>
                        <td>{{ $loop->index + $enquiries->firstItem() }}</td>
                        <td>{{ date('d-m-Y', strtotime($enquiry->created_at)) ?? 'N/A'  }}</td>
                        <td>{{ $product->title ?? 'N/A'  }}</td>
                        <td>{{ $enquiry->quantity ?? 'N/A'  }}</td>
                        <td>{{ $seller->name ?? 'N/A'  }}</td>
                        <td>{{ $buyer->name ?? 'N/A'  }}</td>
                        <td>{{ $productcountry->name ?? 'N/A' }}</td>
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
            {{ $enquiries->links() }}
        </div>
    </div>
</div>

@endsection