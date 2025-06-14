@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                     <div class="card-header"  style="height: 80px;border:none">
                        <h3 class="card-text">Training Enquiry</h3>
                      
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
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>City</th>
            <th>Country</th>
            <th>Course Name</th>
            <th>Center Name</th>
             <th>Requirement details</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($enquiries as $i=>$enquiry)
    <tr>
        <?php

         $service = \App\TrainingCourse::where('id',$enquiry->training_course_id)->first();
         $provider = \App\TrainingCenters::where('id',$enquiry->center_id)->first();

        ?>
        <td>{{$i+1}}</td>
        <td>{{$enquiry->name}}</td>
        <td>{{$enquiry->email}}</td>
        <td>{{$enquiry->mobile_no}}</td>
        <td>{{$enquiry->city}}</td>
        <td>{{$enquiry->country}}</td>
        <td>{{$service->name}}</td>
        <td>{{$provider->name}}</td>
        <td>{{$enquiry->message}}</td>
</tr>
@endforeach
</tbody>
</table>


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
