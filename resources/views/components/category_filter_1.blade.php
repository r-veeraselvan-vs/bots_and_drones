  <?php 
            $category = App\Models\Category::where('slug',request()->slug)->first();
            $subcategory = App\Models\SubCategory::where('slug',request()->item_type)->first();
           $url = Request::url();
            $array = explode('?', $url);
            $newUrl = $array[0]."?item_type=Consumer-drones-9987";
             ?>
         <br>
            <input type="hidden" id="category_id" value="1">
                 <input type="hidden" id="subcategory_id" value="1">
            <!-- Start of product filter -->
            <div class="product-filter d-none d-lg-block col-lg-3" id="product-filter-container">
                
               <!-- Start of filter block -->
                <div class="filter-block">
                  <div class="row">
                    <div class="col-7"><h5>Filter By&nbsp;<i class="fa-solid fa-filter" style="font-size:14px"></i></h5></div>
                    <div class="col-5"><a href="{{route('reset.filter')}}" class="btn btn-primary btn-sm" style="float: right;">Reset&nbsp;<i class="fa-solid fa-refresh"></i></a></div>
                    <div class="col-1"></div>
                  </div>
                </div>
                <hr>
                <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-1"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-1"
                >
                  <span class="title">State</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-1"
                >
                   <div class="form-sec">
                <select name="location" id="locations" onchange="filter()" class="form-select">
                  <option value="">Select State</option>
                  <?php 
                   $locations = App\Models\Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->where('status','Y')->orderby('state','asc')->where('category_id','1')->where('subcategory_id','1')->get();
                        
                   ?>
                   <option value="All" @if("All" == request()->location) selected @endif>All</option>
                   @foreach($locations as $city)
                    <?php 
                    $state = App\Models\State::where('id',$city->state)->first();
                   ?>
                      <option value="{{$state->id}}" @if($state->id == request()->location) selected @endif>{{$state->name}}</option>
                  @endforeach
                 </select>
                
                </div>
                </div>
              </div>
               <!-- End of filter block -->

              <!-- Start of filter block -->
                <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-city"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-city"
                >
                  <span class="title">City</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-city"
                >
                   <div class="form-sec">
                <select name="city" id="city" onchange="filter()" class="form-select">
                  <option value="">Select City</option>
                   
                 </select>
              </div>
                </div>
              </div>
               <!-- End of filter block -->
                <!-- Start of filter block -->
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#uas_category-7"
                  role="button"
                  aria-expanded="true"
                  aria-controls="uas_category-1"
                >
                  <span class="title">UAS Category </span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="uas_category-7"
                >
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category0" value="All"  onclick="filter()">
                    <label class="form-check-label" for="uas_category0">
                      All
                    </label>
                  </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category1" value="Nano"  onclick="filter()">
                    <label class="form-check-label" for="uas_category1">
                      Nano
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category2" value="Micro"  onclick="filter()">
                    <label class="form-check-label" for="uas_category2">
                      Micro
                    </label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category3" value="Small"  onclick="filter()">
                    <label class="form-check-label" for="uas_category3">
                      Small
                    </label>
                </div>
                </div>
              </div>
               <!-- End of filter block -->
 
 <!-- Start of filter block -->
             
              <!-- Start of filter block -->
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-2"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-2"
                >
                  <span class="title">Brand</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-2"
                >
                     <div class="form-sec">
                <select name="item_type" id="brand" onchange="filter()" class="form-select">
                  <option value="">Select Brand</option>
                   <?php 
                    $brands = App\Models\Products::select('brand')->distinct()->where('subcategory_id','1')->where('status','Y')->orderby('brand','asc')->get();
                   ?>
                   <option value="All">All</option>
                   @foreach($brands as $brand)
                      <option value="{{$brand->brand}}">{{$brand->brand}}</option>
                  @endforeach
                 </select>
              </div>
                </div>
              </div>
             
               <!-- Start of filter block -->
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-3"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-1"
                >
                  <span class="title">Model</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-3"
                >
                  <div class="form-sec">
                <select name="item_type" id="model" onchange="filter()" class="form-select">
                  <option value="">Select Model</option>
                   <?php 
                    $manufacturers = App\Models\Products::select('model_name')->distinct()->where('subcategory_id','1')->where('status','Y')->orderby('model_name','asc')->get();
                   ?>
                   <option value="All">All</option>
                   @foreach($manufacturers as $manufacturer)
                      <option value="{{$manufacturer->model_name}}">{{$manufacturer->model_name}}</option>
                  @endforeach
                 </select>
              </div>
                </div>
              </div>
              <!-- End of filter block -->
 <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-warranty"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-warranty"
                >
                  <span class="title">Warranty Period</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-warranty"
                >
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="warranty_available_check" id="warranty_available_check0" value="2Y"  onclick="filter()">
                    <label class="form-check-label" for="warranty_available_check0">
                      2 Years
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="warranty_available_check" id="warranty_available_check1" value="1Y"  onclick="filter()">
                    <label class="form-check-label" for="warranty_available_check1">
                      1 Year
                    </label>
                </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="warranty_available_check" id="warranty_available_check2" value="6M"  onclick="filter()">
                    <label class="form-check-label" for="warranty_available_check2">
                      6 Months
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="warranty_available_check" id="warranty_available_check3" value="None"  onclick="filter()">
                    <label class="form-check-label" for="warranty_available_check3">
                      None
                    </label>
                </div>
                </div>
              </div>

              
               <!-- Start of filter block -->
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-price"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-price"
                >
                  <span class="title">Price Range </span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                 <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-price"
                >
                    <div class="row">
                       <div class="col-md-12">
                           <label class="form-label">Minimum Price ₹ </label>
                           <input type="number" class="form-control" id="min_price"  placeholder="Enter Minimum Price" min="0" >
                       </div>
                       </div>
                        <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="form-label">Maximum Price ₹ </label>
                            <input type="number" class="form-control" id="max_price"  placeholder="Enter Maximum Price" min="min_price">
                       </div> </div>
                       <div class="row mt-3">
                       <div class="col-md-4">
                            <input type="button" class="btn btn-primary"  onclick="filter()" value="Apply Filter" name="notification_video" id="notification_video">
                       </div>
                       <label class="custom-file-label" style="color:red;" id="preview_video_video-31" value="preview_video_video-31"></label>
                   </div>
                </div>
              </div>
              <!-- End of filter block -->
            </div>
            <!-- End of product filter -->
        