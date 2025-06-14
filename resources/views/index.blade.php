<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOTS & DRONES</title>
    <!-- Bootstrap 5.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <!-- fontawesome 6.2 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- owl carousel -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}"
    />
    <style>
        @media only screen and (max-width: 600px) {
          .d-sm-none {
            display:none;
          }
          .post-img{
               width: 380px !important;
    height: 80px !important;
          }
        }
        .post-img{
               width: 1135px;
    height: 150px;
          }
          @media only screen and (max-width: 600px) {
              
              .js-cookie-consent {
      
    max-width: 1500px !important;
   margin-left: 0px !important;
   height: 50% !important;
}
              
          }

  .js-cookie-consent {
    background-color: #a59e9e;
    border-radius: 10px;
    padding: 10px;
    height: 30%;
    margin-left: 200px;
    margin-bottom: 50px;
    opacity: 100%;
    max-width: 500px;
    position: fixed;
    bottom: 0;
    left: 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 99999;
}

.js-cookie-consent {
    display: inline-block;
    font-size: 17px;
    color: #fff;
    margin-right: 20px;
}

.js-cookie-consent-agree {
    display: inline-block;
    font-size: 14px;
    color: black;
    background-color: #007bff;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
}

.js-cookie-consent-agree {
    background-color: #fff;
    border: none;
    padding: 5px;
    border-radius: 10px;
}

.js-cookie-consent-disagree {
    display: inline-block;
    font-size: 14px;
    color: black;
    background-color: #007bff;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
}

.js-cookie-consent-disagree {
    background-color: #fff;
    border: none;
    padding: 5px;
    border-radius: 10px;
}
 @media only screen and (max-width: 600px) {
    .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled
    {
        display:block;
    }
    .owl-nav.disabled .owl-prev{
        left:0px
    }
    .owl-nav.disabled .owl-next {
  right: -5px;
}
 }

    </style>
    
  </head>
 <!-- <div id="cookies-permission">
    <p>We use cookies to ensure that we give you the best experience on our website. By continuing to browse this site, you agree to our use of cookies.</p>
    <button id="accept-cookies">Accept Cookies</button>
  </div>
  <script>
    
    import Cookies from 'js-cookie';

    const cookiesPermission = document.querySelector('#cookies-permission');
    const acceptCookiesBtn = document.querySelector('#accept-cookies');

    if (Cookies.get('cookies_accepted')) {
        cookiesPermission.style.display = 'none';
    } else {
        cookiesPermission.style.display = 'block';
    }

    acceptCookiesBtn.addEventListener('click', () => {
        Cookies.set('cookies_accepted', true, { expires: 365 });
        cookiesPermission.style.display = 'none';
    });

  </script>-->
  <body>
    <section class="homepage">
      <div id="app">
        @include('layouts.header')

       <div class="container">

    <div class="row justify-content-center">
        <!-- Start of banner -->
    <div class="banner">
      <div class="row mx-0">
        <div class="col-sm-12 ps-1">
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  
            <div class="carousel-inner">
              @foreach($banners as $i=>$banner)
              <div class="carousel-item @if($i==0) active @endif">
                <img class="d-block w-100" src="{{$banner->ImageUrl}}"  style="aspect-ratio: 1000/340; object-fit: fill;border-radius: 10px;" alt="First slide">
              </div>
              @endforeach              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
      </div>
    </div>
    </div>
       <!-- End of home banner section -->
         <div class="py-4 d-block  d-sm-none">
          <div class="row">
              @foreach($subcategories as $subcategory)
              <?php 
                $category = \App\Models\Category::where('id',$subcategory->category_id)->first();
              ?>
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all','item_type'=>$subcategory->slug ]) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$subcategory->ImageUrl}}");border-radius: 10px;height: 400px;'>
               </div></a><br>
              </div>
            @endforeach
             @foreach($categories as $category)
             
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all']) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$category->ImageUrl}}");border-radius: 10px;height: 400px;'>
               </div></a><br>
             </div>
            @endforeach
             
           
        </div>
      </div>
        <div class="py-4 d-block  d-none  d-sm-block  d-md-none">
          <div class="row">
              @foreach($subcategories as $subcategory)
              <?php 
                $category = \App\Models\Category::where('id',$subcategory->category_id)->first();
              ?>
            <div class="col-6 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all','item_type'=>$subcategory->slug ]) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$subcategory->ImageUrl}}");border-radius: 10px;height: 290px;'>
               </div></a><br>
              </div>
            @endforeach
             @foreach($categories as $category)
             
            <div class="col-6 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all']) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$category->ImageUrl}}");border-radius: 10px;height: 290px;'>
               </div></a><br>
             </div>
            @endforeach
             
           
        </div>
      </div>
      <div class="py-4 d-sm-block  d-none  d-md-block  d-lg-none">
          <div class="row">
              @foreach($subcategories as $subcategory)
              <?php 
                $category = \App\Models\Category::where('id',$subcategory->category_id)->first();
              ?>
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all','item_type'=>$subcategory->slug ]) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$subcategory->ImageUrl}}");border-radius: 10px;height:660px;'>
               </div></a><br>
              </div>
            @endforeach
             @foreach($categories as $category)
             
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all']) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$category->ImageUrl}}");border-radius: 10px;height:660px;'>
               </div></a><br>
             </div>
            @endforeach
             
           
        </div>
      </div>
       <div class="py-4 d-sm-block  d-none  d-md-none  d-lg-block">
          <div class="row">
              @foreach($subcategories as $subcategory)
              <?php 
                $category = \App\Models\Category::where('id',$subcategory->category_id)->first();
              ?>
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all','item_type'=>$subcategory->slug ]) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$subcategory->ImageUrl}}");border-radius: 10px;height:300px;'>
               </div></a><br>
              </div>
            @endforeach
             @foreach($categories as $category)
             
            <div class="col-12 col-lg-3 mb-3">
              <a href="{{ route('products', [ 'menu' => 'categories', 'slug' => $category->slug, 'sub_slug' => 'all']) }}" style="text-decoration: none;">
                  <div class="cato-card one" style='background-image: url("{{$category->ImageUrl}}");border-radius: 10px;height:300px;'>
               </div></a><br>
             </div>
            @endforeach
             
           
        </div>
      </div>
      @if (Session::has('warning'))
               
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  {{ Session::get('warning') }}  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif
      </div>
      <!-- container -->

     <!-- Start of product -->
