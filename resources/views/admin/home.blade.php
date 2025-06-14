@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Today') }}</div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <button id="dynamicButton0" class="btn btn-light btn-custom">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user mr-2"></i>
                                    <div>
                                        <h5>Buyers</h5>
                                        <p>{{ $buyersCountToday }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton1" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-store mr-2"></i> <!-- Font Awesome icon for store -->
                                    <div>
                                        <h5>Sellers</h5>
                                        <p>{{ $sellersCountToday }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton3" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-box mr-2"></i> <!-- Font Awesome icon for box -->
                                    <div>
                                        <h5>Products</h5>
                                        <p>{{ $productsCountToday }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton2" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-question-circle mr-2"></i> <!-- Font Awesome icon for question -->
                                    <div>
                                        <h5>Enquiries</h5>
                                        <p>{{ $enquiriesCountToday }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton4" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-dollar-sign mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                    <div>
                                        <h5>Enquiries Value</h5>
                                        <p>₹{{ $enquiriesValueToday }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Weekly') }}</div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <button id="dynamicButton5" class="btn btn-light btn-custom">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user mr-2"></i>
                                    <div>
                                        <h5>Buyers</h5>
                                        <p>{{ $buyersCountWeekly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton6" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-store mr-2"></i> <!-- Font Awesome icon for store -->
                                    <div>
                                        <h5>Sellers</h5>
                                        <p>{{ $sellersCountWeekly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton8" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-box mr-2"></i> <!-- Font Awesome icon for box -->
                                    <div>
                                        <h5>Products</h5>
                                        <p>{{ $productsCountWeekly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton7" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-question-circle mr-2"></i> <!-- Font Awesome icon for question -->
                                    <div>
                                        <h5>Enquiries</h5>
                                        <p>{{ $enquiriesCountWeekly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton9" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-dollar-sign mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                    <div>
                                        <h5>Enquiries Value</h5>
                                        <p>₹{{ $enquiriesValueWeekly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Monthly') }}</div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <button id="dynamicButton10" class="btn btn-light btn-custom">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user mr-2"></i>
                                    <div>
                                        <h5>Buyers</h5>
                                        <p>{{ $buyersCountMonthly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton11" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-store mr-2"></i> <!-- Font Awesome icon for store -->
                                    <div>
                                        <h5>Sellers</h5>
                                        <p>{{ $sellersCountMonthly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton13" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-box mr-2"></i> <!-- Font Awesome icon for box -->
                                    <div>
                                        <h5>Products</h5>
                                        <p>{{ $productsCountMonthly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton12" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-question-circle mr-2"></i> <!-- Font Awesome icon for question -->
                                    <div>
                                        <h5>Enquiries</h5>
                                        <p>{{ $enquiriesCountMonthly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="dynamicButton14" class="btn btn-light btn-custom" style="border-radius: 20px; ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-dollar-sign mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                    <div>
                                        <h5>Enquiries Value</h5>
                                        <p>₹{{ $enquiriesValueMonthly }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Top Products') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SNo</th>
                                    <th scope="col">Seller ID</th>
                                    <th scope="col">Seller Name</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Contact Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $rowCount = 1;
                                @endphp

                                @foreach ($userDetails as $user)
                                    @foreach ($user->products as $product)
                                        @if ($rowCount <= 5)
                                            <tr>
                                                <td>{{ $rowCount }}</td>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->company_name }}</td>
                                                <td>{{ $product->product_id }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>₹{{ $product->price }}</td>
                                                <td>{{ $product->contact_count }}</td>
                                            </tr>
                                            @php
                                                $rowCount++;
                                            @endphp
                                        @else
                                            @break
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Top Sellers') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SNo</th>
                                    <th scope="col">Seller ID</th>
                                    <th scope="col">Seller Name</th>
                                    <th scope="col">Contact Count</th>
                                    <!-- <th scope="col">Products</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $rowCount = 1;
                                @endphp

                                @foreach ($userDetails as $seller)
                                    @if ($rowCount <= 5)
                                        <tr>
                                            <td>{{ $rowCount }}</td>
                                            <td>{{ $seller->id }}</td>
                                            <td>{{ $seller->company_name }}</td>
                                            <td>{{ $seller->contact_count }}</td>
                                            <!-- <td>
                                                <ul>
                                                    @foreach ($seller->products as $product)
                                                        <li>Product ID: {{ $product->product_id }}, Product Name: {{ $product->product_name }}, Price: ₹{{ $product->price }}</li>
                                                    @endforeach
                                                </ul>
                                            </td> -->
                                        </tr>
                                        @php
                                            $rowCount++;
                                        @endphp
                                    @else
                                        @break
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Top Locations') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SNo</th>
                                    <th scope="col">State Name</th>
                                    <th scope="col">Product Count</th>
                                    <th scope="col">Contact Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $rowCount = 1;
                                @endphp

                                @foreach ($topLocations as $location)
                                    @if ($loop->index <= 5)
                                        <tr>
                                            <td>{{ $rowCount }}</td>
                                            <td>{{ $location->state_name }}</td>
                                            <td>{{ $location->product_count }}</td>
                                            <td>{{ $location->contact_count }}</td>
                                        </tr>
                                    @else
                                        @break
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Define an array of static colors for each button
    var staticColors = [ '#ccffff','#ffe6cc', '#ffffcc', '#e6ffcc', '#ccffcc', '#ccffff','#ffe6cc', '#ffffcc', '#e6ffcc', '#ccffcc', '#ccffff','#ffe6cc', '#ffffcc', '#e6ffcc', '#ccffcc'];

    // Loop through each button
    for (var i = 0; i < staticColors.length; i++) {
        // Get the button element
        var button = document.getElementById('dynamicButton' + i);
        
        // Assign a static color to each button
        button.style.backgroundColor = staticColors[i];
    }
</script>

@endsection

