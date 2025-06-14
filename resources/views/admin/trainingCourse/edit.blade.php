@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">Training Course Edit</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                       <form  method="post" action="{{route('courses.update')}}">
                        @csrf
                        <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" value="{{$course->name}}" name="name" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{$course->description}}" name="description">
                    <input type="hidden" class="form-control" value="{{$course->id}}" name="id">
                  </div>
                </div>
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Update</button>
                    
                                     <a  class="btn btn-danger" href="{{route('courses.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>

                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
