<?php 
            $category = App\Models\Category::where('slug',request()->slug)->first();
            $subcategory = App\Models\SubCategory::where('slug',request()->item_type)->first();
            $url = Request::url();
            $array = explode('?', $url);
             ?>
        
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
                  <span class="title">Region</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-1"
                >
                   <div class="form-sec">
                <select name="location" id="locations" onchange="filter()" class="form-select">
                  <option value="">Select Region</option>
                  <?php 
                   $locations = App\Models\Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->where('status','Y')->orderby('state','asc')->where('category_id','1')->where('subcategory_id','2')->get();
                        
                   ?>
                    <option value="All" @if("All" == request()->location) selected @endif>All</option>

                   @foreach($locations as $city)
                    <?php 
                    $state = App\Models\State::where('id',$city->state)->first();
                   ?>
                      <option value="{{$state->id}}"  @if($state->id == request()->location) selected @endif>{{$state->name}}</option>
                  @endforeach
                 </select>
                 <input type="hidden" id="category_id" value="1">
                 <input type="hidden" id="subcategory_id" value="2">
              </div>
                </div>
              </div>
               <!-- End of filter block -->

            <!-- Start of product filter -->
              <!-- Start of filter block -->
                <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-1"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-1"
                >
                  <span class="title">City</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-1"
                >
                   <div class="form-sec">
                <select name="item_type" id="city" onchange="filter()" class="form-select">
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
                  <span class="title">Drone Class </span>
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
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category1" value="c0"  onclick="filter()">
                    <label class="form-check-label" for="uas_category1">
                      C0
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category2" value="c1"  onclick="filter()">
                    <label class="form-check-label" for="uas_category2">
                      C1
                    </label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category3" value="c2"  onclick="filter()">
                    <label class="form-check-label" for="uas_category3">
                      C2
                    </label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category4" value="c3"  onclick="filter()">
                    <label class="form-check-label" for="uas_category4">
                      C3
                    </label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category5" value="c4"  onclick="filter()">
                    <label class="form-check-label" for="uas_category5">
                      C4
                    </label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="uas_category" id="uas_category6" value="na"  onclick="filter()">
                    <label class="form-check-label" for="uas_category6">
                      Not Known
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
                    $brands = App\Models\Products::select('brand')->distinct()->where('subcategory_id','2')->where('status','Y')->orderby('brand','asc')->get();
                   ?>
                   <option value="All">All</option>
                   @foreach($brands as $brand)
                      <option value="{{$brand->brand}}">{{$brand->brand}}</option>
                  @endforeach
                 </select>
              </div>
                </div>
              </div>
         
             
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
                    $manufacturers = App\Models\Products::select('model_name')->where('subcategory_id','2')->where('status','Y')->distinct()->orderby('model_name','asc')->get();
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

              <!-- Start of filter block
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-application-type"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-application-type"
                >
                  <span class="title">Application Type</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> 
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-application-type"
                >
                     <div class="form-sec">
                <select name="application_type" id="application_type" onchange="filter()" class="form-select">
                  <option value="">Select Application Type</option>
                   <?php 
                    $applicationTypes = App\Models\Products::select('use_type')->distinct()->where('use_type','!=',null)->get();
                   ?>
                   @foreach($applicationTypes as $applicationType)
                      <option value="{{$applicationType->application_type}}">{{$applicationType->application_type}}</option>
                  @endforeach
                 </select>
              </div>
                </div>
              </div> -->
              <!-- End of filter block -->
                
                 <!-- Start of filter block -->
              <div class="filter-block">
                <a
                  class="filter-head"
                  data-bs-toggle="collapse"
                  href="#filterCollapse-application-used"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-application-used"
                >
                  <span class="title">Application Type</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-application-type"
                >
                     <div class="form-sec">
                <select name="application_type" id="application_type" onchange="filter()" class="form-select">
                  <option value="">Select Application Type</option>
                  <option value="All">All</option>
                                           <option value="Camera Drone">Camera Drone</option>
                                            <option value="Agriculture Spraying">Agriculture Spraying</option>
                                            <option value="Crop Monitoring">Crop Monitoring</option>
                                            <option value="Survey & Mapping">Survey & Mapping</option>
                                            <option value="Training">Training</option>
                                            <option value="Indoor Inspections">Indoor Inspections</option>
                                            <option value="Industrial Inspections">Industrial Inspections</option>
                                            <option value="Infrastructure Inspection">Infrastructure Inspection</option>
                                            <option value="Public Safety">Public Safety</option>
                                            <option value="Security">Security</option>
                                            <option value="Multi-Role">Multi-Role</option>
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
                  href="#propulsion-4"
                  role="button"
                  aria-expanded="true"
                  aria-controls="propulsion-1"
                >
                  <span class="title">Power</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="propulsion-4"
                >
                  <div class="form-sec">
               <select name="propulsion" id="propulsion" class="form-select" onclick="filter()">
                                              <option value="">Select Power</option>
                                               <option value="All">All</option>
                                               <option value="Fuel">Fuel</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Fuel + Electric">Fuel + Electric</option>
                                                <option value="Solar + Electric">Solar + Electric</option>
                                            
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
                  href="#AircraftType-4"
                  role="button"
                  aria-expanded="true"
                  aria-controls="AircraftType-1"
                >
                  <span class="title">Aircraft Type</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="AircraftType-4"
                >
                  <div class="form-sec">
               <select name="AircraftType" id="AircraftType" class="form-select" onclick="filter()">
                                              <option value="">Select Aircraft Type</option>
                                               <option value="All">All</option>
                                               <option value="Fixed Wing">Fixed Wing</option>
                                            <option value="Single Rotor">Single Rotor</option>
                                            <option value="Multi-Rotor">Multi-Rotor</option>
                                               <option value="Fixed Wing Hybrid VTOL">Fixed Wing VTOL</option>
                                            <option value="Other">Other</option>
                                            
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
                  href="#filterCollapse-certified"
                  role="button"
                  aria-expanded="true"
                  aria-controls="filterCollapse-certified"
                >
                  <span class="title">Type Certified</span>
                  <!-- <span class="icon"><i class="fas fa-minus"></i></span> -->
                </a>
                <div
                  class="filter-collapse-container collapse show"
                  id="filterCollapse-certified"
                >
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_certified" id="type_certified0" value="All"  onclick="filter()">
                    <label class="form-check-label" for="type_certified0">
                      All
                    </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_certified" id="type_certified1" value="Y"  onclick="filter()">
                    <label class="form-check-label" for="type_certified1">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_certified" id="type_certified2" value="N"  onclick="filter()">
                    <label class="form-check-label" for="type_certified2">
                      No
                    </label>
                </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_certified" id="type_certified2" value="NA"  onclick="filter()">
                    <label class="form-check-label" for="type_certified2">
                      Not Known
                    </label>
                </div>
                </div>
              </div>
              <!-- End of filter block -->
              
              <!-- End of filter block -->

        
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
                           <label class="form-label">Minimum Price GBP £ </label>
                           <input type="number" class="form-control" id="min_price"  placeholder="Enter Minimum Price" min="0">
                       </div>
                       </div>
                        <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="form-label">Maximum Price GBP £ </label>
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
          