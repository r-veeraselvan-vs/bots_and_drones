<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\ServiceProvider;
use Illuminate\Support\Facades\Crypt;

class ServiceProviderController extends Controller
{
     public function list()
    {
        $providers = ServiceProvider::orderby('id','desc')->paginate(10);
        return view('admin.service_provider.list', compact('providers'));
    }

    public function add()
    {
        $services = Service::orderby('id','desc')->get();
        return view('admin.service_provider.add',compact('services'));
    }

    public function save(Request $request)
    {
        $new = new ServiceProvider;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->location = $request->location;
        $new->service_id = implode(', ', $request->services);
        $new->save();

         $new = ServiceProvider::find($new->id);
        $new->link = config('app.url')."service/enquiry/" . encrypt($new->id);
        $new->save();
        return redirect(route('service.provider.list'))->withSuccess('Service provider  Added Successfully');

    }

    public function edit($id)
    {
        $services = Service::orderby('id','desc')->get();
        $provider = ServiceProvider::where('id',$id)->first();
        return view('admin.service_provider.edit',compact('provider','services'));
    }

    public function update(Request $request)
    {
        $new = ServiceProvider::find($request->id);
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->location = $request->location;
        if($request->services!=null)
        {
            $new->service_id = implode(', ', $request->services);
        }
        $new->save();
               
        return redirect(route('service.provider.list'))->withSuccess('Service provider Updated Successfully');
    }

    public function delete(Request $request)
    {
        $Service = Service::find($request->id);

        if($Service->delete()){
        return redirect(route('service.provider.list'))->withSuccess('Supplier Removed Successfully');

        }else{
            return redirect(route('service.provider.list'))->withSuccess('Supplier Removed Successfully');

        }
    }
}
