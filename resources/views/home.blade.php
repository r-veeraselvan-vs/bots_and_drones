@extends('layouts.user')

@section('content')
 <section class="hero_container">
        <div id="carouselExampleControls" class="carousel_container carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($banners as $i => $banner)
                     <div class="carousel-item @if($i == 0) active @endif">
                        <img src="{{ $banner->ImageUrl }}" alt="{{ $banner->ImageUrl }}" class="carousel_img d-block w-100">
                        <div class="image_overlay">
                    <div class="sale_box">
                        <h4>
                            Diamonds
                        </h4>
                        <span>
                            Up to 25% Off
                        </span>
                    </div>
                    
                </div>
                    </div>
   
    
                @endforeach

              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <main>


     <section class="only_mobile container">
        <div class="row my-5">
            <h1 class="car-header car-header_mobile text-center">Browse Collection</h1>
        </div>
        <div class="row mobile_collectiona_list">
            <div class="col mobile_collection_item">
                <h5 class="m_c_name">Gold</h5>
                <img src="{{ asset('assetsCustomer/assets/col/c1.jpg')}}" alt="" class="m_c_img">
            </div>
            <div class="col mobile_collection_item">
                <h5 class="m_c_name">Gold</h5>
                <img src="{{ asset('assetsCustomer/assets/col/c2.jpg')}}" alt="" class="m_c_img">
            </div>
            <div class="col mobile_collection_item">
                <h5 class="m_c_name">Gold</h5>
                <img src="{{ asset('assetsCustomer/assets/col/c3.jpg')}}" alt="" class="m_c_img">
            </div>
        </div>
     </section>

