        
        <?php 
         ?><div
              class="row row-cols-auto align-items-center justify-content-between pt-3 pb-4"
            >
              <p class="m-0 col product-list-count">
               <span class="count fw-bold">{{count($products)}}</span>
                <span class="name">Products found</span>
              </p>
              <div class="col">
                <div class="sort-select-container">
                  <select name="" id="sort" class="form-select sort-select"   onchange="filter()">
                     <?php 
                        $sorted = Session::get('sort');
                    ?>
                     
                      <option value="most_recent"  @if('most_recent' == $sorted) selected @endif>Most Recent</option>
                      <option value="asc"  @if('asc' == $sorted) selected @endif>Price : Low to High</option>
                     <option value="desc"  @if('desc' == $sorted) selected @endif>Price : High to Low</option>
                  </select>
                </div>
              </div>
            </div>
                        <div class="row row-cols-1 row-cols-md-3">

        @foreach($products as $product)
        <?php
          $url = route('product.details', ['slug' => $product->slug ]);
          $contact_url = route('enquiry', ['id' => $product->id ]);


        ?>
         @php
                $heart = in_array($product->id, $wishlists);
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
            @if($product!=null)
              <div class="col mb-4">
                <div class="product-list-card">
                  <div class="img-sec">
                    @if(count($product->images)>0)
                    <a href="{{$url}}">
                        <img
                          src="{{$product->images[0]['ImageUrl']}}"
                          class="product-list-img"
                          alt=""
                        />
                    </a>
                    @else
                    <a href="{{$url}}">
                        <img
                          src=""
                          class="product-list-img"
                          alt=""
                        />
                    </a>
                    @endif
                    <!--<div class="action-btns">
                      <a href="{{ route('wishlist.add', [ 'product_id' => $product->id, 'type' => $type ] ) }}" class="heart-btn"
                        style="color:{{$color}}" ><i class="fas fa-heart"></i
                      ></a>
                      
                    </div>-->
                  </div>
                  <!-- pro name sec -->
                  <a href="{{$url}}" class="product-list-name"
                   style="height: 50px" >{{ Str::limit($product->title, 40) }}</a
                  >

                  <div
                    class="d-flex align-items-center justify-content-between pl-sec"
                  >
                  <?php
                   $productUserId = $product['user_id'];
                   $user = App\Models\User::find($productUserId);
                   $userCountryId = $user ? $user->country_id : null;
                   $country = App\Models\Countries::find($userCountryId);
                   if ($country && $country->symbol) {
                       $symbol = $country->currency_symbol . ' ' . $country->symbol;
                   } else {
                       $symbol = '-';
                   }
                  ?>
                       
                   @if($product->pricing_request=="N")
                    <p class="price m-0" style="margin-left: 10px;">
                       USD ${{$product->usd_price}}<br>
                      @if(!empty($product->price))
                      <span><?php echo $symbol; ?></span>
                          {{$product->price}}
                      @endif
                    </p> 
                    @else
                        <p class="price">Price on request</p>
                    @endif
                    
                    <div class="location d-flex align-items-center gap-1 m-0">
                      <p class="location-icon m-0">
                        <i class="fas fa-map-marker-alt"></i>
                      </p>
                      <?php 
                        $state = \App\Models\State::where('id',$product->state)->first();
                      ?>
                      <div>
                        <p class="m-0 city">{{$product->location}}</p>
                        @if($state!=null)
                            <p class="m-0 street">{{$state->name}}</p>
                        @endif
                       </div>
                    </div>
                  </div>
                  <!-- <a class="btn btn-reseller" href="{{$contact_url}}">Get Seller Details</a>-->
                </div>
            </div>
            @endif
            @endforeach
              
            
              </div>
              <!-- Mobile filter button -->
    <div class="mobile-filter-toggler-container">
      <button class="btn btn-filter" onclick="filterShowListener()"><i class="fa-solid fa-filter"></i></button>
       <a href="{{route('reset.filter')}}" class="btn btn-filter"><i class="fa-solid fa-refresh"></i></a>
    </div>
