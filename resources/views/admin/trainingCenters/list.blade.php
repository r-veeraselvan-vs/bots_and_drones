@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header"  style="height: 80px;border:none">
                         <table class="table table-borderless ">
                           <tr>
                               <td><h3 class="card-text">Training Centers</h3></td>
                               <td>  <div style="float: right;">
                            <a  class="btn btn-primary " href="{{route('training.centers.add')}}" style="padding: 6px 20px 6px 20px;"><i class="fa fa-plus" aria-hidden="true" ></i> Add</a>
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
            <th>Email</th>
            <th>Mobile No</th>
            <th>Location</th>
            <th>Courses</th>
            <th>Link</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($centers as $i=>$center)
    <?php 
        $myArray = explode(',', $center->training_course_id);
        $courses = \App\TrainingCourse::whereIn('id',$myArray)->pluck('name')->toArray();
         $courses = implode(',', $courses);
    ?>
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$center->name}}</td>
        <td>{{$center->email}}</td>
        <td>{{$center->mobile_no}}</td>
        <td>{{$center->location}}</td>
         <td>{{$courses}}</td>
          <td>
            <a  class="btn btn-sm btn-success" id="{{$center->link}}"role="button" onclick="copyToClipboard(this.id)">Copy</a>
           </td>
        <td><a class="badge badge-primary" href="{{url('/training-centers/edit')}}/{{$center->id}}"><i class="bi bi-pencil-square" style="font-size:20px;color:white"></i></a>
        </td>
       
    
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
                <div class="row" style="float:right">
                {{ $centers->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to service prod")) {
        $.ajax({
            type : 'get',
            url : '{{route('service.delete')}}',
            data : {'id':value},
            success:function(data){
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>
<script>
   function copyToClipboard(text) {
    console.log(text);
    const elem = document.createElement('textarea');
   elem.value = text;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
   document.body.removeChild(elem);
   alert("Copied");
   
}
</script>