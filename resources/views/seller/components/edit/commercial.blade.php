<div class="row justify-content-center">
                            <div class="row">
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="title" type="text" class="form-control" name="commercial_title" value="{{ $product->title }}"  required>

                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price GBP (£)') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="price" type="text" class="form-control" name="commercial_price" value="{{ $product->price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)"  required>
                                        <br><input type="checkbox" name="commercial_pricing_request"  @if($product->pricing_request=="Y") checked @endif>&nbsp;&nbsp;Price on Request <br>
                                        <input type="checkbox" name="commercial_gst_included"  @if($product->gst_included=="Y") checked @endif>&nbsp;&nbsp;Inclusive of VAT
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="commercial_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="commercial_delivery_lead_time" type="text" class="form-control" name="commercial_delivery_lead_time" value="{{ $product->delivery_lead_time }}" value="{{ old('consumer_delivery_lead_time') }}"    required>
                                     </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="uas_category" class="col-md-4 col-form-label text-md-right">{{ __('Drone Class') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="uas_category" type="text" class="form-select" name="commercial_uas_category"  required>
                                            <option selected disabled value="">Select Drone Class</option>
                                             <option value="c0" @if("c0" == $product->uas_category) selected @endif>C0</option>
                                             <option value="c1" @if("c1" == $product->uas_category) selected @endif>C1</option>
                                             <option value="c2" @if("c2" == $product->uas_category) selected @endif>C2</option>
                                             <option value="c3" @if("c3" == $product->uas_category) selected @endif>C3</option>
                                             <option value="c4" @if("c4" == $product->uas_category) selected @endif>C4</option>
                                             <option value="na" @if("na" == $product->uas_category) selected @endif>Not Known</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="commercial_brand" type="text" class="form-select" name="commercial_brand" value="{{ old('commercial_brand') }}"  onchange="commercialOtherbrand(this.value)" required>
                                             <option value="">Select Brand</option>
                                            @foreach($commericalbrands as $brand)
                                                <option value="{{$brand->name}}" @if($brand->name == $product->brand) selected @endif>{{$brand->name}}</option>
                                              @endforeach
                                              <option value="Other">Other</option>
                                          </select>
                                           <input  type="text" id="commercial_other_brand"  class="form-control mt-3" name="commercial_other_brand" value="{{ old('commercial_other_brand') }}" style="display:none">
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select id="commercial_model_name" type="text" class="form-select" name="commercial_model_name" value="{{ old('commercial_model_name') }}"  onchange="commercialOtherModel(this.value)" required>
                                             <option value="">Select Model</option>
                                            @foreach($commercicalmodels as $brand)
                                                <option value="{{$brand->name}}" @if($brand->name == $product->model_name) selected @endif>{{$brand->name}}</option>
                                              @endforeach
                                              <option value="Other">Other</option>
                                          </select>
                                       
                                      
                                        <input type="text" id="commercial_other_model_name"  class="form-control mt-3" name="commercial_other_model_name" value="{{ old('commercial_other_model_name') }}" style="display:none">
                                      
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="use" class="col-md-4 col-form-label text-md-right">{{ __('Application') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="use_type" type="text" class="form-select" name="commercial_use_type"  required>
                                            <option value="">Select Use Type</option>
                                            <option value="Camera Drone" @if("Camera Drone" == $product->use_type) selected @endif>Camera Drone</option>
                                            <option value="Agriculture Spraying" @if("Agriculture Spraying" == $product->use_type) selected @endif>Agriculture Spraying</option>
                                            <option value="Crop Monitoring" @if("Crop Monitoring" == $product->use_type) selected @endif>Crop Monitoring</option>
                                            <option value="Survey & Mapping" @if("Survey & Mapping" == $product->use_type) selected @endif>Survey & Mapping</option>
                                            <option value="Training" @if("Training" == $product->use_type) selected @endif>Training</option>
                                            <option value="Indoor Inspections" @if("Indoor Inspections" == $product->use_type) selected @endif>Indoor Inspections</option>
                                            <option value="Industrial Inspections" @if("Industrial Inspections" == $product->use_type) selected @endif>Industrial Inspections</option>
                                            <option value="Infrastructure Inspection" @if("Infrastructure Inspection" == $product->use_type) selected @endif>Infrastructure Inspection</option>
                                            <option value="Public Safety" @if("Public Safety" == $product->use_type) selected @endif>Public Safety</option>
                                            <option value="Security" @if("Security" == $product->use_type) selected @endif>Security</option>
                                            <option value="Multi-Role" @if("Multi-Role" == $product->use_type) selected @endif>Multi-Role</option>
                                            <option value="Other"  @if("Other" == $product->use_type) selected @endif>Other</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="warranty_available" type="text" class="form-select" name="commercial_warranty_available"  required>
                                            <option value="">Select Warranty Period</option>
                                            <option value="2Y" @if("2Y" == $product->warranty_available) selected @endif>2 Years</option>
                                            <option value="1Y" @if("1Y" == $product->warranty_available) selected @endif>1 Year</option>
                                             <option value="6M" @if("6M" == $product->warranty_available) selected @endif>6 Months</option>
                                            <option value="None" @if("None" == $product->warranty_available) selected @endif>None</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>

<!-- new fields -->
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="commercial_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance Option') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="commercial_finance" type="text" class="form-select" name="commercial_finance" required>
                                            <option value="">Select</option>
                                            <option value="Lease" @if("Lease" == $product->finance) selected @endif>Available</option>
                                            <option value="Not Lease" @if("Not Lease" == $product->finance) selected @endif>Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="commercial_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="commercial_offers" type="text" class="form-control" name="commercial_offers" value="{{ $product->offers }}"    >

                                        @error('offers')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="commercial_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>

                                    <div class="col-md-8">
                                        <input id="commercial_product_brochure_link" type="url" class="form-control" name="commercial_product_brochure_link" value="{{ $product->product_brochure_link }}">
                                        <span class="text-danger">Please use this format for the link: https://www.example.com</span>
                                        @error('product_brochure_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="commercial_made_in" class="col-md-4 col-form-label text-md-right">{{ __('Made in') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                         <select name="commercial_made_in" id="commercial_made_in" class="form-select" onchange="getConsumerCity(this.value)" required>
                                              <option value="">Select</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}" @if($country->id == $product->made_in) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                             </select>
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="type_certified" class="col-md-4 col-form-label text-md-right">{{ __('Type Certified') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="type_certified" type="text" class="form-select" name="commercial_type_certified"  required>
                                            <option value="">Select</option>
                                            <option value="Y" @if("Y" == $product->type_certified) selected @endif>Yes</option>
                                            <option value="N" @if("N" == $product->type_certified) selected @endif>No</option>
                                            <option value="NA" @if("NA" == $product->type_certified) selected @endif>Not Known</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Seller Location') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                        <select name="commercial_country" id="country" class="form-select"  required>
                                              <option value="">Location</option>
                                              
                                                <option value="All" @if("All" == $product->country) selected @endif>United Kingdom</option>
                                             </select>
                                        @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="commercial_state" id="commercial_state" class="form-select" onchange="getCommercialCity(this.value)"  required>
                                              <option value="">Select Region</option>
                                              <?php
                                                    $states = App\Models\State::get();
                                                    $cities = App\Models\City::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}"  @if($state->id == $product->state) selected @endif>{{$state->name}}</option>
                                              @endforeach
                                             </select>
                                        @error('state')
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
                                        <select name="commercial_location" id="commercial_location_edit" class="form-select" value="{{ old('commercial_location') }}" onchange="commercialOtherlocation(this.value)"  required>
                                              <option value="">Select City</option>
                                              <option value="Other">Other</option>
                                             </select>
                                            <input  type="text" id="commercial_other_location"  class="form-control mt-3" name="commercial_other_location" value="{{ old('commercial_other_location') }}" style="display:none">
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="description" rows="4" cols="50" type="text" class="form-control" name="commercial_description"   required >{{$product->description}}</textarea>
 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Add Images<span class="text-danger">*</span></button>                                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_commercial_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                      @include('seller.components.edit.img_commercial')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Add Technical Specifications</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_commercial_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                      @include('seller.components.edit.specification_commercial')
                </div>
            </div>
        </div>
    </div>
</div>
                            <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label for="packages_items" class="col-md-2 col-form-label package_items-md-right">What’s in the box<span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <textarea id="package_items" type="text" class="form-control" name="commercial_package_items"  required autofocus>{{$product->package_items}}</textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3 ">
                                <div class="row">
                                    <label for="propulsion" class="col-md-2 col-form-label text-md-right">{{ __('Power') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="propulsion" type="text" class="form-select" name="propulsion"  required>
                                            <option value="">Select Power</option>
                                            <option value="Fuel"   @if("Fuel"   == $product->propulsion) selected @endif>Fuel</option>
                                            <option value="Electric"  @if("Electric" == $product->propulsion) selected @endif>Electric</option>
                                            <option value="Fuel + Electric"  @if("Fuel + Electric" == $product->propulsion) selected @endif>Fuel + Electric</option>
                                            <option value="Solar + Electric"  @if("Solar + Electric" == $product->propulsion) selected @endif>Solar + Electric</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <div class="row">
                                    <label for="propulsion" class="col-md-2 col-form-label text-md-right">{{ __('Aircraft Type') }}</label>

                                    <div class="col-md-10">
                                        <select id="aircraft_type" type="text" class="form-select" name="aircraft_type"  required>
                                            <option value="">Select Aircraft Type</option>
                                            <option value="Fixed Wing" @if("Fixed Wing"   == $product->aircraft_type) selected @endif>Fixed Wing</option>
                                            <option value="Single Rotor" @if("Single Rotor"   == $product->aircraft_type) selected @endif>Single Rotor</option>
                                            <option value="Multi-Rotor" @if("Multi-Rotor"   == $product->aircraft_type) selected @endif>Multi-Rotor</option>
                                            <option value="Fixed Wing Hybrid VTOL" @if("Fixed Wing Hybrid VTOL"   == $product->aircraft_type) selected @endif>Fixed Wing VTOL</option>
                                            <option value="Other" @if("Other"   == $product->aircraft_type) selected @endif>Other</option>

                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="commercial_status"  required>
                                            <option value="">Select</option>
                                            <option value="Y" @if("Y" == $product->status) selected @endif>Active</option>
                                            <option value="P" @if("P" == $product->status) selected @endif>Pause</option>
                                            <!-- <option value="S" @if("S" == $product->status) selected @endif>Sold</option> -->
                                        </select>
                                    </div>
                                </div>
                               </div>

                            </div>
                            <br>
                            <div class="row justify-content-around" style="display: none;">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label for="commercial_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="commercial_method" id="enquiry_radio" value="Contact Seller" <?php if ($product->method === 'Contact Seller') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="commercial_method" id="buy_product_radio" value="Buy" <?php if ($product->method === 'Buy') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="commercial_method" id="both_radio" value="Both" <?php if ($product->method === 'Both') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="both_radio">
                                                    Both
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     