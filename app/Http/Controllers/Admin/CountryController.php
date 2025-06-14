<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use Brian2694\Toastr\Facades\Toastr;

class CountryController extends Controller
{
    public function list()
    {
        $countries = Countries::get();
        return view('admin.country.list',compact('countries'));
    }

     public function add()
    {
         return view('admin.country.add');
    }
  

    public function save(Request $request)
    {
      
        $new = new Countries();
        $new->name = $request->name;
        $new->currency_symbol = $request->currency_symbol;
        $new->status = $request->status;
        $new->save();

        Toastr::success('Country Added');
        return redirect(route('country.list'));
    }

     public function edit($id)
    {
        $country = Countries::where('id',$id)->first();
        return view('admin.country.edit',compact('country'));
    }
  

    public function update(Request $request)
    {
        
        
        $old = Countries::find($request->id);
        $old->status = $request->status;
        $old->currency_symbol = $request->currency_symbol;
        $old->name = $request->name;
        $old->save();

        Toastr::success('Country Updated');
        return redirect(route('country.list'));
    }


    public function delete(Request $request)
    {
        $country = Countries::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Country Deleted  Successfully'); 
 
    }
}
