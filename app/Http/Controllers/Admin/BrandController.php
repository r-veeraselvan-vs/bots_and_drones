<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::get();
        return view('admin.brand.list',compact('brands'));
    }

     public function add()
    {
         return view('admin.brand.add');
    }
  

    public function save(Request $request)
    {
    
        $new = new Brand();
        $new->name = $request->name;
        $new->status = $request->status;
        $new->save();

        Toastr::success('Brand Added');
        return redirect(route('brand.list'));
    }

     public function edit($id)
    {
        $brand = Brand::where('id',$id)->first();
        return view('admin.brand.edit',compact('brand'));
    }
  

    public function update(Request $request)
    {
       
        
        $old = Brand::find($request->id);
        $old->name = $request->name;
        $old->status = $request->status;
        $old->save();

        Toastr::success('Brand Updated');
        return redirect(route('brand.list'));
    }

    public function delete(Request $request)
    {
        $brand = Brand::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Brand Deleted  Successfully'); 
 
    }
}
