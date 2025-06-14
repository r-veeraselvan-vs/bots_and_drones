@extends('layouts.postEdit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('status') }}   <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

</div>
                    @endif
                    <form method="POST" action="{{ route('product.update.commercial') }}" enctype="multipart/form-data" id="form-submission">
                        @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="row justify-content-center">
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                    <div class="col-md-8">
                                        <select id="category_id" type="text" class="form-select" name="category" onchange="loadSubcategory()"  disabled="true">
                                             <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                                                @endforeach
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Sub Category') }}</label>

                                    <div class="col-md-8">
                                        <select id="subcategory_id" type="text" class="form-select" name="subcategory_id"  disabled="true">
                                             <option value="">Select Sub Category</option>
                                               
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                         @include('seller.components.edit.commercial')
                        
                    
                      <br><br>
                        @if(count($product->images)>0)
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" id="update_button" >Update</button>
                           <a href="{{route('product.list')}}" class="btn btn-warning" >Cancel</a>
                         </div>
                         @else
                         <div class="text-center">
                          <button type="submit" class="btn btn-primary" id="update_button" disabled>Update</button>
                          <a href="{{route('product.list')}}" class="btn btn-warning" >Cancel</a>
                         </div>
                         @endif
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection