<div class="row justify-content-center">
                            <div class="row">
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="inner_subcategory" class="col-md-4 col-form-label text-md-right">{{ __('Equipment Type') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="inner_subcategory_id"  class="form-select" name="inner_subcategory"  onchange="accessoryOtherInnerSubCategory(this.value)" required>
                                            <option value="">Select Equipment Type</option>
                                             <?php 
                                                $types  = DB::table('equipment_type')->get();
                                            ?>
                                             @foreach($types as $type)
                                                 <option value="{{$type->name}}"  @if($type->name  == $product->inner_subcategory) selected @endif>{{$type->name}}</option>
                                              @endforeach
                                            <option value="Other">Other</option>
                                        </select>

                                        <input  type="text" id="inner_subcategory_other"  class="form-control mt-3" name="inner_subcategory_other" value="{{ old('inner_subcategory_other') }}" style="display:none">
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Headline') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="accessories_title" type="text" class="form-control" name="accessories_title" value="{{ $product->title }}" required>

                                       
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
                                    <label for="accessories_usd_price" class="col-md-4 col-form-label text-md-right">{{ __('Price in USD') }}<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input id="accessories_usd_price" type="text" class="form-control" name="accessories_usd_price" value="{{ $product->usd_price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)" autofocus>
                                        <br>
                                        <input type="checkbox" name="accessories_pricing_request" @if($product->pricing_request=="Y") checked @endif>&nbsp;&nbsp;Price on Request
                                        <br>
                                        <input type="checkbox" name="accessories_gst_included" @if($product->gst_included=="Y") checked @endif>&nbsp;&nbsp;Inclusive of Taxes
                                        <br>
                                        <input type="checkbox" id="accessories_local_price" name="accessories_local_price" onchange="togglePriceInput(this)" @if($product->price != 0) checked @endif>&nbsp;&nbsp;Price in&nbsp;&nbsp;<span><?php echo $symbol; ?></span>
                                        <br>
                                        <div id="accessories_price_wrapper" @if(empty($product->price)) style="display:none;" @endif>
                                            <div class="col-md-12 mt-2">
                                                <input id="accessories_price" type="text" class="form-control" name="accessories_price" value="{{ $product->price }}" onkeypress="return /^[0-9.,]+$/.test(event.key)">
                                            </div>
                                        </div>
                                        <script>
                                            function togglePriceInput(checkbox) {
                                                var priceWrapper = document.getElementById('accessories_price_wrapper');
                                                var priceInput = document.getElementById('accessories_price');
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
                                    <label for="accessories_delivery_lead_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="accessories_delivery_lead_time" type="text" class="form-control" name="accessories_delivery_lead_time" value="{{ $product->delivery_lead_time }}" value="{{ old('consumer_delivery_lead_time') }}"   required autofocus>
                                     </div>
                                </div>
                                </div>
                               <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input id="brand" type="text" class="form-control" name="accessories_brand"  value="{{ $product->brand }}"   required >
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="model_name" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input type="text" id="accessories_model_name"  class="form-control" name="accessories_model_name" value="{{ $product->model_name }}"   required >
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="warranty_available" class="col-md-4 col-form-label text-md-right">{{ __('Warranty Period') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="warranty_available" type="text" class="form-select" name="accessories_warranty_available" required>
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
                                    <label for="accessories_compatible_with" class="col-md-4 col-form-label text-md-right">{{ __('Compatible Products') }}</label>

                                    <div class="col-md-8">
                                        <input id="accessories_compatible_with" type="text" class="form-control" name="accessories_compatible_with" value="{{ $product->compatible_with }}" >

                                        @error('compatible_with')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="accessories_finance" class="col-md-4 col-form-label text-md-right">{{ __('Finance Option') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="accessories_finance" type="text" class="form-select" name="accessories_finance" required>
                                            <option value="">Select</option>
                                            <option value="Lease" @if("Lease" == $product->finance) selected @endif>Available</option>
                                            <option value="Not Lease" @if("Not Lease" == $product->finance) selected @endif>Not Available</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="accessories_offers" class="col-md-4 col-form-label text-md-right">{{ __('Offers') }}</label>

                                    <div class="col-md-8">
                                        <input id="accessories_offers" type="text" class="form-control" name="accessories_offers" value="{{ $product->offers }}"   >

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
                                    <label for="accessories_product_brochure_link" class="col-md-4 col-form-label text-md-right">{{ __('Product Guide') }}</label>

                                    <div class="col-md-8">
                                        <input id="accessories_product_brochure_link" type="url" class="form-control" name="accessories_product_brochure_link" value="{{ $product->product_brochure_link }}">
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
                                    <label for="accessories_made_in" class="col-md-4 col-form-label text-md-right">{{ __('Made in') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-md-8">
                                         <select name="accessories_made_in" id="accessories_made_in" class="form-select" onchange="getConsumerCity(this.value)" required>
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
                                        <?php 
                                            $countries = App\Models\Countries::where('id', $product->country)->first();
                                        ?>
                                        <input type="hidden" name="accessories_country" id="country" class="form-control" value="{{ $countries->id }}" readonly>
                                        <input type="text" name="accessories_country_name" id="country_name" class="form-control" value="{{ $countries->name }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                         <select name="accessories_state" id="accessories_state" class="form-select" onchange="getAccessoriesCity(this.value)" required>
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
                            </div> -->
                         
                             <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <input  type="text" id="accessories_location"  class="form-control" name="accessories_location" value="{{$product->location}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                        <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <textarea id="description" rows="4" cols="50"  class="form-control" name="accessories_description"   required  >{{$product->description}}</textarea>

                                       
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
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_accessories_image();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                     @include('seller.components.edit.img_accessories')
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
                            <button type="button" class="btn btn-success" style="float:right" onclick="add_accessories_specification();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        </div>
                    </div>
                    @include('seller.components.edit.specification_accessories')
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
                                            <textarea id="package_items" type="text" class="form-control" name="accessories_package_items"    required>{{$product->package_items}}</textarea>
                                 
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row justify-content-around">
                                <div class="col-md-12 mb-3">
                                   <div class="row">
                                    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('Ad Status') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-10">
                                        <select id="status" type="text" class="form-select" name="accessories_status"  required>
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
                                        <label for="accessories_method" class="col-md-2 col-form-label text-md-right">{{__('Contact Method')}}</label>
                                        <div class="col-md-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="accessories_method" id="enquiry_radio" value="Contact Seller" <?php if ($product->method === 'Contact Seller') echo 'checked'; ?>  required>
                                                <label class="form-check-label" for="enquiry_radio">
                                                    Contact Seller
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="accessories_method" id="buy_product_radio" value="Buy" <?php if ($product->method === 'Buy') echo 'checked'; ?>  required>
                                                <label class="form-check-label" for="buy_product_radio">
                                                    Buy
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="accessories_method" id="both_radio" value="Both" <?php if ($product->method === 'Both') echo 'checked'; ?> required>
                                                <label class="form-check-label" for="both_radio">
                                                    Both
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  