<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Brian2694\Toastr\Facades\Toastr;

class BannerController extends Controller
{
    public function list()
    {
        $banners = Banner::get();
        return view('admin.banner.list',compact('banners'));
    }

     public function add()
    {
         return view('admin.banner.add');
    }
  

    public function save(Request $request)
    {
        if($request->has('image')){
            $folder = 'banner/';   

            $image = $this->upload_image('IMG', $folder, $request->image,$request);
        }else{
            $image = null;
        }

        $new = new Banner();
        $new->status = $request->status;
        $new->image = $image;
        $new->save();

        Toastr::success('Banner Added');
        return redirect(route('banner.list'));
    }

     public function edit($id)
    {
        $banner = Banner::where('id',$id)->first();
        return view('admin.banner.edit',compact('banner'));
    }
  

    public function update(Request $request)
    {
        if($request->has('image')){
            $folder = 'banner/';   
            $image = $this->upload_image('IMG', $folder, $request->image,$request);
        }else{
            $image = $request->old_image;
        }
        
        $old = Banner::find($request->id);
        $old->status = $request->status;
        $old->image = $image;
        $old->save();

        Toastr::success('Banner Updated');
        return redirect(route('banner.list'));
    }


    public function delete(Request $request)
    {
        $banner = Banner::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Banner Deleted  Successfully'); 
 
    }
}
