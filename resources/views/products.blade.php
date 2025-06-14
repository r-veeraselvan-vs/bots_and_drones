@extends('layouts.appProductView')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <!-- Start of banner -->
    <div class="banner">
      <div class="row mx-0">
        <div class="col-md-8 ps-0">
        <img
                  src="{{$BannerUrl}}"
                  class="d-block w-100"
                    style="aspect-ratio: 1000/410; object-fit: fill;border-radius: 10px;"
                  alt="..."
                />
        </div>
        <div class="col-md-4 ps-0 d-sm-none d-md-block">
        <img
                  src="{{$SideBannerUrl}}"
                  class="d-block w-100"
                   style=" border-radius: 10px;"
                  alt="..."
                />
        </div>
       
      </div>
    </div>
    <!-- End of banner -->

    <!-- Start of Breadcrumb -->
    <div class="bd-breadcrumb">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <?php 
            $category = App\Models\Category::where('slug',request()->slug)->first();
            $subcategory = App\Models\SubCategory::where('slug',request()->item_type)->first();
           ?>
         @if(request()->item_type!=null)
              <!-- End of filter block -->
                     <li class="breadcrumb-item active" aria-current="page">Buy New {{$subcategory->name}}</li>
         @else
          <li class="breadcrumb-item active" aria-current="page">Buy New {{$category->name}}</li>
        
        @endif
        
            
          </ol>
        </nav>
      </div>
    </div>
    <!-- End of Breadcrumb -->

    <div class="product-listing">
      <div class="container">
          
         
        <div class="row">
            <?php 
            $category = App\Models\Category::where('slug',request()->slug)->first();
            $subcategory = App\Models\SubCategory::where('slug',request()->item_type)->first();
           ?>
         @if($subcategory!=null)
              <!-- End of filter block -->
               @if($subcategory->id=="2")
                    @include('components.category_filter_2')
                @else
                 @include('components.category_filter_1')
                @endif
        @elseif($category->id=="2")
            @include('components.category_filter_3')
        @else
         @include('components.category_filter_4')
        
        @endif
          <div class="col-lg-9">
             
            <!-- Start sort section -->
             @if (Session::has('warning'))
               
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  {{ Session::get('warning') }}  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif
              @if (Session::has('success'))
              
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ Session::get('success') }}  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif
           
            <!-- End sort section -->
           
            <div id="product_filter">

             @include('components.product')
            </div>
          </div>
        </div>
      </div>
    </div>
 
    </div>
</div>
        <input type="hidden" value="{{request()->sub_slug}}" id="sub_slug">
        <input type="hidden" value="{{request()->slug}}" id="slug">
        <input type="hidden" value="{{request()->menu}}" id="menu">
        <input type="hidden" value="{{request()->item_type}}" id="item_type">
         <input type="hidden" value="{{request()->location}}" id="locations">

 
@endsection