<div class="home-search-section">
  <div class="container-md px-0">
    <form action="{{ route('products', [ 'menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all' ]) }}" method="GET" id="productForm">
      <div class="home-search-form" style="background-color: darkred !important;">
        <div class="d-flex flex-wrap justify-content-center align-items-center parent">
          <div class="title-sec">
            <h4 class="m-0 text-center text-lg-start">Buy Products</h4>
          </div>
          <?php
            $categories = App\Models\Category::where('status', 'Active')->where('show_in_home', 'Y')->orderby('name','asc')->get();
            $subcategories = App\Models\SubCategory::where('category_id', '1')->where('status', 'Active')->orderby('name','asc')->get();
            $locations = App\Models\Products::select('state')->groupBy('state')->where('status', 'Y')->where('state', '!=', null)->orderby('state', 'asc')->where('category_id', '1')->get();
          ?>      
          <div class="form-sec">
            <select class="form-select" name="item_type" id="item_type" onchange="handleFormChange(this.value)" required>
              <option value="">Select Products Type</option>
              <option value="used-Accessories-1181">Accessories & Equipment</option>
              @foreach($subcategories as $subcategory)
                <option value="{{$subcategory->slug}}">{{$subcategory->name}}</option>
              @endforeach
              <option value="used-Robots-4046">Robots</option>
            </select>
          </div>
          <div class="form-sec">
            <select name="brand" id="location" class="form-select" required>
              <option value="">Select Brand</option>                  
               
            </select>
          </div>
          <div class="btn-sec text-center text-lg-end">
            <button class="btn btn-search" type="submit" style="color: darkred !important;">Search</button>
          </div>
        </div>
      </div>
    </form>
  </div>
<div class="container text-center" style="padding-top: 40px">
    <h5 style="color: dark;"><b>LATEST PRODUCTS</b></h5>
