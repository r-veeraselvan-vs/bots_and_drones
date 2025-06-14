@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">Training Center Add</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                       <form  method="post" action="{{route('training.centers.save')}}">
                        @csrf
                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name &nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="15" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">City/Town&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="location" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Courses&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                     <select class="selectpicker" multiple data-live-search="true" name="centers[]" required>
                      @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                      @endforeach
                         </select>
                  </div>
                </div>
                       
                
               
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Add</button>
                    
                   <a  class="btn btn-danger" href="{{route('training.centers.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>

                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
<script type="text/javascript">

    $(document).ready(function() {

        $('select').selectpicker();

    });

</script>