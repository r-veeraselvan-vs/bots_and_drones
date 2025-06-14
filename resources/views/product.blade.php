@extends('layouts.app')

@section('content')
 
<div class="container">

    <div class="row justify-content-center">
 <!-- Start of Breadcrumb -->
         <div class="bd-breadcrumb">
            <div class="container">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                      <?php 
                         $subcategory = App\Models\SubCategory::where('id',$product->subcategory_id)->first();
                         $category = App\Models\Category::where('id',$product->category_id)->first();
                       ?>
                       @if($category->id == 2 || $category->id == 3)
                           <li class="breadcrumb-item"><a href="{{ URL::previous() }}">{{$category->name}}</a></li>
                        @else
                           <li class="breadcrumb-item"><a href="{{ URL::previous() }}">{{$subcategory->name}}</a></li>
                        @endif
                     <li class="breadcrumb-item active" aria-current="page">
                       {{$product->title}}
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <!-- End of Breadcrumb -->
         <div class="container">
            @if (Session::has('warning'))
                 
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
 {!! nl2br(e(session('warning'))) !!}   <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

</div>
            @endif
            @if (Session::has('success'))
                
                <div class="alert alert-success alert-dismissible fade show" role="alert">
 {!! nl2br(e(session('success'))) !!}   <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

