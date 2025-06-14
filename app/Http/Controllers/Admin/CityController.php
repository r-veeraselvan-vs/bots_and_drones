<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\City;

class CityController extends Controller
{
    public function list()
    {
         $cities = City::paginate(10);
        return view('admin.city.list',compact('cities'));
    }

     public function add()
    {
        $states = City::where('status','Active')->get();
         return view('admin.city.add',compact('states'));
    }
  

    public function save(Request $request)
    {
      
        $new = new City();
        $new->state_id = $request->state_id;
        $new->name = $request->name;
        $new->status = $request->status;
        $new->save();

        Toastr::success('City Added');
        return redirect(route('city.list'));
    }

     public function edit($id)
    {
        $states = State::where('status','Active')->get();
        $state_id = State::get(); 
        $city = City::where('id',$id)->first();
        return view('admin.city.edit',compact('states','city'));
    }
  

    public function update(Request $request)
    {
        
        $old = City::find($request->id);
        $old->state_id = $request->state_id;
        $old->status = $request->status;
        $old->name = $request->name;
        $old->save();

        Toastr::success('City Updated');
        return redirect(route('city.list'));
    }

    public function delete(Request $request)
    {
        $city = City::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'City Deleted  Successfully'); 
    }
}
