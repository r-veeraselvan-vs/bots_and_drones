@extends('layouts.postadd')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data" id="form-submission" >
                        @csrf
                        <div class="row justify-content-center">
                            <!--<span style="color:red">* All fields are mandatory</span><br><br>-->
                            
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="category_id" type="text" class="form-select" name="category" onchange="loadSubcategory()" required>
                                             <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 mb-3 ">
                                <div class="row">
                                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Sub Category') }}<span class="text-danger">*</span></label>

                                    <div class="col-md-8">
                                        <select id="subcategory_id" type="text" class="form-select" name="subcategory_id">
                                             <option value="">Select Sub Category</option>
                                               
                                        </select>

                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                             <a href="" class="btn btn-danger" >Reset</a>
                            <button type="button" class="btn btn-primary" onclick="loadView()">Submit</button>
                        </div><br><br>
                    <div id="consumer" style="display:none">
                        @include('seller.components.consumer')
                    </div>
                      <div id="commercial" style="display:none">
                        @include('seller.components.commercial')
                    </div>
                     <div id="robots" style="display:none">
                        @include('seller.components.robots')
                    </div>
                     <div id="accessories" style="display:none">
                        @include('seller.components.accessories')
                    </div>
                 <div class="text-center" style="display:none" id="submit-form">
                  <button type="submit" class="btn btn-primary" id="submit_button">Add</button>
                  <a href="{{route('product.list')}}" class="btn btn-warning" >Cancel</a>
                 </div>
                      <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection