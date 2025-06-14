@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Date</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Seller Name</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <?php 
                        $seller = App\Models\User::find($product->user_id);
                        $sellercountry = App\Models\Countries::where('id',$seller->country_id)->first();
                    ?>
                    <tr>
                        <td>{{ $loop->index + $products->firstItem() }}</td>
                        <td>{{ date('d-m-Y', strtotime($product->created_at)) ?? 'N/A'  }}</td>
                        <td>{{ $product->title ?? 'N/A'  }}</td>
                        <td>{{ $product->brand ?? 'N/A'  }}</td>
                        <td>{{ $product->usd_price ?? 'N/A'  }}</td>
                        <td>{{ $seller->name ?? 'N/A'  }}</td>
                        <td>{{ $sellercountry->name ?? 'N/A' }}</td>
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
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection