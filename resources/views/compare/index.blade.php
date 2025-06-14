@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Compared Products</h1>

            @if (!empty($compareProducts))
                <div class="row">
                    <div class="img-sec">
                    @php
                        $numProducts = count($compareProducts);
                        $columnClass = $numProducts > 2 ? 'col-md-4' : 'col-md-6';
                    @endphp

                    @foreach ($compareProducts as $product)
                        <div class="{{ $columnClass }} mb-4">
                            <?php
                                $user = App\Models\User::find($product->user_id);
                                $url = route('product.details', ['slug' => $product->slug]);
                                $contact_url = route('enquiry', ['id' => $product->id]);
                                $contact_seller = route('contact', ['id' => $product->id]);
                            ?>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><strong>Image</strong></th>
                                    @foreach ($compareProducts as $product)
                                        <th>
                                            @if ($product->images[0]['ImageUrl'] ?? null)
                                            <div class="img-sec">
                                                <a href="{{$url}}">
                                                    <img src="{{ $product->images[0]['ImageUrl'] }}" alt="{{ $product->title }}" class="img-fluid">
                                                </a>
                                            </div>
                                            @endif
                                        </th>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    @foreach ($compareProducts as $product)
                                        <th>{{ $product->title }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Location</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->location }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Region</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <?php $state = App\Models\State::find($product->state); ?>
                                        <td>{{ $state ? $state->name : 'N/A' }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Model Name</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->model_name }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Warranty Available</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>
                                            @if($product->warranty_available != null)
                                                @if($product->warranty_available == "2Y")
                                                    2 Years
                                                @elseif($product->warranty_available == "1Y")
                                                    1 Year
                                                @elseif($product->warranty_available == "6M")
                                                    6 Months
                                                @else
                                                    None
                                                @endif
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Offers</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->offers }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Certification</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->certification }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                <td><strong>Status</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>                                                
                                            @if($product->status == 'Y')
                                                Available
                                            @elseif($product->status == 'N')
                                                Not Available
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    @endforeach    
                                </tr>
                                <tr>
                                    <td><strong>Price</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>
                                            @if($product->pricing_request == "N")
                                                <p class="price m-0">£{{ $product->price }}</p>
                                            @else
                                                <p class="price">Price on request</p>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Description</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->description }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Brand</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td>{{ $product->brand }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><strong>Contact Seller</strong></td>
                                    @foreach ($compareProducts as $product)
                                        <td><a class="btn btn-green-light btn-cont-seller w-t-line" href="{{ $contact_seller }}">Contact</a></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <p>Invalid product comparison.</p>
            @endif
        </div>
        <div class="container text-center" style="padding-top: 20px;">
            <a class="btn btn-danger text-center" href="{{ route('compare') }}">Back</a>
        </div>
    </div>
@endsection
