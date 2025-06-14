@extends('layouts.admin')

@section('content')
 <div class="col-md-12">
                 <div class="card">
                  <div class="card-header">
                    <h5 class="card-text">Supplier Edit</h5>
                  </div>
                  <div class="card-body">
                     <div class="col-md-12 pt-4">
                      @if (\Session::has('success'))
                    <div class="alert alert-success">
                        
                            {!! \Session::get('success') !!}
                    </div>
                @endif
                       <form  method="post" action="{{route('product.update')}}"enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Supplier Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <select  name="supplier_id" class="form-select" required>
                      <option value="">Select Supplier</option>
                      @foreach($suppliers as $supplier)
                        <option value="{{$supplier->id}}" <?=($supplier->id == $product->supplier_id)?'selected':''?>>{{$supplier->name}}</option>
                      @endforeach

                    </select>
                  </div>
                </div>
                <input type="hidden" value="{{$product->id}}"  name="id" class="form-control">
                        <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Product Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" value="{{$product->name}}"  name="name" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-3 col-form-label">Product Code&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" value="{{$product->product_code}}" name="product_code" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Product Description&nbsp;<span style="color:red">*</span> </label>
                  <div class="col-sm-8">
                   <textarea class="form-control" name="description" style="height: 100px" required>{{$product->description}}</textarea>
                  </div>
                </div>
                 <div class="row mb-3">
                 
                   <label for="formFile" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*" >
                    
                  </div>

                </div>
                <div class="row mb-3">
                  <label for="formFile" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-8">
                  <a href="{{$product->image}}" target="_blank">{{$product->image}}</a>
                </div>
              </div>
                <div class="row mb-3">
                  <label for="brand_name" class="col-sm-3 col-form-label">Brand Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="brand_name" class="form-control" value="{{$product->brand}}" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="color" class="col-sm-3 col-form-label">Color&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="color" class="form-control"  value="{{$product->color}}" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="model_name" class="col-sm-3 col-form-label">Model Name&nbsp;<span style="color:red">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="model_name" class="form-control" value="{{$product->model_name}}" required>
                  </div>
                </div>
               
                <div class="row mb-3" align="center">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 50px 10px 50px;">Update</button>
                    <a  class="btn btn-danger"  href="{{route('product.list')}}" style="padding: 10px 50px 10px 50px;">Cancel</a>
                  </div>
             </form>
                     </div>
                  </div>
               </div>
            </div>


            @endsection
