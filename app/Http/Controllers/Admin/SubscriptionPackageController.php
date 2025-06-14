<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPackage;
use Brian2694\Toastr\Facades\Toastr;

class SubscriptionPackageController extends Controller
{
    public function list()
    {
        $subscription_package = SubscriptionPackage::get();
        return view('admin.subscription_package.list',compact('subscription_package'));
    }

     public function add()
    {
         return view('admin.subscription_package.add');
    }
  

    public function save(Request $request)
    {
    
        $new = new SubscriptionPackage();
        $new->type = $request->type;
        $new->products = $request->products;
        $new->status = $request->status;
        $new->save();

        Toastr::success('Subscription Package Added');
        return redirect(route('subscription_package.list'));
    }

     public function edit($id)
    {
        $subscription_package = SubscriptionPackage::where('id',$id)->first();
        return view('admin.subscription_package.edit',compact('subscription_package'));
    }
  

    public function update(Request $request)
    {
       
        
        $old = SubscriptionPackage::find($request->id);
        $old->type = $request->type;
        $old->products = $request->products;
        $old->status = $request->status;
        $old->save();

        Toastr::success('Subscription Package Updated');
        return redirect(route('subscription_package.list'));
    }

    public function delete(Request $request)
    {
        $subscription_package = SubscriptionPackage::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Subscription Package Deleted  Successfully'); 
 
    }
}
