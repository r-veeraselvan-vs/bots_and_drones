<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;

class SuppliersController extends Controller
{
    public function list()
    {
        $suppliers = Supplier::orderby('id','desc')->paginate(10);
        return view('admin.supplier.list', compact('suppliers'));
    }

    public function add()
    {
        return view('admin.supplier.add');
    }

    public function save(Request $request)
    {
        $new = new Supplier;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->address = $request->address;
        $new->save();
        return redirect()->back()->withSuccess('Supplier Added Successfully');

    }

    public function edit($id)
    {
        $supplier = Supplier::where('id',$id)->first();
        return view('admin.supplier.edit',compact('supplier'));
    }

    public function update(Request $request)
    {
        $new = Supplier::find($request->id);
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->address = $request->address;
        $new->save();
               
        return redirect(route('supplier.list'));
    }

    public function delete(Request $request)
    {
        $Entry = Supplier::find($request->id);

        if($Entry->delete()){
        return redirect(route('supplier.list'))->withSuccess('Supplier Removed Successfully');

        }else{
            return redirect(route('supplier.list'))->withSuccess('Supplier Removed Successfully');

        }
    }
}