<section class="container">
          <div class="row my-5">
                 <h1 class="car-header text-center">New Arrivals</h1>
          </div>
          <div class="row g-4 py-4 mx-auto owl-carousel owl-theme caru_loop">
            @foreach($products as $i=>$product)
                    @php
                    $collection = $product->prices;
                    $last = $collection->last();
                    $last_price = (int)$silver_price->silver_price * (int)$last['weight'];
                        $url = route('product.details', [ 'price_id' => (@$silver_price->id ? @$silver_price->id : 'all'), 'slug' => $product->slug ]);
                        $show  =false;
                        $first = $collection->first();
                    
                    @endphp
                    <?php
                    if($last['weight']==null)
                        {
                            $price = $last['price'] ;
                        }
                        else
                        {
                            $price = (int)$first['weight'] * $silver_price->silver_price;
                        }?>
                    <a href="{{$url}}" style="text-decoration:none">
              <div class="col product-item mx-auto" style="margin-left: 20px !important;">
                  <div class="product-image">
                      <img src="{{ $product->ThumbnailUrl }}" alt="product image" class=" @if($i == 0) new_come-product_img @endif img-fluid d-block max-auto">
                      <button class="new_img_overlay">
                        <i class="bi bi-heart  action-heart"></i>                      
                      </button>
                  </div>
                  <div class="product-info p4">
                      <span class="product-name d-block">{{ $product->name }}</span>
                      @if($last['weight']==null)
                                 <span class="product-price d-block">₹{{ $price }}</span>
                     @elseif($last['weight']!=null && $collection->count()==1)
                     <span class="product-price d-block">₹{{ $price }}</span>
                    @else
                     <span class="product-price d-block">₹{{ $price }} - ₹ {{$last_price}}</span>
                    @endif

                  </div>
              </div></a>
             
              @endforeach
          </div>
        </section>
        <section class="container offer_save_container">
            <div class="row my-5">
                <h2 class="hero-header text-center">Welcome to the World of Enchantment</h2>
            </div>
            <div class="row my-5">
                <p class="p hero_info">
                    We make timeless pieces of antique jewellery. 
                    Our collection offers a wide choice of magnificient antique pieces of excuisite designs. 
                    Exceptionally fashionable and trendy designs to make you look beautiful every day. 
                    Our collection offers a wide choice of magnificient antique pieces of excuisite designs.
                </p>
            </div>
            <div class="row my-5 d-flex align-items-center justify-content-center">
                            <a class="red_btn" href="{{ url('about-us') }}" style="text-decoration:none;color:white">Read more</a>

            </div>
        </section>
        <section class="container collections_container">
            <div class="row my-5">
                <h2 class="hero-header text-center">Collections</h2>
            </div>
            <div class="row my-5  collections_list">
                 <figure class="collection_container col">
                      <a  href="{{ url('product/categories/diamond/all') }}" style="text-decoration:none"><img src="{{ asset('assetsCustomer/assets/col/c2.jpg')}}" alt="collection image" class="figure-img img-fluid">
                      <figcaption class="figure-caption">Diamond Necklace Collections</figcaption></a>
                 </figure>
                 <figure class="collection_container col">
                      <a  href="{{ url('product/categories/diamond/all') }}" style="text-decoration:none"><img src="{{ asset('assetsCustomer/assets/col/c1.jpg')}}" alt="collection image" class="figure-img img-fluid">
                      <figcaption class="figure-caption">Diamond Rings Collections</figcaption></a>
                 </figure>
                 <figure class="collection_container col">
                      <a  href="{{ url('product/categories/gold/6') }}" style="text-decoration:none"><img src="{{ asset('assetsCustomer/assets/col/c3.jpg')}}" alt="collection image" class="figure-img img-fluid">
                      <figcaption class="figure-caption">Gold Necklace Collections</figcaption></a>
                 </figure>
                 <figure class="collection_container col">
                      <a  href="{{ url('product/categories/gold/4') }}" style="text-decoration:none"><img src="{{ asset('assetsCustomer/assets/col/c4.jpg')}}" alt="collection image" class="figure-img img-fluid">
                      <figcaption class="figure-caption">Gold Bangles Collections</figcaption></a>
                 </figure>
            </div>
        </section>
        <section class="container scheme_container mobile_scheme_container">
            <div class="row mt-5">
                <h2 class="hero-header text-center">Join Our Savings Scheme</h2>
            </div>
            <div class="row my-5 hero_con_bio">
                <p class="p hero_info">
                    Savings flexi plan is one of the best options to purchase and accumulate 
                    gold or silver. This is a twelve months scheme where you need to select the plan 
                    for participiating in this scheme. You have two options, value-based option or 
                    weight-based option for both gold and silver. Our schemes build your gold & silver 
                    assets and creates financial stability. Systematic investment in gold & silver at 
                    regular intervals helps to build commitement and discipline in customers and thereby 
                    enjoy fruits of wealth through planned strategy
                </p>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-center">
                          <a class="red_btn" href="{{ route('savings.pay') }}" style="text-decoration:none;color:white">Join Now</a>

            </div>
        </section>
        <section class="container">
            <h5 class="only_mobile text-left">Browse Categories</h5>
            <ul class="carusel_header_nav my-5">
               <li class="header_nav nav_all_btn active">All</li>
               <li class="header_nav nav_single_btn" id="rings_category">Rings</li>
               <li class="header_nav nav_single_btn">Necklaces</li>
               <li class="header_nav nav_single_btn">Earrings</li>
               <li class="header_nav nav_single_btn">Bracelets</li>
            </ul>
              <div id="swiper_cotainer">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($products as $i=>$product)
                    @php
                    $collection = $product->prices;
                    $last = $collection->last();
                    $last_price = (int)$silver_price->silver_price * (int)$last['weight'];
                        //$url = route('product.details', [ 'price_id' => (@$silver_price->id ? @$silver_price->id : 'all'), 'slug' => $product->slug ]);
                        $show  =false;
                        $first = $collection->first();
                    
                    @endphp
                    <?php
                    if($last['weight']==null)
                        {
                            $price = $last['price'] ;
                        }
                        else
                        {
                            $price = (int)$first['weight'] * $silver_price->silver_price;
                        }?>
                        <a href="{{$url}}" style="text-decoration:none">
                  <div class="swiper-slide product-item swiper-slide" style="width: 275.5px; margin-right: 40px;">
                    <div class="product-image">
                    <img src="{{ $product->ThumbnailUrl }}" alt="product image" style="width: 100%; height: 150px">
                </div>
            <div class="product-info p3 bottom_carouselProduct_info">
                <span class="product-name d-block">{{ $product->name }}</span>
                <div class="product_acions_container py-2">
                    @if($last['weight']==null)
                                   <span class="product-price" >₹{{ $price }}</span>
                     @elseif($last['weight']!=null && $collection->count()==1)
                      <p class="item-price"><span class="product-price">₹{{ $price }}</span></p>
                    @else
                     <p class="item-price"><span class="product-price">₹{{ $price }} - ₹ {{$last_price}}</span></p>
                    @endif
                    <button class="product_shop_button d-block">
                        <img src="{{ asset('assetsCustomer/assets/icons/Icon.svg')}}">
                </button>
            </div>
            </div>
        </div></a>
        @endforeach

                    </div>
                  </div>
              </div>
              <div class="d-flex  align-items-center justify-content-center mt-5">
                  <a class="red_btn" href="{{ url('product/categories/gold/all') }}" style="text-decoration:none;color:white">Explore shop</a>
              </div>
        </section>
        <section class="container">
            <div class="row my-5">
                <h2 class="hero-header text-center">Seasonal Offers</h2>
            </div>
            <div id="carouselControls" class="carousel_container carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                     @foreach($SeasonalCollections as $j => $SeasonalCollection)
                  <div class="carousel-item  @if($j == 0) active @endif">
                    <img src="{{ $SeasonalCollection->ImageUrl }}" class="carousel_img d-block w-100" alt="dimonds">
                    <div class="image_overlay">
                        <div class="sale_box mb-5">
                            <h4>
                                Diamonds
                            </h4>
                        </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                 </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        <section class="container my-5">
            <div class="row my-5">
                <h2 class="hero-header text-center">Testimonials</h2>
            </div>
            <div class="row my-5 px-3">

                 <div class="total_testimonial_carousel">
                    <div class="mx-auto owl-carousel owl-theme testimonialCarousel">
                                       <!-- user testimonial card-->
                <div class="testi_contaner">
                    <div class="testi_user_info">
                        <img src="{{ asset('assetsCustomer/assets/u3.jpg')}}" alt="" class="testi_user_img">
                        <div class="testi_user_data">
                            <h4 class="testi_user_name">Radhika Dhiman</h4>
                            <span class="testi_user_title d-block">Thiruvananthapuram</span>
                        </div>
                    </div>
                    <div class="testi_user_rating">
                        <div class="small-ratings"> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                        </div>
                    </div>
                    <p class="testi_user_bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco
                    </p>
                </div>
                <!-- end of the card -->
                                <!-- user testimonial card-->
                                <div class="testi_contaner">
                                    <div class="testi_user_info">
                                        <img src="{{ asset('assetsCustomer/assets/u3.jpg')}}" alt="" class="testi_user_img">
                                        <div class="testi_user_data">
                                            <h4 class="testi_user_name">Radhika Dhiman</h4>
                                            <span class="testi_user_title d-block">Thiruvananthapuram</span>
                                        </div>
                                    </div>
                                    <div class="testi_user_rating">
                                        <div class="small-ratings"> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                        </div>
                                    </div>
                                    <p class="testi_user_bio">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco
                                    </p>
                                </div>
                                <!-- end of the card -->
                                                <!-- user testimonial card-->
                <div class="testi_contaner">
                    <div class="testi_user_info">
                        <img src="{{ asset('assetsCustomer/assets/u3.jpg')}}" alt="" class="testi_user_img">
                        <div class="testi_user_data">
                            <h4 class="testi_user_name">Radhika Dhiman</h4>
                            <span class="testi_user_title d-block">Thiruvananthapuram</span>
                        </div>
                    </div>
                    <div class="testi_user_rating">
                        <div class="small-ratings"> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                        </div>
                    </div>
                    <p class="testi_user_bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco
                    </p>
                </div>
                <!-- end of the card -->
                                <!-- user testimonial card-->
                                <div class="testi_contaner">
                                    <div class="testi_user_info">
                                        <img src="{{ asset('assetsCustomer/assets/u3.jpg')}}" alt="" class="testi_user_img">
                                        <div class="testi_user_data">
                                            <h4 class="testi_user_name">Radhika Dhiman</h4>
                                            <span class="testi_user_title d-block">Thiruvananthapuram</span>
                                        </div>
                                    </div>
                                    <div class="testi_user_rating">
                                        <div class="small-ratings"> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                            <i class="fa fa-star rating-color"></i> 
                                        </div>
                                    </div>
                                    <p class="testi_user_bio">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco
                                    </p>
                                </div>
                                <!-- end of the card -->
                                                <!-- user testimonial card-->
                <div class="testi_contaner">
                    <div class="testi_user_info">
                        <img src="{{ asset('assetsCustomer/assets/u3.jpg')}}" alt="" class="testi_user_img">
                        <div class="testi_user_data">
                            <h4 class="testi_user_name">Radhika Dhiman</h4>
                            <span class="testi_user_title d-block">Thiruvananthapuram</span>
                        </div>
                    </div>
                    <div class="testi_user_rating">
                        <div class="small-ratings"> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                            <i class="fa fa-star rating-color"></i> 
                        </div>
                    </div>
                    <p class="testi_user_bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco
                    </p>
                </div>
                <!-- end of the card -->
                    </div>
                 </div>
            </div>
       
        </section>
        <section class="container trust_safe_cotainer py-5">
            <div class="row py-5">
                <h2 class="hero-header text-center text-white">Trust is Safe</h2>
                <h4 class="text-white text-center safe_def">Offering you finest ornaments designed with taste</h4>
            </div>
            <div class="py-5 trust_items_container">
                <div class="trust_item_container">
                    <span class="d-block icon">
                        <img src="{{ asset('assetsCustomer/assets/Search.svg')}}" alt="">
                    </span>
                    <span class="d-block name">Customized Jewellery</span>
                </div>
                <div class="trust_item_container">
                    <span class="d-block icon">
                        <img src="{{ asset('assetsCustomer/assets/Truck Delivery.svg')}}" alt="">
                    </span>
                    <span class="d-block name">Shipping Worldwide</span>
                </div>
                <div class="trust_item_container">
                    <span class="d-block icon">
                        <img src="{{ asset('assetsCustomer/assets/Present.svg')}}" alt="">
                    </span>
                    <span class="d-block name">75 Years of Trust</span>
                </div>
                <div class="trust_item_container">
                    <span class="d-block icon">
                        <img src="{{ asset('assetsCustomer/assets/Price Tag.svg')}}" alt="">
                    </span>
                    <span class="d-block name">Transparent Lowest Price</span>
                </div>
            </div>
        </section>
        <section class="container mobile_order_make">
            <div class="row my-5 image_box">
               <img src="{{ asset('assetsCustomer/assets/11.jpg')}}" alt="">
            </div>
            <div class="row my-5">
                <h2 class="hero-header text-center">Make to Order</h2>
            </div>
            <div class="row my-5">
                <p class="p hero_info">
                    Customized jewellery - We make jewellery your way. You can purchase jewellery 
                    from us that are customized to your specifications. 
                    We help create the dream jewellery piece you long for. 
                    You tell us the design and we will do it for you
                </p>
            </div>
            <div class="row my-5 d-flex align-items-center justify-content-center">
                <a class="red_btn" style="text-decoration:none;color:white" href="{{route('customer.make.order')}}">Customize</a>
            </div>
        </section>
        <section class="container">
            <div class="row my-5">
                <h2 class="hero-header text-center">Store Locator</h2>
            </div>
            <div class="mobile_map" style="height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.656942589326!2d80.19754171379012!3d12.99378021790931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267e33cd355b5%3A0xe87349071e27ce3b!2sThulirSoft%20Technologies!5e0!3m2!1sen!2shu!4v1649672586034!5m2!1sen!2shu" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </section>




        <section class="mobile_bottom_search_common only_mob">
            <div class="mobile_bottom_search_container">
                <form action="" class="mobile_search_cotainer">
                    <input type="text" placeholder="Search">
                    <span>
                        <i class="bi bi-search"></i>     
                    </span>
                </form>
                <div class="contact_box_mobile">
                    <div class="contact_icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="whatsapp_icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
              </div>
        </section>
   

    </main>
@endsection
