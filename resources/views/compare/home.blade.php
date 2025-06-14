@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <h1 style="color: #01386e;">Compare Products</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <div class="row">
                    <label for="subcategory_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                    <div class="col-md-8">
                        <select id="subcategory_id" class="form-select" name="category" onchange="loadApplication()" required>
                            <option value="">Select Category</option>
                            @foreach($subcategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="row">
                    <label for="use_type" class="col-md-4 col-form-label text-md-right">{{ __('Use Type') }}</label>
                    <div class="col-md-8">
                        <select id="use_type" class="form-select" name="use_type" onchange="loadProducts()">
                            <option value="">Select Application</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="home-carousel my-4">
        <div class="row justify-content-center" id="products">
                <!-- Product carousel will be dynamically added here -->
        </div>
    </div>
    <div class="container text-center" style="padding-top: 20px; display: none;" id="submitButtonContainer">
        <a class="btn btn-danger text-center" id="submitBtn">Submit</a>
    </div>
</div>

<!-- Make sure you have a script block that exposes your routes -->
<script>
    window.routes = {
        'getApplications': '{{ route('getApplications') }}',
        'getProducts': '{{ route('getProducts') }}'
    };
</script>

<!-- Your HTML code here -->

<script>
    function loadApplication() {
        $('#use_type').empty();
        var subcategory_id = $('#subcategory_id').val();
        console.log(subcategory_id, "subcategory_id");
        var routeName = 'getApplications';
        var url = window.routes[routeName];
        // Fetch applications based on the selected category and subcategory using AJAX
        $.ajax({
            url: url,
            type: 'GET',
            data: {subcategory_id: subcategory_id},
            success: function(data) {
                $('#use_type').append('<option value="">Select Application</option>');
                data.forEach(function(item) {
                    $('#use_type').append('<option value="' + item.use_type + '">' + item.use_type + '</option>');
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function loadProducts() {
        var subcategory_id = $('#subcategory_id').val();
        var use_type = $('#use_type').val();

        console.log('subcategory_id:', subcategory_id);
        console.log('use_type:', use_type);
        var routeName = 'getProducts';
        var url = window.routes[routeName];
        // Fetch products based on the selected subcategory and application using AJAX
        $.ajax({
            url: url,
            type: 'GET',
            data: {subcategory_id: subcategory_id, use_type: use_type},
            success: function(data) {
                // Update the product list in the DOM
                updateProductList(data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Create an array to store selected product IDs
    var selectedProductIds = [];
    console.log('Selected Product IDs:', selectedProductIds);

    function updateProductList(products) {
        // Clear existing products
        $('#products').empty();

        // Check if there are any products to display
        if (products.length > 0) {
            // Create a container for the product carousel
            var productCarouselHtml = '<div class="owl-carousel home-related-carousel related-products-carousel">';

            // Iterate through the products and create HTML for each product
            products.forEach(function (product) {
                // Use product data to dynamically generate HTML for each product
                var url = '{{ route("product.details", ["slug" => ":slug"]) }}';
                url = url.replace(':slug', product.slug);

                var contact_url = '{{ route("enquiry", ["id" => ":id"]) }}';
                contact_url = contact_url.replace(':id', product.id);

                // Create HTML for the product
                var productHtml = '<div>' +
                    '<div class="product-list-card">' +
                    '<div class="img-sec">';

                // Check if the product has an image URL
                if (product.images && product.images.length > 0 && product.images[0]['ImageUrl']) {
                    productHtml += '<a href="' + url + '">' +
                        '<img src="' + product.images[0]['ImageUrl'] + '" class="product-list-img" alt="' + product.images[0]['ImageUrl'] + '" />' +
                        '</a>';
                }

                productHtml += '</div>' +
                    '<a href="' + url + '" class="product-list-name" style="height: 50px">' +
                    (product.title ? product.title.substr(0, 40) : '') + '</a>' +
                    '<div class="d-flex align-items-center justify-content-between pl-sec">';

                // Check if pricing_request is "N" before adding the price to the HTML
                if (product.pricing_request === "N") {
                    productHtml += '<p class="price m-0">£' + product.price + '</p>';
                } else {
                    productHtml += '<p class="price">Price on request</p>';
                }

                productHtml += '<div class="location d-flex align-items-center gap-1 m-0">' +
                    '<p class="location-icon m-0">' +
                    '<i class="fas fa-map-marker-alt"></i>' +
                    '</p>' +
                    '<div>' +
                    '<p class="m-0 city">' + (product.location ? product.location : '') + '</p>';

                var state = (product.state && product.state.name) ? product.state.name : '';
                productHtml += (state ? '<p class="m-0 street">' + state + '</p>' : '') +
                    '</div>' +
                    '</div>' +
                    '</div>' + '<button class="btn btn-primary text-center select-btn" data-product-id="' + product.id + '">Add</button>' +
                    '</div>' +
                    '</div>';

                // Append the product HTML to the container
                productCarouselHtml += productHtml;
            });

            // Close the product carousel container
            productCarouselHtml += '</div>';

            // Append the product carousel HTML to the #products container
            $('#products').append(productCarouselHtml);

            // Initialize the Owl Carousel after adding products to the DOM
            $('.owl-carousel').owlCarousel({
                loop: false,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 4,
                    },
                },
            });
            $('#submitButtonContainer').show();

            $('.select-btn').on('click', function () {
                var button = $(this);
                var productId = button.data('product-id');

                // Toggle selection (add or remove from the array)
                var index = selectedProductIds.indexOf(productId);
                if (index === -1) {
                    // Add to the array if not already selected
                    selectedProductIds.push(productId);

                    // Update the button text to "Added"
                    button.text('Added');

                    // Add a CSS class to change the background color to green
                    button.addClass('added-button');
                } else {
                    // Remove from the array if already selected
                    selectedProductIds.splice(index, 1);

                    // Update the button text to "Add"
                    button.text('Add');

                    // Remove the CSS class to reset the background color
                    button.removeClass('added-button');
                }

                // Log the button text
                console.log('Button Text:', button.text());

                // Log the selected product IDs
                console.log('Selected Product IDs:', selectedProductIds);
            });

            $('#submitBtn').on('click', function () {
                // Check the number of selected products
                console.log('Submit button clicked!');
                var numSelectedProducts = selectedProductIds.length;

                // Log the selected product IDs just before the redirect
                console.log('Selected Product IDs at Submit:', selectedProductIds);

                if (numSelectedProducts >= 2 && numSelectedProducts <= 4) {
                    // Redirect to the compare.index route with selected product IDs
                    var compareUrl = '{{ url("compare") }}?ids=:ids';
                    compareUrl = compareUrl.replace(':ids', selectedProductIds.join(','));

                    // Redirect to the compare.index route
                    window.location.href = compareUrl;
                } else {
                    alert('You need to select atleast 2 products and maximum of 4 for comparison.');
                }
            });

        } else {
            // Display a message if there are no products
            $('#products').append('<p>No products found.</p>');
            $('#submitButtonContainer').hide();
        }
    }
</script>

@endsection
