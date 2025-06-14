<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::get();
        return view('admin.category.list',compact('categories'));
    }

     public function add()
    {
         return view('admin.category.add');
    }
  

    public function save(Request $request)
    {
        if($request->has('image')){
            $folder = 'category/';   

            $image = $this->upload_image('IMG', $folder, $request->image);
        }else{
            $image = null;
        }
         if($request->has('banner_image')){
            $folder = 'category/banner';   
            $banner_image = $this->upload_image('IMG', $folder, $request->banner_image);
        }else{
            $banner_image = $request->old_banner_image;
        }
         if($request->has('side_banner_image')){
            $folder = 'category/sidebanner';   
            $side_banner_image = $this->upload_image('IMG', $folder, $request->side_banner_image);
        }else{
            $side_banner_image = $request->old_side_banner_image;
        }

        $new = new Category();
        $new->name = $request->name;
        $new->status = $request->status;
        $new->show_in_home = $request->show_in_home;
        $new->image = $image;
        $new->banner_image = $banner_image;
        $new->side_banner_image = $side_banner_image;
        $new->save();

        Toastr::success('Category Added');
        return redirect(route('category.list'));
    }

     public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }
  

    public function update(Request $request)
    {
        if($request->has('image')){
            $folder = 'category/';   
            $image = $this->upload_image('IMG', $folder, $request->image);
        }else{
            $image = $request->old_image;
        }

        if($request->has('banner_image')){
            $folder = 'category/banner';   
            $banner_image = $this->upload_image('IMG', $folder, $request->banner_image);
        }else{
            $banner_image = $request->old_banner_image;
        }

        if($request->has('side_banner_image')){
            $folder = 'category/sidebanner';   
            $side_banner_image = $this->upload_image('IMG', $folder, $request->side_banner_image);
        }else{
            $side_banner_image = $request->old_side_banner_image;
        }
        
        $old = Category::find($request->id);
        $old->status = $request->status;
        $old->show_in_home = $request->show_in_home;
        $old->image = $image;
        $old->banner_image = $banner_image;
        $old->side_banner_image = $side_banner_image;
        $old->save();

        Toastr::success('Category Updated');
        return redirect(route('category.list'));
    }

    public function delete(Request $request)
    {
        $category = Category::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Category Deleted  Successfully'); 
 
    }
}