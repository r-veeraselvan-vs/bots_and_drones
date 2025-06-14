<div class="row justify-content-center ">
                            
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="title" type="text" class="form-control" name="robots_title" value="{{ old('title') }}"   autofocus>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price(₹)') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="price" type="text" class="form-control" name="robots_price" value="{{ old('price') }}" onkeypress="return /^[0-9.,]+$/.test(event.key)"   autofocus>
                                        <br><input type="checkbox" name="robots_pricing_request" value="Y">&nbsp;&nbsp;Price on request <br>
<input type="checkbox" name="robots_gst_included" value="Y">&nbsp;&nbsp;Inclusive of GST
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="robots_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="robots_delivery_lead_time" type="text" class="form-control" name="robots_delivery_lead_time" value="{{ old('robots_delivery_lead_time') }}"   autofocus>
                                     </div>
                                </div>
                            </div>
                            
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input  id="brand" type="text" class="form-control" name="robots_brand" value="{{ old('brand') }}" >
                                            
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">

                                         <input type="text" id="robots_model_name"  class="form-control" name="robots_model_name" value="{{ old('robots_model_name') }}"   autofocus>

                                       
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robot_type" class="col-md-4 col-form-label text-md-right">{{ __('Robot Type') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="robot_type" type="text" class="form-select" name="robot_type" onchange="RobotsOther(this.value)" >
                                            <option value="">Select Robot Type</option>
                                           <?php 
                                                $types  = DB::table('robot_type')->get();
                                            ?>
                                             @foreach($types as $type)
                                                 <option value="{{$type->name}}">{{$type->name}}</option>
                                              @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                          <input  type="text" id="robot_type_other"  class="form-control mt-3" name="robot_type_other" value="0" style="display:none">
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="warranty_available" type="text" class="form-select" name="robots_warranty_available" >
                                            <option value="">Select Warranty Period</option>
                                            <option value="2Y">2 Years</option>
                                            <option value="1Y">1 Year</option>
                                            <option value="6M">6 Months</option>
                                            <option value="None">None</option>   
                                        </select>
                                    </div>
                                </div>
                            </div>
                             
                                
                            <!---- new field --->
                            
                              
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robots_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="robots_finance" type="text" class="form-select" name="robots_finance" >
                                            <option value="">Select</option>
                                            <option value="Lease">Available</option>
                                            <option value="Not Lease">Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robots_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="robots_offers" type="text" class="form-control" name="robots_offers" value="{{ old('offers') }}"  autofocus>

                                        @error('offers')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="robots_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>
                                    <div class="col-md-8">
                                        <input id="robots_product_brochure_link" type="url" class="form-control" name="robots_product_brochure_link" value="{{ old('robots_product_brochure_link') }}" autofocus>
                                    <span class="text-danger">Please use this format for the link: https://www.example.com</span>

                                        @error('robots_product_brochure_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="robots_made_in" class="col-md-4 col-form-label text-md-right">{{ __('Made in') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                         <select name="robots_made_in" id="robots_made_in" class="form-select" onchange="getConsumerCity(this.value)" >
                                              <option value="">Select</option>
                                              @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                              @endforeach
                                             </select>
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Seller Location') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                        <select name="robots_country" id="robots_country" class="form-select" >
                                            <option value="">Select Location</option>
                                            <option value="All">India</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="robots_state" id="robots_state" class="form-select" onchange="getRobotsCity(this.value)" >
                                              <option value="">Select State</option>
                                              <?php
                                                    $states = App\Models\State::where('status','Active')->orderby('name','asc')->get();
                                                    $cities = App\Models\City::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                              @endforeach
                                             </select>
                                     </div>
                                </div>
                            </div>

</div>
                        <div class="row">
                        <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robots_certification" class="col-md-4 col-form-label text-md-right">{{ __('Certification') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="robots_certification" type="text" class="form-control" name="robots_certification" value="{{ old('certification') }}"  autofocus>

                                        @error('certification')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select name="robots_location" id="robots_location" class="form-select" value="{{ old('robots_location') }}" onchange="robotsOtherlocation(this.value)" >
                                            <option value="">Select City</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    <input  type="text" id="robots_other_location"  class="form-control mt-3" name="robots_other_location" value="{{ old('robots_other_location') }}" style="display:none">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="description" rows="4" cols="50" type="text" class="form-control" name="robots_description"     autofocus></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Image<span class="text-danger">*</span></button>                                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_robots_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     <table id="image_robots_table" class="table">
                        <tr id="-1" class="main">
                            <th>Image</th>
                            <th>Preview</th>
                            <th>Display Order</th>
                            <th>Action</th>
                        </tr>
                        <tr id="-31" class="main">
                        <td>
                              <div class="input-group">
                                     <input type="file" onChange="display_image_image(this, -31)" name="Robotsdata[-31][image]" class="form-control"  accept="image/*"  >
                              </div>
                              <span class="text-danger">Upload .jpg,.png,.jpeg,.webp image formats only  . upload less than 500KB images</span>
                        </td>
                        <td>
                            <img src="/images/no_image.png" alt="" width="40px" height="40px" id="preview_image_image-31">

                        </td>
                       
                        <td>
                            <input class="form-control" type="number" name="Robotsdata[-31][display_order]" value="1" >
                        </td>
                        
                        <td disabled><span class="badge bg-light" style="cursor: not-allowed;pointer-events: all !important;background-color: #d5c3c4 !important;
    color: #514949;"><i class="bi bi-trash"></i></span></td>
                    </tr> 
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Technical Specifications</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_robots_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                    
                     <table id="specification_robots_table" class="table">
                        <tr id="-1"  class="main">
                            <th>Parameter</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        <tr id="ikey1" class="main">
                        <td>
                            <input type="text" class="form-control" name="Robotsspec[ikey1][tech_parameter]"   placeholder="Enter Parameter">
                            
                        </td>
                        <td>
                            <input class="form-control" type="text" name="Robotsspec[ikey1][tech_value]"   placeholder="Enter Value">
                        </td>
                        
                       <td disabled><span class="badge bg-light" style="cursor: not-allowed;pointer-events: all !important;background-color: #d5c3c4 !important;
    color: #514949;"><i class="bi bi-trash"></i></span></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
 <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="engine_type" class="col-md-2 col-form-label text-md-right">{{ __('Power') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="engine_type"  class="form-select" name="robots_engine_type" >
                                            <option value="">Select Power</option>
                                            <option value="Fuel">Fuel</option>
                                            <option value="Electric">Electric</option>
                                            <option value="Fuel + Electric">Fuel + Electric</option>
                                            <option value="Solar + Electric">Solar + Electric</option>
                                        </select>
                                    </div>
                                </div>
                               </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label for="packages_items" class="col-md-2 col-form-label package_items-md-right">What’s in the box<span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <textarea id="package_items" type="text" class="form-control" name="robots_package_items"   autofocus></textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="robots_status" >
                                            <option value="">Select</option>
                                            <option value="Y">Active</option>
                                            <option value="P">Pause</option>
                                            <!-- <option value="S">Sold</option> -->
                                        </select>
                                    </div>
                                </div>
                               </div>
                            </div>
                            <br>
                            <div class="row justify-content-around" style="display: none;">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label for="robots_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="enquiry_radio" value="Contact Seller"  checked>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="buy_product_radio" value="Buy">
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="both_radio" value="Both">
                                                <label class="form-check-label" for="both_radio">
                                                    Both
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         <div>
   