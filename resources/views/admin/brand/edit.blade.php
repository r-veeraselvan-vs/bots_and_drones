@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">Brand Edit</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      <form  method="post" action="{{route('brand.update')}}" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" name="id" value="{{ $brand->id }}">
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" value="{{$brand->name}}" required>
                  </div>
                 </div>

                <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Status&nbsp;<span style="color:red">*</span></label> 
                                                <div class="col-12">
                                                        <select name="status" id="status" class="form-select" required>
                                                             <option value="">Select Status</option>
                                                                <option value="Active" @if($brand->status == "Active") selected @endif>Active</option>
                                                                <option value="Inactive" @if($brand->status == "Inactive") selected @endif>Inactive</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Update</button>
                    
                    <a  class="btn btn-danger"  href="{{route('brand.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>
                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
