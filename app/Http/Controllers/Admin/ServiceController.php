<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function list()
    {
        $services = Service::orderby('id','desc')->paginate(10);
        return view('admin.service.list', compact('services'));
    }

    public function add()
    {
        return view('admin.service.add');
    }

    public function save(Request $request)
    {
        $new = new Service;
        $new->name = $request->name;
        $new->description = $request->description;
        $new->save();
        return redirect(route('service.list'))->withSuccess('Service Added Successfully');

    }

    public function edit($id)
    {
        $service = Service::where('id',$id)->first();
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request)
    {
        $new = Service::find($request->id);
        $new->name = $request->name;
        $new->description = $request->description;
        $new->save();
               
        return redirect(route('service.list'))->withSuccess('Service Added Successfully');
    }

    public function delete(Request $request)
    {
        $Service = Service::find($request->id);

        if($Service->delete()){
        return redirect(route('service.list'))->withSuccess('Supplier Removed Successfully');

        }else{
            return redirect(route('service.list'))->withSuccess('Supplier Removed Successfully');

        }
    }
}
