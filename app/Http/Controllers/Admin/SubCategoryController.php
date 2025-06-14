<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function list()
    {
        $subcategories = SubCategory::get();
        $categories = Category::where('status','Active')->get();
        return view('admin.subcategory.list',compact('subcategories','categories'));
    }

     public function add()
    {
        $categories = Category::where('status','Active')->get();
         return view('admin.subcategory.add',compact('categories'));
    }
  

    public function save(Request $request)
    {
        if($request->has('image')){
            $folder = 'subcategory/';   

            $image = $this->upload_image('IMG', $folder, $request->image);
        }else{
            $image = null;
        }
         if($request->has('banner_image')){
            $folder = 'subcategory/banner/';   
            $banner_image = $this->upload_image('IMG', $folder, $request->banner_image);
        }else{
            $banner_image = $request->old_banner_image;
        }
         if($request->has('side_banner_image')){
            $folder = 'subcategory/sidebanner';   
            $side_banner_image = $this->upload_image('IMG', $folder, $request->side_banner_image);
        }else{
            $side_banner_image = $request->old_side_banner_image;
        }

        $new = new SubCategory();
        $new->category_id = $request->category_id;
        $new->name = $request->name;
        $new->status = $request->status;
        $new->image = $image;
        $new->banner_image = $banner_image;
        $new->side_banner_image = $side_banner_image;
        $new->show_in_home = $request->show_in_home;
        $new->save();

        Toastr::success('Sub Category Added');
        return redirect(route('subcategory.list'));
    }

     public function edit($id)
    {
        $subcategory = SubCategory::where('id',$id)->first();
        $categories = Category::where('status','Active')->get();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
    }
  

    public function update(Request $request)
    {
        if($request->has('image')){
            $folder = 'subcategory/';   
            $image = $this->upload_image('IMG', $folder, $request->image);
        }else{
            $image = $request->old_image;
        }

        if($request->has('banner_image')){
            $folder = 'subcategory/banner/';   
            $banner_image = $this->upload_image('IMG', $folder, $request->banner_image);
        }else{
            $banner_image = $request->old_banner_image;
        }
        if($request->has('side_banner_image')){
            $folder = 'subcategory/sidebanner';   
            $side_banner_image = $this->upload_image('IMG', $folder, $request->side_banner_image);
        }else{
            $side_banner_image = $request->old_side_banner_image;
        }
        
        $old = SubCategory::find($request->id);
        $old->category_id = $request->category_id;
        $old->status = $request->status;
        $old->image = $image;
        $old->banner_image = $banner_image;
        $old->side_banner_image = $side_banner_image;
        $old->show_in_home = $request->show_in_home;
        $old->save();

        Toastr::success('Sub Category Updated');
        return redirect(route('subcategory.list'));
    }

    public function delete(Request $request)
    {
        $subcategory = SubCategory::where('id',$request->id)->delete();
        return redirect()->route('subscription_package.list')->with('success', 'SubCategory Deleted Successfully');
 
    }
}
