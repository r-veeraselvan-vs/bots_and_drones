@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">City Add</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                       <form  method="post" action="{{route('city.save')}}" enctype="multipart/form-data">
                        @csrf
                       
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">State&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <select name="state_id" class="form-select" onchange="getRobotsCity(this.value)">
                                              <option value="">Select State</option>
                                              <?php
                                                    $states = App\Models\State::get();
                                              ?>
                                              @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                              @endforeach
                                             </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-12 col-form-label">City&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>

                <div class="form-group row mb-3">
                                                <label for="status" class="col-12 col-form-label">Status</label> 
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
                    
                    <a  class="btn btn-danger"  href="{{route('city.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>
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