</div>
            @endif
            <div class="row">
               <div class="col-lg-9">
                  <div class="row">
                     <div class="col-lg-6 mb-3">
                         <a href="{{ session::get('backpage')}}" class="btn btn-green-light btn-cont-seller w-t-line"><i class="fa-solid fa-arrow-left"></i></a>
                        <div
                           id="carouselExampleIndicators"
                           class="carousel product-de-carousel"
                           data-bs-ride="true"
                           >
                           <div class="position-relative">
                              <div class="carousel-inner">
                                 @foreach($product->images as $i=>$img)
                                 <div class="carousel-item @if($i == 0) active @endif">
                                    <img
                                       src="{{ $img->ImageUrl }}"
                                       class="d-block w-100"
                                       alt="..."
                                       />
                                 </div>
                                 @endforeach
                                 
                              </div>
                                @php
                $heart = in_array($product->id, $wishlists);
                $type = ($heart == true) ? 'false' : 'true';
                 if($heart)
                {
                  $color = "red";
                  $text = "Favourites";
                }
                else
                {
                  $color="blue";
                  $text = "Add to Favourites";
                }
            @endphp
                              
                           </div>
                           <div class="carousel-toggle-img-container">
                              @foreach($product->images as $i=>$img)
                              <div
                                 class="toggle-img"
                                 type="button"
                                 data-bs-target="#carouselExampleIndicators"
                                 data-bs-slide-to="{{$i}}"
                                 class="active"
                                 aria-current="true"
                                 aria-label="Slide {{$i}}"
                                 >
                                 <img src="{{ $img->ImageUrl }}" alt="" />
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="product-details-cont ">
                           <div class="px-4 px-md-0">
                              <h5 class="mb-3 prod-head">
                                 {{$product->title}}
                              </h5>
                               <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                    <span class="pe-2 dark">Product ID:</span>
                                    <?php 
                                        $adId=sprintf("%05d", $product->id);
                                    ?>
                                    <span class="dark">{{$adId}}</span>
                                 </p>
                              </div>
                              @if($product->pricing_request=="N")
                                <p class="price">₹ {{$product->price}}</p>@if($product->gst_included=="Y")  <p>Inclusive of all taxes</p>  @endif 
                                @else
                                    <p class="price" >Price on request</p>
                                @endif
                           </div>
                           <div class="row owner-details border-top border-divider mb-3 pt-2 px-4 px-md-0">
                              <div class="col-12 mt-4 mb-3 d-md-none">
                                 <h4 class="text-darkblue fw-bold">Details</h4>
                              </div>
                                    <?php 
                                       $user = App\Models\User::where('id',$product->user_id)->first();
                                       $contact_url = route('enquiry', ['id' => $product->id ]);
                                       $contact_seller = route('contact', ['id' => $product->id ]);
                                    ?>

                              <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                       <span class="dark full-mob">Seller: </span>
                                         <span class="dark full-mob"> &nbsp;{{$user->company_name}}</span>
                                     </span>
                                 </p>
                              </div>
                               <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                    <span class="dark full-mob"><i class="fa-solid fa-location-dot"></i>  </span> 
                                       <span class="d-inline-flex flex-wrap flex-md-nowrap">
                                          <span class="dark full-mob">{{$product->location}}
                                          
                                       </span>
                                       </span>
                                           
                                 </p>
                              </div>
                              
                               <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                    <span class="dark full-mob">Brand:</span>
                                    <span class="dark">{{$product->brand}}</span>
                                 </p>
                              </div>
                               <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                    <span class="dark full-mob">Model:</span>
                                    <span class="dark">{{$product->model_name}}</span>
                                 </p>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <p class="pro-text">
                                    @if($product->finance=="Lease")
                                    <span class="dark full-mob">Finance:</span>
                                       <span class="dark">Available</span>
                                    @else 
                                    <span class="dark full-mob">Finance:</span>
                                       <span class="dark">Not Available</span>
                                    @endif
                                 </p>
                              </div>
                              <div class="col-md-6 mb-3 mt-md-0 d-md-block d-sm-none">                                 
                                 <p class="pro-text" style="color: #c90000;">
                                    @if($product->offers!=null)
                                    <span class="dark full-mob offer-button btn-link" onmouseover="showOffers(this)" onmouseout="hideOffers(this)">Show Offers
                                       <span class="offer-pop-up btn btn-reseller">{{$product->offers}}</span>
                                    </span>
                                    
                                    @endif
                                 </p>
                              </div>
                               <div class="col-md-6 mb-3 mt-md-0 d-md-none">                                 
                                  <p class="pro-text">
                                    @if($product->offers!=null)
                                    <span class="dark full-mob">Offers:</span>
                                       <span class="dark">{{$product->offers}}</span>
                                    
                                    @endif
                                 </p>
                              </div>
                           </div>
                           <div class="border-divider row d-md-block ">
                              <div class="col-12 py-4 py-md-0">                                  
                                <!-- @if($product->method=="Contact Seller")
                                    <a class="btn btn-green-light btn-cont-seller w-t-line" href="{{$contact_seller ?? ''}}">
                                       Contact Seller
                                    </a>    
                                    @elseif($product->method=="Buy") 
                                       <a class="btn btn-green-light btn-cont-seller w-t-line" href="{{$contact_url ?? ''}}">
                                          Buy
                                       </a>  
                                       @else    
                                       <a class="btn btn-green-light btn-cont-seller w-t-line" href="{{$contact_seller ?? ''}}">
                                          Contact Seller
                                       </a> 
                                       &nbsp;
                                       <a class="btn btn-green-light btn-cont-seller w-t-line" href="{{$contact_url ?? ''}}">
                                          Buy
                                       </a>                          
                                 @endif-->
                                 <a class="btn btn-green-light btn-cont-seller w-t-line" href="{{$contact_seller ?? ''}}">
                                       Contact Seller
                                    </a>
                                 &nbsp; &nbsp; &nbsp;
                                 <span class="action-btns">                                    
                                    <a  href="{{ route('wishlist.add', [ 'product_id' => $product->id, 'type' => $type ] ) }}" style="text-decoration: none; color:{{$color}}" class="heart-btn">
                                       <i class="fa-solid fa-heart"></i> {{ $text}}
                                    </a>
                                 </span> 
                              </div>
                           </div>
                         
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3"></div>
            </div>
            <!-- product spec -->
            <div class="border-divider row d-md-block"></div>
             <!-- Mobile -->
            <div class="d-block mobile-collapse d-lg-none py-md-4 py-lg-0 mb-4">

            
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingOne">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <span class="title">Description</span>
                   </button>
                 </h2>
                 <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                   <div class="accordion-body">{{$product->description}}<br>
                   <ul class="mb-4">
                                @if($product->uas_category!=null)
                                   
                                         <li>
                                       <div class="d-flex">
                                       UAS Category : <div class="col-6 light">&nbsp;{{$product->uas_category}}</div>
                                       </div>
                                 </li>

                                @endif


                                     @if($product->type_certified!=null)

                                        @if($product->type_certified=="Y")
                                           <li>
                                           <div class="d-flex">
                                              Type Certified : <div class="col-6 light">&nbsp;Yes</div>
                                           </div>
                                         </li>
                                            @else
                                                 <li>
                                               <div class="d-flex">
                                                  Type Certified : <div class="col-6 light">&nbsp;No</div>
                                               </div>
                                         </li>
        
                                            @endif
    
                                    @endif
                                    @if($product->subcategory_id == 2)
                                       @if($product->use_type)
                                          <li>
                                                <div class="d-flex">
                                                  Application: <div class="col-6 light">&nbsp;{{$product->use_type}}</div>
                                                </div>
                                             </li>
                                       @endif
                                    @endif
                                    @if($product->robot_type)
                                       <li>
                                             <div class="d-flex">
                                               Application: <div class="col-6 light">&nbsp;{{$product->robot_type}}</div>
                                             </div>
                                          </li>
                                    @endif
                                       @if($product->certification)
                                          <li>
                                             <div class="d-flex">
                                               Certification: <div class="col-6 light">&nbsp;{{$product->certification}}</div>
                                             </div>
                                          </li>
                                       @endif      
                                        
                                     @if($product->aircraft_type!=null)
                                       <li>
                                       <div class="d-flex">
                                         Aircraft Type: <div class="col-6 light">&nbsp;{{$product->aircraft_type}}</div>
                                       </div>
                                        </li>
                                   
                                    @endif

                                    @if($product->propulsion!=null)
                                       <li>
                                       <div class="d-flex">
                                         Propulsion Type :  <div class="col-6 light">&nbsp;{{$product->propulsion}}</div>
                                       </div>
                                        </li>
                                  
                                    @endif

                                    @if($product->warranty_available!=null)
                                        @if($product->warranty_available=="2Y")
                                           <li>
                                           <div class="d-flex">
                                             Warranty Period : <div class="col-6 light">&nbsp;2 Years</div>
                                           </div>
                                         </li>
                                            @elseif($product->warranty_available=="1Y")
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-3 light">&nbsp;1 Year</div>
                                               </div>
                                         </li>
                                             @elseif($product->warranty_available=="6M")
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-3 light">&nbsp;6 Months</div>
                                               </div>
                                         </li>
                                         @else
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-3 light">&nbsp;None</div>
                                               </div>
                                         </li>                                                
                                        @endif
                                    @endif
                                    
                                        <li>
                                               <div class="d-flex">
                                                 Delivery Time : <div class="col-3 light">&nbsp;{{$product->delivery_lead_time}}</div>
                                               </div>
                                         </li>
                                    @if($product->engine_type!=null)
                                       <li>
                                       <div class="d-flex">
                                         Propulsion Type : <div class="col-6 light">&nbsp;{{$product->engine_type}}</div>
                                       </div>
                                        </li>
                                    @endif

                                    
                                   @if($product->compatible_with!=null)
                                       <li>
                                          <div class="d-flex">
                                             Compatible Products : <div class="col-6 light">&nbsp;{{$product->compatible_with}}</div>
                                          </div>
                                       </li>
                                       @endif

                                    @if($product->product_brochure_link!=null)
                                       <li>
                                          <div class="d-flex">
                                             Product Guide : <div class=" "><a target="_blank" href="{{$product->product_brochure_link}}" class="text-decoration-none">&nbsp;Visit <i class="fa fa-external-link"></i></a></div>
                                          </div>
                                       </li>
                                       @endif
                                       </ul>
                                  
                                    

                               <br></div>
                 </div>
               </div>
               <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingTwo">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     <span class="title">Technical Specification</span>
                   </button>
                 </h2>
                 <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                   <div class="accordion-body">  @foreach($product->specifications as $i=>$specification)
                                 <li class="list-group-item">
                                    <div class="d-flex">
                                       <div class="col-6 light">{{$specification->parameters}}</div>
                                       <div class="col-6 dark">{{$specification->value}}</div>
                                    </div>
                                 </li>
                                 @endforeach</div>
                 </div>
               </div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingThree">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     <span class="title">What's in the package</span>
                   </button>
                 </h2>
                 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                   <div class="accordion-body">{{$product->package_items}}</div>
                 </div>
               </div>
               </div>
             </div>
            </div>
            <!-- End of mobile -->




             <div class="d-none d-lg-block">
               <div class="container">
                  <div class="product-spec-section mt-md-5">
                     <div class="col-lg-10">
                        <ul class="nav prod-spec-tab nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item flex-grow-1" role="presentation">
                              <button
                                 class="nav-link w-t-line  active"
                                 id="home-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#desc-tab"
                                 type="button"
                                 role="tab"
                                 aria-controls="desc-tab"
                                 aria-selected="true"
                                 >
                             Description
                              </button>
                           </li>
                           <li class="nav-item flex-grow-1" role="presentation">
                              <button
                                 class="nav-link w-t-line"
                                 id="home-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#tech-spec-tab"
                                 type="button"
                                 role="tab"
                                 aria-controls="tech-spec-tab"
                                 aria-selected="true"
                                 >
                              Technical Specification
                              </button>
                           </li>
                           <li class="nav-item flex-grow-1" role="presentation">
                              <button
                                 class="nav-link w-t-line"
                                 id="profile-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#package-tab"
                                 type="button"
                                 role="tab"
                                 aria-controls="package-tab"
                                 aria-selected="false"
                                 >
                              What’s in the package
                              </button>
                           </li>
                             
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                             <div
                              class="tab-pane fade show active"
                              id="desc-tab"
                              role="tabpanel"
                              aria-labelledby="desc-tab"
                              tabindex="0"
                              >
                                 <p class="mb-4">{{$product->description}}</p>
                        
                                 <ul class="mb-4">

                                @if($product->uas_category!=null)
                                   
                                         <li>
                                       <div class="d-flex">
                                       UAS Category : <div class="col-6 light">&nbsp;{{$product->uas_category}}</div>
                                       </div>
                                 </li>

                                @endif

                                     @if($product->type_certified!=null)

                                        @if($product->type_certified=="Y")
                                           <li>
                                           <div class="d-flex">
                                              Type Certified : <div class="col-6 light">&nbsp;Yes</div>
                                           </div>
                                         </li>
                                            @else
                                                 <li>
                                               <div class="d-flex">
                                                  Type Certified : <div class="col-6 light">&nbsp;No</div>
                                               </div>
                                         </li>
        
                                            @endif
    
                                    @endif

                                       
                                    
                                    @if($product->subcategory_id == 2)
                                       @if($product->use_type)
                                          <li>
                                                <div class="d-flex">
                                                  Application: <div class="col-6 light">&nbsp;{{$product->use_type}}</div>
                                                </div>
                                             </li>
                                       @endif
                                    @endif
                                    @if($product->robot_type)
                                       <li>
                                             <div class="d-flex">
                                               Application: <div class="col-6 light">&nbsp;{{$product->robot_type}}</div>
                                             </div>
                                          </li>
                                    @endif
                                       @if($product->certification)
                                          <li>
                                             <div class="d-flex">
                                               Certification: <div class="col-6 light">&nbsp;{{$product->certification}}</div>
                                             </div>
                                          </li>
                                       @endif  
                                        
                                     @if($product->aircraft_type!=null)
                                       <li>
                                       <div class="d-flex">
                                         Aircraft Type: <div class="col-6 light">&nbsp;{{$product->aircraft_type}}</div>
                                       </div>
                                        </li>
                                   
                                    @endif

                                    @if($product->propulsion!=null)
                                       <li>
                                       <div class="d-flex">
                                         Propulsion Type :  <div class="col-6 light">&nbsp;{{$product->propulsion}}</div>
                                       </div>
                                        </li>
                                  
                                    @endif

                                    @if($product->warranty_available!=null)
                                        @if($product->warranty_available=="2Y")
                                           <li>
                                           <div class="d-flex">
                                             Warranty Period : <div class="col-6 light">&nbsp;2 Years</div>
                                           </div>
                                         </li>
                                            @elseif($product->warranty_available=="1Y")
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-6 light">&nbsp;1 Year</div>
                                               </div>
                                         </li>
                                             @elseif($product->warranty_available=="6M")
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-6 light">&nbsp;6 Months</div>
                                               </div>
                                         </li>
                                         @else
                                                 <li>
                                               <div class="d-flex">
                                                 Warranty Period : <div class="col-6 light">&nbsp;None</div>
                                               </div>
                                         </li>                                                
                                        @endif
                                    @endif
                                    
                                     <li>
                                               <div class="d-flex">
                                                 Delivery Time : <div class="col-6 light">&nbsp;{{$product->delivery_lead_time}}</div>
                                               </div>
                                         </li>

                                    @if($product->engine_type!=null)
                                       <li>
                                       <div class="d-flex">
                                         Propulsion Type : <div class="col-6 light">&nbsp;{{$product->engine_type}}</div>
                                       </div>
                                        </li>
                                    @endif

                                    
                                   @if($product->compatible_with!=null)
                                       <li>
                                          <div class="d-flex">
                                             Compatible Products : <div class="col-6 light">&nbsp;{{$product->compatible_with}}</div>
                                          </div>
                                       </li>
                                       @endif

                                    @if($product->product_brochure_link!=null)
                                       <li>
                                          <div class="d-flex">
                                             Product Guide : <div class="col-6 light"><a target="_blank" href="{{$product->product_brochure_link}}" class="text-decoration-none">&nbsp;Visit <i class="fa fa-external-link"></i></a></div>
                                          </div>
                                       </li>
                                       @endif
                                  </ul>
                                    
                               <br>
                           </div>
                           <div
                              class="tab-pane fade"
                              id="tech-spec-tab"
                              role="tabpanel"
                              aria-labelledby="home-tab"
                              tabindex="0"
                              >
                             <table class="table table-bordered">
                                @foreach($product->specifications as $i=>$specification)
                                	<tr>
                                	<th>{{$specification->parameters}}:</th>
                                	<td>{{$specification->value}}</td>
                                	<tr>
                                @endforeach
                                </table>
                           </div>
                           <div
                              class="tab-pane fade"
                              id="package-tab"
                              role="tabpanel"
                              aria-labelledby="profile-tab"
                              tabindex="0"
                              >
                              <ul class="list-group prod-spec-list mb-4">

                                 @if($product->package_items!=null)
                                           <div class="col-6">{{$product->package_items}}</div>
                                  @else
                                     <li class="list-group-item">
                                    <div class="d-flex">
                                       <div class="col-6 light">Package items not available</div>
                                    </div>
                                 </li>
                                 @endif
                                 
                                
                              </ul>
                           </div>
                            
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- related products -->
            <section class="related-products">
               <!-- title -->
               <div class="d-flex related-products-head align-items-center flex-wrap flex-md-nowrap mb-3">
                  <div class="mb-2 w-t-line">
                     <p class="m-0 text related-text"><span class="highlight"> Related </span> Products</p>
                  </div>
                  <div class="mb-2 flex-grow-1 ps-2">
                     <div class="line"></div>
                  </div>
               </div>
               <!-- carousel -->
               <div class="px-lg-5">
                  <div class="owl-carousel related-products-carousel">
                     @foreach($related_products as $product)
                    <?php
                      $url = route('product.details', ['slug' => $product->slug ]);
                      $contact_url = route('enquiry', ['id' => $product->id ]);
                    ?>
                      @php
                $heart = in_array($product->id, $wishlists);
                $type = ($heart == true) ? 'false' : 'true';
                if($heart)
                {
                  $color = "red";
                }
                else
                {
                  $color="blue";
                }
            @endphp
                     <div>
                        <div class="product-list-card">
                           <div class="img-sec">
                              @if(isset($product->images) && count($product->images) > 0 && isset($product->images[0]['ImageUrl']))
                              <a href="{{$url}}">
                                 <img src="{{$product->images[0]['ImageUrl']}}" class="product-list-img" alt="">
                              </a>
                              @endif
                           </div>
                           <!-- pro name sec -->
                           <a href="{{$url}}" class="product-list-name"
                   style="height: 50px" >{{ Str::limit($product->title, 40) }}</a
                  >
                              
                           <div
                              class="d-flex align-items-center justify-content-between pl-sec"
                              >
                              @if($product->pricing_request=="N")
                                <p class="price m-0">₹{{$product->price}}</p> 
                                @else
                                    <p class="price" >Price on request</p>
                                @endif
                              <div class="location d-flex align-items-center gap-1 m-0">
                                 <p class="location-icon m-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </p>
                                 <div>
                                     <?php 
                                        $state = \App\Models\State::where('id',$product->state)->first();
                                     ?>
                                    <p class="m-0 city">{{$product->location}}</p>
                                     @if($state!=null)
                            <p class="m-0 street">{{$state->name}}</p>
                        @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                    
                  </div>
               </div>
            </section>
      </section>
      </div>

    </div>
</div>
<script type="text/javascript">
   function showOffers(button) {
      button.querySelector('.offer-pop-up').style.display = 'block';
   }

   function hideOffers(button) {
      button.querySelector('.offer-pop-up').style.display = 'none';
   }
</script>

@endsection
