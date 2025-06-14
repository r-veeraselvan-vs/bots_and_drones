@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">SubCategory Edit</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                      <form  method="post" action="{{route('subcategory.update')}}" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" name="id" value="{{ $subcategory->id }}">
                <input type="hidden" name="old_image" value="{{ $subcategory->image }}">
                <input type="hidden" name="old_banner_image" value="{{ $subcategory->banner_image }}">
                <input type="hidden" name="old_side_banner_image" value="{{ $subcategory->side_banner_image }}">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Category<span class="text-danger">*</span></label>
                  <div class="col-sm-12">
                    <select class="form-control" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($subcategory->category_id == $category->id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                 
                </div>
            </div> 
                 <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" value=" {{$subcategory->name}}" required>
                  </div>
                 
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Image&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                  {{$subcategory->ImageUrl}}
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Banner Image&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="banner_image" required>
                  </div>
                  {{$subcategory->BannerImageUrl}}
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Side Banner Image</label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="side_banner_image">
                  </div>
                  {{$subcategory->SideBannerImageUrl}}
                </div>
                 <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Show In Home&nbsp;<span style="color:red">*</span></label> 
                                                <div class="col-12">
                                                        <select name="show_in_home" id="show_in_home" class="form-select" required>
                                                             <option value="">Select Status</option>
                                                                <option value="Y"@if($subcategory->show_in_home == "Y") selected @endif>Yes</option>
                                                                <option value="N" @if($subcategory->show_in_home == "N") selected @endif>No</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Status&nbsp;<span style="color:red">*</span></label> 
                                                <div class="col-12">
                                                        <select name="status" id="status" class="form-select" required>
                                                             <option value="">Select Status</option>
                                                                <option value="Active" @if($subcategory->status == "Active") selected @endif>Active</option>
                                                                <option value="Inactive" @if($subcategory->status == "Inactive") selected @endif>Inactive</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Update</button>
                    
                    <a  class="btn btn-danger"  href="{{route('subcategory.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>
                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