</div>
  <div class="container">
    <div class="home-carousel my-4">
      <div class="owl-carousel home-related-carousel related-products-carousel">
        

        @foreach($allProducts as $product)
          <?php
            $url = route('product.details', ['slug' => $product['slug']]);
            $contact_url = route('enquiry', ['id' => $product['id']]);
          ?>
          @php
            $heart = in_array($product['id'], $wishlists);
            $type = ($heart == true) ? 'false' : 'true';
            if($heart) {
              $color = "red";
            } else {
              $color = "blue";
            }
          @endphp
          <div>
            <div class="product-list-card">
              <div class="img-sec">

                @if(isset($product['images'][0]['ImageUrl']))
                  <a href="{{$url}}">
                    <img src="{{ $product['images'][0]['ImageUrl'] }}" class="product-list-img" alt="{{ $product['images'][0]['ImageUrl'] }}" />
                  </a>
                @endif

                <!--<div class="action-btns">
                  <a href="{{ route('wishlist.add', ['product_id' => $product['id'], 'type' => $type]) }}" class="heart-btn" style="color:{{$color}}">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>-->
              </div>
              <a href="{{$url}}" class="product-list-name" style="height: 50px">{{ Str::limit($product['title'], 40) }}</a>
              <div class="d-flex align-items-center justify-content-between pl-sec">
                
                       @if($product->pricing_request=="N")
                                <p class="price m-0">₹{{$product->price}}</p> 
                                @else
                                    <p class="price" >Price on request</p>
                                @endif
                    
                <div class="location d-flex align-items-center gap-1 m-0">
                  <p class="location-icon m-0">
                    <i class="fas fa-map-marker-alt"></i>
                  </p>
                  <div>
                    <p class="m-0 city">{{$product['location']}}</p>
                    <?php
                      $state = App\Models\State::where('id', $product['state'])->first();
                    ?>
                    @if($state != null)
                      <p class="m-0 street">{{$state->name}}</p>
                    @endif
                  </div>
                </div>
              </div>
              <!--<a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>-->
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

      <!-- End of product -->

      <!-- Start of Trending Products -->

<div class="container text-center"  style="padding-top: 40px;">
    <h5 style="color: dark;"><b>TRENDING PRODUCTS</b></h5>
</div>

  <div class="container">
    <div class="home-carousel my-4">
<div class="owl-carousel home-related-carousel related-products-carousel">
  @foreach($trending as $trend)
    @php
      $product = App\Models\Products::find($trend->id);
      $url = route('product.details', ['slug' => $product->slug]);
      $contact_url = route('enquiry', ['id' => $product->id]);
      $heart = in_array($product->id, $wishlists);
      $type = ($heart == true) ? 'false' : 'true';
      $color = ($heart) ? 'red' : 'blue';
    @endphp
    <div>
      <div class="product-list-card">
        <div class="img-sec">
          @if(isset($product->images[0]['ImageUrl']))
            <a href="{{$url}}">
              <img src="{{ $product->images[0]['ImageUrl'] }}" class="product-list-img" alt="{{ $product->images[0]['ImageUrl'] }}" />
            </a>
          @endif
          <!--<div class="action-btns">
            <a href="{{ route('wishlist.add', ['product_id' => $product->id, 'type' => $type]) }}" class="heart-btn" style="color:{{$color}}">
              <i class="fas fa-heart"></i>
            </a>
          </div>-->
        </div>
        <a href="{{$url}}" class="product-list-name" style="height: 50px">{{ Str::limit($product->title, 40) }}</a>
        <div class="d-flex align-items-center justify-content-between pl-sec">
         
                       @if($product->pricing_request=="N")
                                <p class="price m-0">₹{{$product->price}}</p> 
                                @else
                                    <p class="price" >Price on request</p>
                                @endif
                    
          <div class="location d-flex align-items-center gap-1 m-0">
            <p class="location-icon m-0">
              <i class="fas fa-map-marker-alt"></i>
            </p>
            <div>
              <p class="m-0 city">{{$product->location}}</p>
              <?php
                $state = App\Models\State::where('id', $product->state)->first();
              ?>
              @if($state != null)
                <p class="m-0 street">{{$state->name}}</p>
              @endif
            </div>
          </div>
        </div>
        <!--<a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>-->
      </div>
    </div>
  @endforeach
</div>
    </div>
  </div>      

<div class="container text-center"  style="padding-top: 40px;">
    <h5 style="color: dark;"><b>COMPARE PRODUCTS</b></h5>
</div>

  <div class="container">
    <div class="home-carousel my-4">
<div class="owl-carousel home-related-carousel related-products-carousel">
  @foreach($compareProducts as $trend)
    @php
      $product = App\Models\Products::find($trend->id);
      $url = route('product.details', ['slug' => $product->slug]);
      $contact_url = route('enquiry', ['id' => $product->id]);
      $heart = in_array($product->id, $wishlists);
      $type = ($heart == true) ? 'false' : 'true';
      $color = ($heart) ? 'red' : 'blue';
    @endphp
    <div>
      <div class="product-list-card">
        <div class="img-sec">
          @if(isset($product->images[0]['ImageUrl']))
            <a href="{{$url}}">
              <img src="{{ $product->images[0]['ImageUrl'] }}" class="product-list-img" alt="{{ $product->images[0]['ImageUrl'] }}" />
            </a>
          @endif
          <!--<div class="action-btns">
            <a href="{{ route('wishlist.add', ['product_id' => $product->id, 'type' => $type]) }}" class="heart-btn" style="color:{{$color}}">
              <i class="fas fa-heart"></i>
            </a>
          </div>-->
        </div>
        <a href="{{$url}}" class="product-list-name" style="height: 50px">{{ Str::limit($product->title, 40) }}</a>
        <div class="d-flex align-items-center justify-content-between pl-sec">
         
                       @if($product->pricing_request=="N")
                                <p class="price m-0">₹{{$product->price}}</p> 
                                @else
                                    <p class="price" >Price on request</p>
                                @endif
                    
          <div class="location d-flex align-items-center gap-1 m-0">
            <p class="location-icon m-0">
              <i class="fas fa-map-marker-alt"></i>
            </p>
            <div>
              <p class="m-0 city">{{$product->location}}</p>
              <?php
                $state = App\Models\State::where('id', $product->state)->first();
              ?>
              @if($state != null)
                <p class="m-0 street">{{$state->name}}</p>
              @endif
            </div>
          </div>
        </div>
        <!--<a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>-->
      </div>
    </div>
  @endforeach

</div>
<div class="container text-center" style="padding-top: 20px;">
    <a class="btn btn-primary text-center" href="{{ route('compare') }}">Compare Drones</a>
</div>

    </div>
  </div>      

<!-- 
<div class="container text-center" style="padding-top: 40px;">
    <h5 style="color: #01386e;"><b>COMPARE PRODUCTS</b></h5>
</div>

<div class="container">
    <div class="home-carousel my-4">
        <div class="owl-carousel home-related-carousel related-products-carousel">
            @for ($i = 0; $i < count($compareProducts); $i += 2)
                <div class="product-list-card">
                    @for ($j = $i; $j < min($i + 2, count($compareProducts)); $j++)
                        @php
                            // Your existing code for fetching product details
                            $product = App\Models\Products::find($compareProducts[$j]->id);
                            $url = route('product.details', ['slug' => $product->slug]);
                        @endphp

                        <div class="product-list-card">
                            <div class="img-sec">
                                @if(isset($product->images[0]['ImageUrl']))
                                    <a href="{{$url}}">
                                        <img src="{{ $product->images[0]['ImageUrl'] }}" class="product-list-img"
                                            alt="{{ $product->images[0]['ImageUrl'] }}" />
                                    </a>
                                @endif
                            </div>
                            <a href="{{$url}}" class="product-list-name"
                                style="height: 50px">{{ Str::limit($product->title, 40) }}</a>
                            <div class="d-flex align-items-center justify-content-between pl-sec">
                                @if($product->pricing_request=="N")
                                    <p class="price m-0">₹{{$product->price}}</p>
                                @else
                                    <p class="price">Price on request</p>
                                @endif

                                <div class="location d-flex align-items-center gap-1 m-0">
                                    <p class="location-icon m-0">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </p>
                                    <div>
                                        <p class="m-0 city">{{$product->location}}</p>
                                        <?php
                                        $state = App\Models\State::where('id', $product->state)->first();
                                        ?>
                                        @if($state != null)
                                            <p class="m-0 street">{{$state->name}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <button class="btn btn-primary compare-btn" data-product1="{{$compareProducts[$i]->id}}"
                        data-product2="{{isset($compareProducts[$i+1]) ? $compareProducts[$i+1]->id : ''}}">Compare</button>
                </div>
            @endfor
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all compare buttons
        var compareButtons = document.querySelectorAll('.compare-btn');

        // Add click event listener to each compare button
        compareButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Get the selected product IDs for comparison
                var productId1 = button.dataset.product1;
                var productId2 = button.dataset.product2;

                // Redirect to the compare page with selected product IDs
                window.location.href = "{{ route('compare.index') }}?product1=" + productId1 + "&product2=" + productId2;
            });
        });
    });
