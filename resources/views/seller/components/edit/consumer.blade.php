<div class="row justify-content-center">
                            
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_title" type="text" class="form-control" name="consumer_title" value="{{ $product->title }}"    >

                                        @error('consumer_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_price" class="col-md-4 col-form-label text-md-right">{{ __('Price(₹)') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_price" type="text" class="form-control" name="consumer_price" value="{{ $product->price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)"   >
                                         <br><input type="checkbox" name="consumer_pricing_request"  @if($product->pricing_request=="Y") checked @endif>&nbsp;&nbsp;Price on request <br>
                                    <input type="checkbox" name="consumer_gst_included"   @if($product->gst_included=="Y") checked @endif>&nbsp;&nbsp;Inclusive of GST
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_delivery_lead_time" type="text" class="form-control" name="consumer_delivery_lead_time" value="{{ $product->delivery_lead_time }}" value="{{ old('consumer_delivery_lead_time') }}"    >
                                     </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_uas_category" class="col-md-4 col-form-label text-md-right">{{ __('UAS Category') }}</label>

                                    <div class="col-md-8">
                                        <select id="consumer_uas_category" type="text" class="form-select" name="consumer_uas_category" >
                                            <option selected disabled value="">Select UAS Category</option>
                                             <option value="Nano" @if("Nano" == $product->uas_category) selected @endif>Nano</option>
                                            <option value="Micro" @if("Micro" == $product->uas_category) selected @endif>Micro</option>
                                            <option value="Small" @if("Small" == $product->uas_category) selected @endif>Small</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_brand" type="text" class="form-select" name="consumer_brand" value="{{ old('consumer_brand') }}" onchange="consumerOtherbrand(this.value)" >
                                             <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                                <option value="{{$brand->name}}"  @if($brand->name == $product->brand) selected @endif>{{$brand->name}}</option>
                                              @endforeach
                                              <option value="Other">Other</option>
                                          </select>
                                        <input  type="text" id="consumer_other_brand"  class="form-control mt-3" name="consumer_other_brand" value="{{ old('consumer_other_brand') }}" style="display:none">
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_model_name" type="text" class="form-select" name="consumer_model_name" value="{{ old('consumer_model_name') }}"  onchange="consumerOtherModel(this.value)" >
                                             <option value="">Select Model</option>
                                            @foreach($models as $brand)
                                                <option value="{{$brand->name}}" @if($brand->name == $product->model_name) selected @endif>{{$brand->name}}</option>
                                              @endforeach
                                              <option value="Other">Other</option>
                                          </select>
                                       
                                      
                                        <input type="text" id="consumer_other_model_name"  class="form-control mt-3" name="consumer_other_model_name" value="{{ old('consumer_other_model_name') }}" style="display:none">
                                      
                                         
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_use_type" class="col-md-4 col-form-label text-md-right">{{ __('Application') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_use_type" type="text" class="form-select" name="consumer_use_type"   >
                                            <option value="">Select Use</option>
                                            <option value="Camera Drone" @if("Camera Drone" == $product->use_type) selected @endif>Camera Drone</option>
                                            <option value="Racing Drone" @if("Racing Drone" == $product->use_type) selected @endif>Racing Drone</option>
                                            <option value="Other" @if("Other" == $product->use_type) selected @endif>Other</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_warranty_available" type="text" class="form-select" name="consumer_warranty_available" >
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
                                    <label for="consumer_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_finance" type="text" class="form-select" name="consumer_finance" >
                                            <option value="">Select</option>
                                            <option value="Lease" @if("Lease" == $product->finance) selected @endif>Available</option>
                                            <option value="Not Lease" @if("Not Lease" == $product->finance) selected @endif>Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="consumer_offers" type="text" class="form-control" name="consumer_offers" value="{{ $product->offers }}"  autofocus>
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
                                    <label for="consumer_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>

                                    <div class="col-md-8">
                                        <input id="consumer_product_brochure_link" type="url" class="form-control" name="consumer_product_brochure_link" value="{{ $product->product_brochure_link }}"  autofocus>
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
                                    <label for="consumer_made_in" class="col-md-4 col-form-label text-md-right">{{ __('Made in') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                         <select name="consumer_made_in" id="consumer_made_in" class="form-select" >
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
                                    <label for="consumer_country" class="col-md-4 col-form-label text-md-right">{{ __('Seller Location') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                        <select name="consumer_country" id="consumer_country" class="form-select" >
                                              <option value="">Location</option>
                                              
                                                <option value="All" @if("All" == $product->country) selected @endif>India</option>
                                             </select>
                                        @error('consumer_country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="consumer_state" id="consumer_state" class="form-select" onchange="getConsumerCity(this.value)" >
                                              <option value="">Select State</option>
                                              <?php
                                                    $states = App\Models\State::where('status','Active')->orderby('name','asc')->get();
                                                    $cities = App\Models\City::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}"  @if($state->id == $product->state) selected @endif>{{$state->name}}</option>
                                              @endforeach
                                             </select>
                                      
                                    </div>
                                </div>
                            </div>

                            
                          <div class="row">
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select name="consumer_location" id="consumer_location" class="form-select" value="{{ old('consumer_location') }}" onchange="consumerOtherlocation(this.value)" >
                                            <option value="">Select City</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <input  type="text" id="consumer_other_location"  class="form-control mt-3" name="consumer_other_location" value="{{ old('consumer_other_location') }}" style="display:none">
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="consumer_description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="consumer_description" rows="4" cols="50" type="text" class="form-control" name="consumer_description"    >{{$product->description}}</textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Images<span class="text-danger">*</span></button>                                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_consumer_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                      @include('seller.components.edit.img_consumer')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Technical Specifications</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_consumer_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     @include('seller.components.edit.specification_consumer')
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
                                            <textarea id="package_items" type="text" class="form-control" name="consumer_package_items"     >{{$product->package_items}}</textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="consumer_status" >
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
                                        <label for="consumer_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="enquiry_radio" value="Contact Seller" <?php if ($product->method === 'Contact Seller') echo 'checked'; ?> >
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="buy_product_radio" value="Buy" <?php if ($product->method === 'Buy') echo 'checked'; ?> >
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="both_radio" value="Both" <?php if ($product->method === 'Both') echo 'checked'; ?> >
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
               </div>