<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportingPartner;
use Brian2694\Toastr\Facades\Toastr;

class SupportingPartnerController extends Controller
{
    public function list()
    {
        $supporting_partner = SupportingPartner::get();
        return view('admin.supporting_partner.list',compact('supporting_partner'));
    }

     public function add()
    {
         return view('admin.supporting_partner.add');
    }
  

    public function save(Request $request)
    {
        if($request->has('image')){
            $folder = 'supporting_partners/';   

            $image = $this->upload_image('IMG', $folder, $request->image,$request);
        }else{
            $image = null;
        }

        $new = new SupportingPartner();
        $new->name = $request->name;
        $new->status = $request->status;
        $new->image = $image;
        $new->save();

        Toastr::success('Supporting Partner Image Added');
        return redirect(route('supporting_partner.list'));
    }

     public function edit($id)
    {
        $supporting_partner = SupportingPartner::where('id',$id)->first();
        return view('admin.supporting_partner.edit',compact('supporting_partner'));
    }
  

    public function update(Request $request)
    {
        if($request->has('image')){
            $folder = 'supporting_partners/';   
            $image = $this->upload_image('IMG', $folder, $request->image,$request);
        }else{
            $image = $request->old_image;
        }
        
        $old = SupportingPartner::find($request->id);
        $old->name = $request->name;
        $old->status = $request->status;
        $old->image = $image;
        $old->save();

        Toastr::success('Supporting Partner Image Updated');
        return redirect(route('supporting_partner.list'));
    }


    public function delete(Request $request)
    {
        $supporting_partner = SupportingPartner::where('id', $request->id)->delete();
        return redirect()->route('supporting_partner.list')->withSuccess('Supporting Partner Image Deleted Successfully');
    }

}
