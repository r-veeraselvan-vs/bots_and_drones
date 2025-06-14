<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Supplier;
use Illuminate\Support\Facades\Crypt;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::orderby('id','desc')->paginate(10);
        return view('admin.product.list', compact('products'));
    }

    public function add()
    {
        $suppliers = Supplier::orderby('id','desc')->get();
        return view('admin.product.add',compact('suppliers'));
    }

    public function save(Request $request)
    {
        dd($request);
        $new = new Product;
            if ($request->hasFile('image')){  
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension(); 
             $fileName = time().'.'.$extension;
             $path = public_path().'/images';
             $uplaod = $file->move($path,$fileName);
            $new->image = config('app.url')."public/images/".$fileName;

            }
        $new->supplier_id = $request->supplier_id;
        $new->name = $request->name;
        $new->product_code = $request->product_code;
        $new->description = $request->description;
        $new->brand = $request->brand_name;
        $new->color = $request->color;
        $new->model_name = $request->model_name;
        $new->save();

        $new = Product::find($new->id);
        $new->link = config('app.url')."product/" . encrypt($new->id);
        $new->save();

        return redirect()->back()->withSuccess('Product Added Successfully');

    }

    public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        $suppliers = Supplier::orderby('id','desc')->get();
        return view('admin.product.edit',compact('product','suppliers'));
    }

    public function update(Request $request)
    {
         $new = Product::find($request->id);
         if ($request->hasFile('image')){  
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension(); 
             $fileName = time().'.'.$extension;
             $path = public_path().'/images';
             $uplaod = $file->move($path,$fileName);
             $new->image = config('app.url')."public/images/".$fileName;

            }
       
        $new->supplier_id = $request->supplier_id;
        $new->name = $request->name;
        $new->product_code = $request->product_code;
        $new->description = $request->description;
        $new->brand = $request->brand_name;
        $new->color = $request->color;
        $new->model_name = $request->model_name;
        $new->save();
               
        return redirect(route('product.list'));
    }

    public function delete(Request $request)
    {
        $Entry = Product::find($request->id);

        if($Entry->delete()){
        return redirect(route('product.list'))->withSuccess('Product Removed Successfully');

        }else{
            return redirect(route('product.list'))->withSuccess('Product Removed Successfully');

        }
    }
}
