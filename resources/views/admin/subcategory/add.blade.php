@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">SubCategory Add</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                       <form  method="post" action="{{route('subcategory.save')}}" enctype="multipart/form-data">
                        @csrf
                     <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Category<span class="text-danger">*</span></label>
                  <div class="col-sm-12">
                    <select class="form-control" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                 
                </div>
            </div>    
                 <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" required>
                 
                </div>
            </div>
                 <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Image&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Banner Image&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="banner_image">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">Side Banner Image</label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="side_banner_image">
                  </div>
                  <p style="color: red;"></p>
                </div>
                 <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Show In Home&nbsp;<span style="color:red">*</span></label> 
                                                <div class="col-12">
                                                        <select name="show_in_home" id="show_in_home" class="form-select" required>
                                                             <option value="">Select Status</option>
                                                                <option value="Y">Yes</option>
                                                                <option value="N">No</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Status&nbsp;<span style="color:red">*</span></label> 
                                                <div class="col-12">
                                                        <select name="status" id="status" class="form-select" required>
                                                             <option value="">Select Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Add</button>
                    
                    <a  class="btn btn-danger"  href="{{route('subcategory.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>
                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
  

    $(document).ready(function(){
       
        $('#mobile_no').keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsgMonth").html("Digits Only").show().fadeOut("slow");
          return false;
      }
  });
      });
</script>