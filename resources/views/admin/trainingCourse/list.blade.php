@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header"  style="height: 80px;border:none">
                        
                         <table class="table table-borderless ">
                           <tr>
                               <td><h3 class="card-text">Training Courses</h3></td>
                               <td>  <div style="float: right;">
                            <a  class="btn btn-primary " href="{{route('courses.add')}}" style="padding: 6px 20px 6px 20px;"><i class="fa fa-plus" aria-hidden="true" ></i> Add</a>
                            </div></td>
                           </tr>
                           </table>
                    </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-2">
                        
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif

                    <table class="table table-bordered ">
    <?php
        $i=1;
        ?>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($courses as $i=>$course)
    <?php 
        $providerCount = \App\TrainingCenters::where('training_course_id',$course->id)->count();
    ?>
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$course->name}}</td>
         <td>{{$course->description}}</td>
          <td><a class="badge badge-primary" href="{{url('/trainer-courses/edit')}}/{{$course->id}}"><i class="bi bi-pencil-square" style="font-size:20px;color:white"></i></a>
          </td>
          @if($providerCount<=0)
          <td><a class="badge badge-info" onclick="Delete({{$course->id}})" style="cursor:pointer"><i class="bi bi-trash" style="font-size:20px;color:white"></i></a>&nbsp;</td>
          @else
          <td> - </td>
          @endif
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
                <div class="row" style="float:right">
                {{ $courses->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to course")) {
        $.ajax({
            type : 'get',
            url : '{{route('courses.delete')}}',
            data : {'id':value},
            success:function(data){
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>