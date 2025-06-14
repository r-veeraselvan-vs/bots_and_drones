<div class="row justify-content-center">
                            
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="consumer_title" type="text" class="form-control" name="consumer_title" value="{{ $product->title }}"    required>

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
                                        <input id="consumer_usd_price" type="text" class="form-control" name="consumer_usd_price" value="{{ $product->usd_price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)" autofocus>
                                        <br>
                                        <input type="checkbox" name="consumer_pricing_request" @if($product->pricing_request=="Y") checked @endif>&nbsp;&nbsp;Price on Request
                                        <br>
                                        <input type="checkbox" name="consumer_gst_included" @if($product->gst_included=="Y") checked @endif>&nbsp;&nbsp;Inclusive of Taxes
                                        <br>
                                        <input type="checkbox" id="consumer_local_price" name="consumer_local_price" onchange="togglePriceInput(this)" @if($product->price != 0) checked @endif>&nbsp;&nbsp;Price in&nbsp;&nbsp;<span><?php echo $symbol; ?></span>
                                        <br>
                                        <div id="consumer_price_wrapper" @if(empty($product->price)) style="display:none;" @endif>
                                            <div class="col-md-12 mt-2">
                                                <input id="consumer_price" type="text" class="form-control" name="consumer_price" value="{{ $product->price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)">
                                            </div>
                                        </div>
                                        <script>
                                            function togglePriceInput(checkbox) {
                                                var priceWrapper = document.getElementById('consumer_price_wrapper');
                                                var priceInput = document.getElementById('consumer_price');
                                                if (checkbox.checked) {
                                                    // If checkbox is checked, show the wrapper and set value of price input to its previous value
                                                    priceInput.value = "{{ $product->price }}";
                                                    priceWrapper.style.display = 'block';
                                                } else {
                                                    // If checkbox is unchecked, hide the wrapper and set value of price input to ''
                                                    priceInput.value = '';
                                                    priceWrapper.style.display = 'none';
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
                                        <input id="consumer_delivery_lead_time" type="text" class="form-control" name="consumer_delivery_lead_time" value="{{ $product->delivery_lead_time }}" value="{{ old('consumer_delivery_lead_time') }}"    required>
                                     </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3" style="display: none">
                                <div class="row">
                                    <label for="consumer_uas_category" class="col-md-4 col-form-label text-md-right">{{ __('Drone Class') }}</label>

                                    <div class="col-md-8">
                                        <select id="consumer_uas_category" type="text" class="form-select" name="consumer_uas_category" >
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
                                        <input  type="text" id="consumer_brand"  class="form-control mt-3" name="consumer_brand" value="{{ $product->brand }}" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                       
                                      
                                        <input type="text" id="consumer_model_name"  class="form-control mt-3" name="consumer_model_name" value="{{ $product->model_name }}" required>
                                      
                                         
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="consumer_use_type" class="col-md-4 col-form-label text-md-right">{{ __('Application') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_use_type" type="text" class="form-select" name="consumer_use_type"   required>
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
                                        <select id="consumer_warranty_available" type="text" class="form-select" name="consumer_warranty_available" required>
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
                                    <label for="consumer_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance Option') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="consumer_finance" type="text" class="form-select" name="consumer_finance" required>
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
                                         <select name="consumer_made_in" id="consumer_made_in" class="form-select" required>
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
                                        <?php 
                                            $countries = App\Models\Countries::where('id', $product->country)->first();
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
                                         <select name="consumer_state" id="consumer_state" class="form-select" onchange="getConsumerCity(this.value)" required>
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
                            </div> -->

                            
                          <div class="row">
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input  type="text" id="consumer_location"  class="form-control" name="consumer_location" value="{{$product->location}}" >
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="consumer_description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="consumer_description" rows="4" cols="50" type="text" class="form-control" name="consumer_description"  required>{{$product->description}}</textarea>

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
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_consumer_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                      @include('seller.components.edit.img_consumer')
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
                                            <textarea id="package_items" type="text" class="form-control" name="consumer_package_items" required  >{{$product->package_items}}</textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="consumer_status" required>
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
                                                <input class="form-check-input" type="radio" name="consumer_method" id="enquiry_radio" value="Contact Seller" <?php if ($product->method === 'Contact Seller') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="buy_product_radio" value="Buy" <?php if ($product->method === 'Buy') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="consumer_method" id="both_radio" value="Both" <?php if ($product->method === 'Both') echo 'checked'; ?> required>
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