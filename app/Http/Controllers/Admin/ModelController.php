<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models;
use Brian2694\Toastr\Facades\Toastr;

class ModelController extends Controller
{
    public function list()
    {
        $models = Models::get();
        return view('admin.models.list',compact('models'));
    }

     public function add()
    {
         return view('admin.models.add');
    }
  

    public function save(Request $request)
    {
    
        $new = new Models();
        $new->name = $request->name;
        $new->status = $request->status;
        $new->save();

        Toastr::success('Model Added');
        return redirect(route('models.list'));
    }

     public function edit($id)
    {
        $model = Models::where('id',$id)->first();
        return view('admin.models.edit',compact('model'));
    }
  

    public function update(Request $request)
    {
       
        
        $old = Models::find($request->id);
        $old->name = $request->name;
        $old->status = $request->status;
        $old->save();

        Toastr::success('Model Updated');
        return redirect(route('models.list'));
    }

    public function delete(Request $request)
    {
        $model = Models::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Model Deleted  Successfully'); 
 
    }
}
