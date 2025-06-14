<div class="row justify-content-center">
                                <div class="row">
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="title" type="text" class="form-control" name="robots_title" value="{{ $product->title }}"   required >
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price GBP (£)') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="price" type="text" class="form-control" name="robots_price"  value="{{ $product->price }}"  onkeypress="return /^[0-9.,]+$/.test(event.key)"  required   >
                                        <br><input type="checkbox" name="robots_pricing_request"   @if($product->pricing_request=="Y") checked @endif>&nbsp;&nbsp;Price on Request <br>
<input type="checkbox" name="robots_gst_included"    @if($product->gst_included=="Y") checked @endif>&nbsp;&nbsp;Inclusive of VAT    
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="robots_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="robots_delivery_lead_time" type="text" class="form-control" name="robots_delivery_lead_time" value="{{ $product->delivery_lead_time }}" value="{{ old('consumer_delivery_lead_time') }}"    required>
                                     </div>
                                </div>
                                </div>
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input  id="brand" type="text" class="form-control" name="robots_brand"  value="{{ $product->brand }}" value="{{ old('brand') }}"  required>
                                            
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">

                                         <input type="text" id="robots_model_name"  class="form-control" name="robots_model_name"  value="{{ $product->model_name }}"  required >

                                       
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robot_type" class="col-md-4 col-form-label text-md-right">{{ __('Robot Type') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="robot_type" type="text" class="form-select" name="robot_type" onchange="RobotsOther(this.value)" required>
                                            <option value="">Select Robot Type</option>
                                            
                                             <?php 
                                                $types  = DB::table('robot_type')->get();
                                            ?>
                                             @foreach($types as $type)
                                                 <option value="{{$type->name}}"  @if($type->name  == $product->robot_type) selected @endif>{{$type->name}}</option>
                                              @endforeach
                                              
                                            
                                            <option value="Other">Other</option>
                                        </select>
                                          <input  type="text" id="robot_type_other"  class="form-control mt-3" name="robot_type_other" value="{{ old('robot_type_other') }}" style="display:none">
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="warranty_available" type="text" class="form-select" name="robots_warranty_available" required>
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
                                    <label for="robots_certification" class="col-md-4 col-form-label text-md-right">{{ __('Certification') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="robots_certification" type="text" class="form-control" name="robots_certification" value="{{ $product->certification }}"   required>

                                        @error('certification')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robots_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance Option') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="robots_finance" type="text" class="form-select" name="robots_finance" required>
                                            <option value="">Select</option>
                                            <option value="Lease" @if("Lease" == $product->finance) selected @endif>Available</option>
                                            <option value="Not Lease" @if("Not Lease" == $product->finance) selected @endif>Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="robots_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="robots_offers" type="text" class="form-control" name="robots_offers" value="{{ $product->offers }}"  >

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
                                    <label for="robots_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>

                                    <div class="col-md-8">
                                        <input id="robots_product_brochure_link" type="url" class="form-control" name="robots_product_brochure_link" value="{{ $product->product_brochure_link }}"  >
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
                                    <label for="robots_made_in" class="col-md-4 col-form-label text-md-right">{{ __('Made in') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                         <select name="robots_made_in" id="robots_made_in" class="form-select" onchange="getConsumerCity(this.value)" required>
                                              <option value="">Select</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}" @if($country->id == $product->made_in) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                             </select>
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Seller Location') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                        <select name="robots_country" id="robots_country" class="form-select" required>
                                            <option value="">Location</option>
                                            <option value="All" @if("All" == $product->country) selected @endif>United Kingdom</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="robots_state" id="robots_state" class="form-select" onchange="getRobotsCity(this.value)" required>
                                              <option value="">Select Region</option>
                                              <?php
                                                    $states = App\Models\State::get();
                                                    $cities = App\Models\City::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}"  @if($state->id == $product->state) selected @endif>{{$state->name}}</option>
                                              @endforeach
                                             </select>
                                     </div>
                                </div>
                            </div>
 

                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select name="robots_location" id="robots_location" class="form-select" value="{{ old('robots_location') }}" onchange="robotsOtherlocation(this.value)" required>
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
                                        <textarea id="description" rows="4" cols="50" type="text" class="form-control" name="robots_description"   required>{{$product->description}}</textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<section>
                            <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Add Images<span class="text-danger">*</span></button>                                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_robots_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     @include('seller.components.edit.img_robots')
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
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_robots_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                    @include('seller.components.edit.specification_robots')
                </div>
            </div>
        </div>
        
        
    </div>
</section>
</div>

 <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="engine_type" class="col-md-2 col-form-label text-md-right">{{ __('Power') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="engine_type"  class="form-select" name="robots_engine_type"  required>
                                            <option value="">Select Power</option>
                                            <option value="Fuel" @if("Fuel" == $product->engine_type) selected @endif>Fuel</option>
                                            <option value="Electric" @if("Electric" == $product->engine_type) selected @endif>Electric</option>
                                            <option value="Fuel + Electric"  @if("Fuel + Electric" == $product->propulsion) selected @endif>Fuel + Electric</option>
                                            <option value="Solar + Electric"  @if("Solar + Electric" == $product->propulsion) selected @endif>Solar + Electric</option>
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
                                            <textarea id="package_items" type="text" class="form-control" name="robots_package_items"   required>{{$product->package_items}}</textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="robots_status" required >
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
                                        <label for="robots_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="enquiry_radio" value="Contact Seller" <?php if ($product->method === 'Contact Seller') echo 'checked'; ?>>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="buy_product_radio" value="Buy" <?php if ($product->method === 'Buy') echo 'checked'; ?>>
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="robots_method" id="both_radio" value="Both" <?php if ($product->method === 'Both') echo 'checked'; ?>>
                                                <label class="form-check-label" for="both_radio">
                                                    Both
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       

     