</script>

 -->
      </div>
<!-- Start of trending products-->

      <!-- Start of explore our partners-->
      <!-- Start of explore our partners-->
<div class="container text-center" style="padding-top: 40px;">
    <h5 style="color: dark;"><b>SUPPORTING PARTNERS</b></h5>
</div>

<div class="container">
  <div class="home-carousel my-4">
    <div class="owl-carousel home-related-carousel related-products-carousel">
      @foreach($supporting_partner as $i=>$sp)
      <div class="item">
        <div class="product-list-card" style="padding-top: 35px;">
          <div class="img-sec">
            <img class="product-list-img" src="{{$sp->ImageUrl}}" alt="{{$sp->name}}" style="height: 200px"/>
          </div>
          <p class="product-list-name" style="height: 50px;font-size: 18px; font-weight: bold;">{{$sp->name}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>    <!-- End of explore our partner 
 <div class="container">
   <div class="py-4 d-sm-none d-md-block">
          <div class="row">
              
            <div class="col-12 col-lg-3 mb-3">
               
                  <div class="cato-card one" style='background-image: url("{{ asset('assets/images/COMMERCIAL_UAV_EXPO_2023_M.png')}}");border-radius: 10px;height: 250px;'>
               </div> <br>
              </div>
               <div class="col-12 col-lg-3 mb-3">
               
                  <div class="cato-card one" style='background-image: url("{{ asset('assets/images/Drone-Expo-2023.jpeg')}}");border-radius: 10px;height: 250px;'>
               </div> <br>
              </div>
              
             
           
        </div>
      </div>
      <div class="py-4 d-sm-block d-md-none ">
          <div class="row">
              
            <div class="col-12 col-lg-3 mb-3">
               
                  <div class="cato-card one" style='background-image: url("{{ asset('assets/images/COMMERCIAL_UAV_EXPO_2023_M.png')}}");border-radius: 10px;height: 350px;'>
               </div> <br>
              </div>
               <div class="col-12 col-lg-3 mb-3">
               
                  <div class="cato-card one" style='background-image: url("{{ asset('assets/images/Drone-Expo-2023.jpeg')}}");border-radius: 10px;height: 350px;'>
               </div> <br>
              </div>
              
             
           
        </div>
      </div>
 </div>

      

      <!-- Start of commercial 
      <div class="home-search-section">
         
        <div class="container-md px-0">
          <div class="home-search-form">
            <div class="d-flex flex-wrap justify-content-center align-items-center parent">
              <div class="title-sec">
                <h4 class="m-0 text-center text-lg-start">Buy Commercial Drones</h4>
              </div>
              <div class="form-sec"></div>
              <div class="form-sec"></div>
              <div class="btn-sec text-center text-lg-end"></div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="home-carousel my-4">
            <div class="owl-carousel home-related-carousel related-products-carousel">
            @foreach($commercial as $usedDrone)
            <?php
                $url = route('product.details', ['slug' => $usedDrone->slug ]);
                $contact_url = route('enquiry', ['id' => $usedDrone->id ]);


              ?>
               @php
                      $heart = in_array($usedDrone->id, $wishlists);
                      $type = ($heart == true) ? 'false' : 'true';
                      if($heart)
                      {
                        $color = "red";
                      }
                      else
                      {
                        $color="blue";
                      }
            @endphp
              <div>
                <div class="product-list-card">
                  <div class="img-sec">
                    @if(isset($usedDrone->images) && count($usedDrone->images) > 0 && isset($usedDrone->images[0]['ImageUrl']))
    <img src="{{$usedDrone->images[0]['ImageUrl']}}" class="product-list-img" alt="{{$usedDrone->images[0]['ImageUrl']}}" />
@endif

                    <div class="action-btns">
                     <a href="{{ route('wishlist.add', [ 'product_id' => $usedDrone->id, 'type' => $type ] ) }}" class="heart-btn"
                        style="color:{{$color}}" ><i class="fas fa-heart"></i
                      ></a>
                     
                    </div>
                  </div>
                 <a href="{{$url}}" class="product-list-name" style="height: 50px"  
                    >{{ Str::limit($usedDrone->title, 40) }}</a
                  >
                  <div
                    class="d-flex align-items-center justify-content-between pl-sec"
                  >
                    <p class="price m-0">₹{{$usedDrone->price}}</p>
                    <div class="location d-flex align-items-center gap-1 m-0">
                      <p class="location-icon m-0">
                        <i class="fas fa-map-marker-alt"></i>
                      </p>
                     
                      <div>
                        <p class="m-0 city">{{$usedDrone->location}}</p>
                         <?php 
                    $state = App\Models\State::where('id',$usedDrone->state)->first();
                   ?>
                   @if($state!=null)
                        <p class="m-0 street">{{$state->name}}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>
                </div>
              </div>
             @endforeach         
             
            </div>
          </div>
        </div>

        
      </div> End of commercial -->

 <!-- Start of Robots 
      <div class="home-search-section">
         

        <div class="container-md px-0">
          <div class="home-search-form">
            <div class="d-flex flex-wrap justify-content-center align-items-center parent">
              <div class="title-sec">
                <h4 class="m-0 text-center text-lg-start">Buy Robots</h4>
              </div>
              <div class="form-sec"></div>
              <div class="form-sec"></div>
              <div class="btn-sec text-center text-lg-end"></div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="home-carousel my-4">
            <div class="owl-carousel home-related-carousel related-products-carousel">
            @foreach($robots as $usedRobot)
            <?php
                $url = route('product.details', ['slug' => $usedRobot->slug ]);
                $contact_url = route('enquiry', ['id' => $usedRobot->id ]);


              ?>
               @php
                      $heart = in_array($usedRobot->id, $wishlists);
                      $type = ($heart == true) ? 'false' : 'true';
                      if($heart)
                      {
                        $color = "red";
                      }
                      else
                      {
                        $color="blue";
                      }
            @endphp
              <div>
                <div class="product-list-card">
                  <div class="img-sec">
                    @if(isset($usedRobot->images) && count($usedRobot->images) > 0 && isset($usedRobot->images[0]['ImageUrl']))
    <img src="{{$usedRobot->images[0]['ImageUrl']}}" class="product-list-img" alt="{{$usedRobot->images[0]['ImageUrl']}}" />
@endif

                    <div class="action-btns">
                     <a href="{{ route('wishlist.add', [ 'product_id' => $usedRobot->id, 'type' => $type ] ) }}" class="heart-btn"
                        style="color:{{$color}}" ><i class="fas fa-heart"></i
                      ></a>
                     
                    </div>
                  </div>
                 <a href="{{$url}}" class="product-list-name" style="height: 50px"  
                    >{{ Str::limit($usedRobot->title,40)}}</a
                  >
                  <div
                    class="d-flex align-items-center justify-content-between pl-sec"
                  >
                    <p class="price m-0">₹{{$usedRobot->price}}</p>
                    <div class="location d-flex align-items-center gap-1 m-0">
                      <p class="location-icon m-0">
                        <i class="fas fa-map-marker-alt"></i>
                      </p>
                      <div>
                        <p class="m-0 city">{{$usedRobot->location}}</p>
                        <?php 
                    $state = App\Models\State::where('id',$usedRobot->state)->first();
                   ?>
                        @if($state!=null)
                        <p class="m-0 street">{{$state->name}}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>
                </div>
              </div>
             @endforeach   
            
            </div>
          </div>
        </div>
      
      </div> end robots ---->


      <!-- Start of Used Acessories 
      <div class="home-search-section">
        
        <div class="container-md px-0">
          <div class="home-search-form">
            <div class="d-flex flex-wrap justify-content-center align-items-center parent">
              <div class="title-sec">
                <h4 class="m-0 text-center text-lg-start">Buy Accessories & Other Equipment</h4>
              </div>
              <div class="form-sec"></div>
              <div class="form-sec"></div>
              <div class="btn-sec text-center text-lg-end"></div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="home-carousel my-4">
            <div class="owl-carousel home-related-carousel related-products-carousel">
             @foreach($accessories as $usedDrone)
            <?php
                $url = route('product.details', ['slug' => $usedDrone->slug ]);
                $contact_url = route('enquiry', ['id' => $usedDrone->id ]);


              ?>
               @php
                      $heart = in_array($usedDrone->id, $wishlists);
                      $type = ($heart == true) ? 'false' : 'true';
                      if($heart)
                      {
                        $color = "red";
                      }
                      else
                      {
                        $color="blue";
                      }
            @endphp
              <div>
                <div class="product-list-card">
                  <div class="img-sec">
                    @if(isset($usedDrone->images) && count($usedDrone->images) > 0 && isset($usedDrone->images[0]['ImageUrl']))
    <img src="{{ $usedDrone->images[0]['ImageUrl'] }}" class="product-list-img" alt="{{ $usedDrone->images[0]['ImageUrl'] }}" />
@endif

                    <div class="action-btns">
                      <a href="{{ route('wishlist.add', [ 'product_id' => $usedDrone->id, 'type' => $type ] ) }}" class="heart-btn"
                        style="color:{{$color}}" ><i class="fas fa-heart"></i>
                      </a>                     
                    </div>
                  </div>
                  <a href="{{$url}}" class="product-list-name" style="height: 50px">{{ Str::limit($usedDrone->title,40)}}</a>
                  <div
                    class="d-flex align-items-center justify-content-between pl-sec"
                  >
                    <p class="price m-0">₹{{$usedDrone->price}}</p>
                    <div class="location d-flex align-items-center gap-1 m-0">
                      <p class="location-icon m-0">
                        <i class="fas fa-map-marker-alt"></i>
                      </p>
                      <div>
                        <p class="m-0 city">{{$usedDrone->location}}</p>
                        <?php 
                    $state = App\Models\State::where('id',$usedDrone->state)->first();
                   ?>
                        @if($state!=null)
                        <p class="m-0 street">{{$state->name}}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>
                </div>
              </div>
             @endforeach   
            
            </div>
          </div>
        </div>
 
      </div> End of User Acessories -->
      </div>
      <!-- 

       <div class="container-md px-0">
          <div>
            <a class="post-ad ps-3 ps-lg-5 ad-three" href="{{route('post-ad')}}"></a>
          </div>
        </div>

      <div class="container">
        <div class="other-products mb-5 py-5">
           <div
            class="owl-carousel other-products-carousel"
            id="other-products-carousel"
          >
            <div>
              <div class="d-flex align-items-center w-100">
                <div class="col-3 left-side">
                  <div class="text-end op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                  <div class="text-end op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
                <div class="col-6 px-4">
                  <img src="assets/img/drone.png" class="op-img" alt="" />
                </div>
                <div class="col-3 right-side">
                  <div class="op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                  <div class="op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
             <div>
              <div class="d-flex align-items-center w-100">
                <div class="col-3 left-side">
                  <div class="text-end op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                  <div class="text-end op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
                <div class="col-6 px-4">
                  <img src="assets/img/drone.png" class="op-img" alt="" />
                </div>
                <div class="col-3 right-side">
                  <div class="op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                  <div class="op-text">
                    <h5>
                      1. Accessories
                      <img
                        src="assets/img/drone-icon.png"
                        alt=""
                        class="op-drone-icon"
                      />
                    </h5>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
 
       <div class="new-products">
        <div class="container">
          <h5 class="home-title text-white">New Products</h5>

          <div class="row">
            <div class="col-md-3 mb-3 text-center">
              <img
                src="storage/app/public/product/image/166376356311.jpg"
                class="img-fluid mx-auto np-img"
                alt=""
                 style="height: 114px; object-fit: fill;"
              />
              <h5 class="mt-1">Service1</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
            <div class="col-md-3 mb-3 text-center">
              <img
                src="storage/app/public/product/image/166376356311.jpg"
                class="img-fluid mx-auto np-img"
                alt=""
                 style="height: 114px; object-fit: fill;"
              />
              <h5 class="mt-1">Service1</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
            <div class="col-md-3 mb-3 text-center">
              <img
                src="storage/app/public/product/image/166376356311.jpg"
                class="img-fluid mx-auto np-img"
                alt=""
                 style="height: 114px; object-fit: fill;"
              />
              <h5 class="mt-1">Service1</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
            <div class="col-md-3 mb-3 text-center">
              <img
                 src="storage/app/public/product/image/166376356311.jpg"
                class="img-fluid mx-auto np-img"
                alt=""
                 style="height: 114px; object-fit: fill;"
              />
              <h5 class="mt-1">Service1</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
        </div>
      </div>-->
    </section>
@include('cookieConsent::index')

    <!-- footer Container -->
    @include('layouts.footer')
    <!-- common ( header, footer ) js -->
    <script src="{{ asset('assets/script/common.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/script/script.js')}}"></script>
    <!-- Bootstrap 5.2 -->
    <script src="{{ asset('assets/script/bootstrap.bundle.min.js')}}"></script>
    <!-- owl carousel -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <!--  -->
    <script>

      $(document).ready(function () {
        $(".home-related-carousel").owlCarousel({
          loop: true,
          margin: 10,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            400: {
              items: 2,
              nav: false,
            },
            600: {
              items: 2,
              nav: false,
            },
            1000: {
              items: 4,
              nav: true,
              loop: false,
            },
          },
        });

        $("#other-products-carousel.owl-carousel").owlCarousel({
          loop: true,
          margin: 0,
          responsiveClass: true,
          dots: true,
          navigation:false,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            400: {
              items: 1,
              nav: false,
            },
            600: {
              items: 1,
              nav: false,
            },
            1000: {
              items: 1,
              nav: false,
              loop: false,
            },
          },
        });

       
      });

      function getLocation(value)
      {
        $('#location').empty();
        if(value=="Consumer-drones-9987")
        {
          var filteredArray = @json($consumer_states);
        }
        else
        {
          var filteredArray = @json($commericial_states);
        }
        
        $('#location').append('<option value="">Select Location</option>');
        $('#location').append('<option value="All">All</option>');
        var options = filteredArray.forEach( function(item, index){
         $('#location').append('<option value="'+item.id+'">'+item.name+'</option>');
        });
      }
      
      function cookieDisagree()
      {
        document.getElementById('cookie-consent').style.display='none';
        
      }

    </script>

<script>

function handleFormChange(value) {
  var form = document.getElementById('productForm');
  var actionUrl = "{{ route('products', [ 'menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all' ]) }}";
  var filteredArray;

  $('#location').empty();

   if (value == "Consumer-drones-9987") {
    filteredArray = @json($brands);
  } 
  else if (value == "used-Accessories-1181") {
    filteredArray = @json($accessoriesbrands);
  } 
  else if (value == "used-Robots-4046") {
    filteredArray = @json($robotsbrands);
  } else {
    filteredArray = @json($commericalbrands);
  }


  $('#location').append('<option value="">Select Brand</option>');
  $('#location').append('<option value="All">All</option>');

  filteredArray.forEach(function(item, index) {
    $('#location').append('<option value="' + item.brand + '">' + item.brand + '</option>');
  });

  if (value === 'used-Accessories-1181' || value === 'used-Robots-4046') {
       document.getElementById("item_type").removeAttribute("name"); 
    actionUrl = "{{ route('products', ['menu' => 'categories', 'slug' => ':slug', 'sub_slug' => 'all']) }}";
    actionUrl = actionUrl.replace(':slug', value);
  } 

  form.action = actionUrl;
}

</script>

  </body>
</html>
