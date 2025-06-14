<div class="row justify-content-center">
                            
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_title" type="text" class="form-control" name="consumer_title" value="{{ old('consumer_title') }}"  autofocus>

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
                                    <?php
                                        $userCountryId = auth()->user()->country_id;
                                        $country = App\Models\Countries::find($userCountryId);
                                        if ($country && $country->symbol) {
                                            $symbol = $country->symbol;
                                        } else {
                                            $symbol = '-'; 
                                        }
                                    ?>
                                    <label for="consumer_usd_price" class="col-md-4 col-form-label text-md-right">{{ __('Price in USD') }}<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input id="consumer_usd_price" type="text" class="form-control" name="consumer_usd_price" value="{{ old('usd_price') }}" onkeypress="return /^[0-9.,]+$/.test(event.key)" autofocus>
                                        <br>
                                        <input type="checkbox" name="consumer_pricing_request" value="Y">&nbsp;&nbsp;Price on Request 
                                        <br>
                                        <input type="checkbox" name="consumer_gst_included" value="Y">&nbsp;&nbsp;Inclusive of Taxes
                                        <br>
                                        <input type="checkbox" id="consumer_local_price" name="consumer_local_price" onchange="toggleWrapper(this, 'consumer_price_wrapper')">&nbsp;&nbsp;Price in</span>&nbsp;&nbsp;<span><?php echo $symbol; ?></span>
                                        <br>
                                        <div id="consumer_price_wrapper" style="display:none;">
                                            <div class="col-md-12 mt-2">
                                                <input id="consumer_price" type="text" class="form-control" name="consumer_price" value="{{ old('price') }}" onkeypress="return /^[0-9.,]+$/.test(event.key)" autofocus>
                                            </div>
                                        </div>
                                        <script>
                                            function toggleWrapper(checkbox, wrapperId) {
                                                var wrapper = document.getElementById(wrapperId);
                                                if (checkbox.checked) {
                                                    wrapper.style.display = 'block';
                                                } else {
                                                    wrapper.style.display = 'none';
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_delivery_lead_time" type="text" class="form-control" name="consumer_delivery_lead_time" value="{{ old('consumer_delivery_lead_time') }}"   autofocus>
                                     </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3" style="display: none">
                                <div class="row">
                                    <label for="consumer_uas_category" class="col-md-4 col-form-label text-md-right">{{ __('Drone Class') }}</label>

                                    <div class="col-md-8">
                                        <select id="consumer_uas_category" type="text" class="form-select" name="consumer_uas_category">
                                            <option selected disabled value="">Select Drone Class</option>
                                            <option value="c0">C0</option>
                                            <option value="c1">C1</option>
                                            <option value="c2">C2</option>
                                            <option value="c3">C3</option>
                                            <option value="c4">C4</option>
                                            <option value="na">Not Known</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input  type="text" id="consumer_brand"  class="form-control" name="consumer_brand"  value="{{ old('consumer_brand') }}">
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         
                                        <input type="text" id="consumer_model_name"  class="form-control" name="consumer_model_name" value="{{ old('consumer_model_name') }}" >

                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_use_type" class="col-md-4 col-form-label text-md-right">{{ __('Application') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_use_type" type="text" class="form-select" name="consumer_use_type"  >
                                            <option value="">Select Use</option>
                                            <option value="Camera Drone">Camera Drone</option>
                                            <option value="Racing Drone">Racing Drone</option>
                                            <option value="Other">Other</option>
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_warranty_available" type="text" class="form-select" name="consumer_warranty_available">
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
                                    <label for="consumer_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance Option') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_finance" type="text" class="form-select" name="consumer_finance">
                                            <option value="">Select</option>
                                            <option value="Lease">Available</option>
                                            <option value="Not Lease">Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="consumer_offers" type="text" class="form-control" name="consumer_offers" value="{{ old('offers') }}" >

                                        @error('consumer_offers')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>
                                    <div class="col-md-8">
                                        <input id="consumer_product_brochure_link" type="url" class="form-control" name="consumer_product_brochure_link" value="{{ old('consumer_product_brochure_link') }}" autofocus>
                                    <span class="text-danger">Please use this format for the link: https://www.example.com</span>

                                        @error('consumer_product_brochure_link')
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
                                         <select name="consumer_made_in" id="consumer_made_in" class="form-select">
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
                                    <label for="consumer_country" class="col-md-4 col-form-label text-md-right">{{ __('Seller Location') }}<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <?php 
                                            $user = auth()->user(); 
                                            $countries = App\Models\Countries::where('id', $user->country_id)->first();
                                        ?>
                                        <input type="hidden" name="consumer_country" id="consumer_country" class="form-control" value="{{ $countries->id }}" readonly>
                                        <input type="text" name="consumer_country_name" id="consumer_country_name" class="form-control" value="{{ $countries->name }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="consumer_state" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="consumer_state" id="consumer_state" class="form-select" onchange="getConsumerCity(this.value)" >
                                              <option value="">Select Region</option>
                                              <?php
                                                    $states = App\Models\State::get();
                                                    $cities = App\Models\City::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                              @endforeach
                                             </select>
                                      
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                    <input  type="text" id="consumer_location"  class="form-control" name="consumer_location" value="{{ old('consumer_location') }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        
                                    </div>
                                </div>
                            </div>

                         <div class="row">
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="consumer_description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="consumer_description" rows="4" cols="50" type="text" class="form-control" name="consumer_description"   autofocus></textarea>

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
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_consumer_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     <table id="image_consumer_table" class="table">
                        <tr id="-1" class="main">
                            <th>Image</th>
                            <th>Preview</th>
                            <th>Display Order</th>
                            <th>Action</th>
                        </tr>
                        <tr id="-1" class="main">
                        <td>
                              <div class="input-group">
                                     <input type="file" onChange="display_image_image(this, -1)" name="Consumerdata[-1][image]" class="form-control" accept="image/*"  >
                              </div>
                              <span class="text-danger">Upload .jpg,.png,.jpeg,.webp image formats only . upload less than 500KB images</span>
                        </td>
                        <td>
                            <img src="/images/no_image.png" alt="" width="40px" height="40px" id="preview_image_image-1">
                        </td>
                       
                        <td>
                            <input class="form-control" type="number" name="Consumerdata[-1][display_order]" value="1" >
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
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Add Technical Specifications</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="right" style="float:right">
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_consumer_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     <table id="specification_consumer_table" class="table">
                        <tr id="-1"  class="main">
                            <th>Parameter</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        <tr id="ikey1" class="main">
                        <td>
                            <input type="text" class="form-control" name="Consumerspec[ikey1][tech_parameter]" placeholder="Enter Parameter">
                            
                        </td>
                        <td>
                            <input class="form-control" type="text" name="Consumerspec[ikey1][tech_value]"  placeholder="Enter Value">
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
                                        <label for="packages_items" class="col-md-2 col-form-label package_items-md-right">What’s in the box<span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <textarea id="package_items" type="text" class="form-control" name="consumer_package_items"    autofocus></textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                        <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                        <div class="col-md-10">
                                            <select id="status" type="text" class="form-select" name="consumer_status">
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
                                        <label for="consumer_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="enquiry_radio" value="Contact Seller" required checked>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="buy_product_radio" value="Buy">
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="both_radio" value="Both">
                                                <label class="form-check-label" for="both_radio">
                                                    Both
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>