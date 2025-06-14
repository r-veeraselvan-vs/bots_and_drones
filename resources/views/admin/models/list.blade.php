@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header"  style="height: 80px;border:none">
                        <h3 class="card-text"></h3>
                         <table class="table table-borderless ">
                           <tr>
                               <td><h3 class="card-text">Models</h3></td>
                               <td>  <div style="float: right;">
                            <a  class="btn btn-primary " href="{{route('models.add')}}" style="padding: 6px 20px 6px 20px;"><i class="fa fa-plus" aria-hidden="true" ></i> Add</a>
                            </div></td>
                           </tr>
                           </table>
                           
                    </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-2">
                      
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($models as $i=>$model)
    
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$model->name}}</td>
        <td>{{$model->status}}</td>
          <td><a class="badge badge-primary" href="{{url('/admin/models/edit')}}/{{$model->id}}"><i class="bi bi-pencil-square" style="font-size:20px;color:white"></i></a>
        <a class="badge badge-danger" onclick="Delete('{{$model->id}}')" href=""><i class="fa fa-trash" style="font-size:20px;color:red"></i></a>  
        </td>
         
    
</tr>
@endforeach
</tbody>
</table>

<div class="row mb-3" align="center">
                  <div class="col-sm-12">                    
                    <a  class="btn btn-danger"  href="{{route('configurations.list')}}" style="padding: 10px 50px 10px 50px;">Back</a>
                  </div>
              </div>
                   
                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function Delete (value) {
      if (confirm("Are your sure you want to Delete")) {
        $.ajax({
            type : 'get',
            url : '{{route('models.delete')}}',
            data : {'id':value},
            success:function(data){
              window.location.reload();
          } 
      });

    } else {
     
    }
}
</script>