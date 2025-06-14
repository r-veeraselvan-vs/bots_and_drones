<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use Brian2694\Toastr\Facades\Toastr;

class StateController extends Controller
{
    public function list()
    {
        $states = State::get();
        return view('admin.state.list',compact('states'));
    }

     public function add()
    {
         return view('admin.state.add');
    }
  

    public function save(Request $request)
    {
      
        $new = new State();
        $new->name = $request->name;
        $new->status = $request->status;
        $new->save();

        Toastr::success('State Added');
        return redirect(route('state.list'));
    }

     public function edit($id)
    {
        $state = State::where('id',$id)->first();
        return view('admin.state.edit',compact('state'));
    }
  

    public function update(Request $request)
    {
        
        
        $old = State::find($request->id);
        $old->status = $request->status;
        $old->name = $request->name;
        $old->save();

        Toastr::success('State Updated');
        return redirect(route('state.list'));
    }


    public function delete(Request $request)
    {
        $state = State::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'State Deleted  Successfully'); 
 
    }

}
