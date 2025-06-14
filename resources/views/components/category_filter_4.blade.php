  <?php 
            $category = App\Models\Category::where('slug',request()->slug)->first();
            $subcategory = App\Models\SubCategory::where('slug',request()->item_type)->first();
           $url = Request::url();
            $array = explode('?', $url);
             ?>
          
          
            <!-- Start of product filter -->
            <div class="product-filter d-none d-lg-block  col-lg-3" id="product-filter-container">
              <!-- Start of filter block -->
                <!-- Start of filter block -->
                <div class="filter-block">
                  <div class="row">
                    <div class="col-7"><h5>Filter By&nbsp;<i class="fa-solid fa-filter" style="font-size:14px"></i></h5></div>
                    <div class="col-5"><a href="{{route('reset.filter')}}" class="btn btn-primary btn-sm" style="float: right;">Reset&nbsp;<i class="fa-solid fa-refresh"></i></a></div>
                    <div class="col-1"></div>
                  </div>
                </div>
                <hr>
                <div class="filter-block" style="display: none;">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-1"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-1"
                >
                  <span class="title">Region</span>
                   <span class="icon"><i class="fas fa-minus"></i></span> 
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-1"
                >
                   <div class="form-sec">
                   <select name="location" id="locations" onchange="filter()" class="form-select">
                  <option value="">Select Region</option>
                  <?php 
                   $locations = App\Models\Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->orderby('state','asc')->where('category_id','3')->get();
                        
                   ?>
                    <option value="All" @if("All" == request()->location) selected @endif>All</option>

                   @foreach($locations as $city)
                    <?php 
                    $state = App\Models\State::where('id',$city->state)->first();
                   ?>
                      <option value="{{$state->id}}"  @if($state->id == request()->location) selected @endif>{{$state->name}}</option>
                  @endforeach
                 </select>
                
              </div>
                </div>
              </div> 
               <!-- End of filter block -->
                <input type="hidden" id="category_id" value="3">
                 <input type="hidden" id="subcategory_id" value="null">
                 <div class="filter-block" style="display: none;">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-1"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-1"
                >
                  <span class="title">City</span>
                   <span class="icon"><i class="fas fa-minus"></i></span> 
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-1"
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
               <div class="filter-block" style="display: none;">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-sub"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-sub"
                >
                  <span class="title">Used For</span>
                   <span class="icon"><i class="fas fa-minus"></i></span> 
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-sub"
                >
                     <div class="form-sec">
                 <select name="usedFor" id="usedFor" onchange="filter()" class="form-select">
                  <option value="">Select Used For</option>
                   <?php 
                    $cities = App\Models\SubCategory::where('category_id','=',3)->get();
                   ?>
                   @foreach($cities as $city)
                      <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach

                 </select>
              </div>
                </div>
              </div> 
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-countryID"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-countryID"
                >
                  <span class="title">Country</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-countryID"
                >
                   <div class="form-sec">
                <select name="countryID" id="countryID" onchange="filter()" class="form-select">
                  <option value="">Select Country</option>
                  <option value="All">All </option>
                   <?php 
                                                $types  = App\Models\Countries::get();
                                            ?>
                                             @foreach($types as $type)
                                                 <option value="{{$type->id}}"  @if($type->id  == request()->country_ID) selected @endif>{{$type->name}}</option>
                                              @endforeach
                                                              
                 </select>
              </div>
                </div>
              </div>
                  <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-robotType"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-robotType"
                >
                  <span class="title">Robot Type</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-robotType"
                >
                   <div class="form-sec">
                <select name="robotType" id="robotType" onchange="filter()" class="form-select">
                  <option value="">Select Robot Type</option>
                  <option value="All">All </option>
                                              <?php  $types  = DB::table('robot_type')->where('status','Active')->get();
                                            ?>
                                             @foreach($types as $type)
                                                 <option value="{{$type->name}}"  @if($type->name  == request()->robot_type) selected @endif>{{$type->name}}</option>
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
                <select name="item_type" id="brand"  onchange="filter()" class="form-select">
                  <option value="">Select Brand</option>
                   <?php 
                    $brands = App\Models\Products::select('brand')->distinct()->where('category_id',$category->id)->where('status','Y')->orderby('brand','asc')->get();
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
                    $manufacturers = App\Models\Products::select('model_name')->distinct()->where('category_id',$category->id)->where('status','Y')->orderby('model_name','asc')->get();
                   ?>
                   <option value="All">All</option>
                   @foreach($manufacturers as $manufacturer)
                      <option value="{{$manufacturer->model_name}}">{{$manufacturer->model_name}}</option>
                  @endforeach
                 </select>
              </div>
                </div>
              </div>
              
               <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-engineType"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-engineType"
                >
                  <span class="title">Power</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-engineType"
                >
                   <div class="form-sec">
                <select name="engine_type" id="engine_type" onchange="filter()" class="form-select">
                  <option value="">Select Power</option>
                  <option value="Fuel">Fuel</option>
                  <option value="Electric">Electric</option>
                  <option value="Fuel + Electric">Fuel + Electric</option>
                  <option value="Solar + Electric">Solar + Electric</option>
                                            

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
              <!-- End of filter block -->

              
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
                           <label class="form-label">Minimum Price (USD $)</label>
                           <input type="number" class="form-control" id="min_price"  placeholder="Enter Minimum Price"  min="0">
                       </div>
                       </div>
                        <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="form-label">Maximum Price (USD $)</label>
                            <input type="number" class="form-control" id="max_price"  placeholder="Enter Maximum Price">
                       </div> </div>
                       <div class="row mt-3">
                       <div class="col-md-4">
                            <input type="button" class="btn btn-primary"  onclick="filter()" value="Apply Filter">
                       </div>
                       <label class="custom-file-label" style="color:red;" id="preview_video_video-31" value="preview_video_video-31"></label>
                   </div>
                </div>
              </div>
              <!-- End of filter block -->
            </div>
            <!-- End of product filter -->
          