<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Products;
use App\Models\ProductImages;
use App\Models\ProductSpecifications;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductPackages;
use App\Models\City;
use App\Models\State;
use App\Models\Brand;
use App\Models\Models;
use App\Models\Country;
use App\Models\Wishlist;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use View;
use Response;

class ProductsController extends Controller
{
    public function postAdd()
    {
        Session::put('post-ad','true');
        if(Auth::check())
        {
            $categories = Category::where('status','Active')->get();
            $subcategories = SubCategory::where('status','Active')->get();
            $cities = City::where('status','Active')->orderby('name','asc')->get();
            $brands = Brand::where('status','Active')->orderby('name','asc')->where('category','consumer')->get();
            $commericalbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','commercial')->get();
            $accessoriesbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','accessories')->get();
            $robotsbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','robots')->get();
            $models = Models::where('status','Active')->where('category','consumer')->orderby('name','asc')->get();
            $commercicalmodels = Models::where('status','Active')->where('category','commercial')->orderby('name','asc')->get();
             $countries =  Country::all();
            return view('seller.add',compact('categories','subcategories','cities','brands','models', 'countries','commericalbrands','accessoriesbrands','robotsbrands','models','commercicalmodels'));
        }
        return redirect()->route('login');
    }

    public function add(Request $request)
    {
        $slug = $this->getUniqueSlug($request->consumer_title, 'product');
        if($request->consumer_brand=="Other")
        {
            $brandNew = New Brand();
            $brandNew->name = $request->consumer_other_brand;
            $brandNew->category = "consumer";
            $brandNew->status = "Active";
            $brandNew->save();
            $brand = $request->consumer_other_brand;
        }
        else
        {
            $brand = $request->consumer_brand;
        }
        
         $brands = Brand::where('name',$brand)->first();
         if($request->consumer_model_name=="Other")
        {
            $modelNew = new Models();
            $modelNew->brand_id = $brands->id;
            $modelNew->name = $request->consumer_other_model_name;
            $modelNew->status = "Active";
            $modelNew->category = "consumer";
            $modelNew->save();
            $model = $request->consumer_other_model_name;
        }
        else
        {
            $model = $request->consumer_model_name;
        }
        if($request->consumer_location=="Other")
        {
            $New = new City();
            $New->state_id = $request->consumer_state;
            $New->name = $request->consumer_other_location;
            $New->status = "Active";
            $New->save();
            $location = $request->consumer_other_location;
        }
        else
        {
            $location = $request->consumer_location;
        }

        $new = new Products();
        $new->user_id = auth()->user()->id;
        $new->title = $request->consumer_title;
        $new->date = date('Y-m-d');
        $new->location = $location;
        $new->state = $request->consumer_state;
        $new->country = $request->consumer_country;
        $new->price = $request->consumer_price;
        $new->brand = $brand;
        $new->model_name = $model;
        $new->description = $request->consumer_description;
        $new->category_id = $request->category;
        $new->subcategory_id = $request->subcategory_id;
        $new->uas_category = $request->consumer_uas_category;
        $new->package_items = $request->consumer_package_items;

        $new->finance = $request->consumer_finance;
        $new->offers = $request->consumer_offers;
        $new->product_brochure_link = $request->consumer_product_brochure_link;
        $new->made_in = $request->consumer_made_in;
        $new->method = $request->consumer_method;
        
         if($request->has('consumer_pricing_request'))
        {
            if($request->consumer_pricing_request=="on")
            {
                $new->pricing_request = "Y";
            }
            else if($request->consumer_pricing_request=="Y")
            {
                $new->pricing_request = "Y";
            }
             else
            {
                $new->pricing_request = "N";
            }
            
        }
        else
        {
            $new->pricing_request = "N";
        }
        
        if($request->has('consumer_gst_included'))
        {
            if($request->consumer_gst_included=="on")
            {
                $new->gst_included = "Y";
            }
            else if($request->consumer_gst_included=="Y")
            {
                $new->gst_included = "Y";
            }
             else
            {
                $new->gst_included = "N";
            }
         }
        else
        {
            $new->gst_included = "N";
        }
        $new->delivery_lead_time = $request->consumer_delivery_lead_time;
 
        $new->use_type = $request->consumer_use_type;
        $new->engine_type = $request->consumer_engine_type;
        $new->warranty_available = $request->consumer_warranty_available;
        $new->type_certified = $request->consumer_type_certified;
        $new->status = $request->consumer_status;
        $new->slug = $slug;
        $new->save();
        Session::put('added_product_id',$new->id);
        if($request->Consumerdata){
            foreach($request->Consumerdata as $data){
                      $folder = 'product/image';   
                     if(isset($data['image'])){
                        $uploadedFile =  $data['image'];
                        $thumbnail =  $data['image']->getClientOriginalName();
                    
                        $image = time().$uploadedFile->getClientOriginalName();
                         $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
                 
    
                        $newImage = new ProductImages();
                        $newImage->product_id          = Session::get('added_product_id');
                        $newImage->image               = $image;
                        $newImage->display_order       = $data['display_order'];
                        $newImage->save();
                     }
               
            }
        }
         if($request->Consumerspec){
            foreach($request->Consumerspec as $spec){
                if($spec['tech_parameter']!=null)
                {
                    $new = new ProductSpecifications();
                    $new->product_id  = Session::get('added_product_id');
                    $new->parameters  = $spec['tech_parameter'];
                    $new->value       = $spec['tech_value'];
                    $new->save();
                }
                    
              
            }
        }
       
        return redirect()->route('product.list')->with('status', 'Product Added Successfully');
    }

    public function edit($id)
    {
        $product = Products::with('images','specifications','packages')->where('id',$id)->first();
         $categories = Category::where('status','Active')->orderby('name','asc')->get();
            $subcategories = SubCategory::where('status','Active')->orderby('name','asc')->get();
            $cities = City::where('status','Active')->orderby('name','asc')->get();
            $brands = Brand::where('status','Active')->orderby('name','asc')->where('category','consumer')->get();
            $commericalbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','commercial')->get();
            $accessoriesbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','accessories')->get();
            $robotsbrands = Brand::where('status','Active')->orderby('name','asc')->where('category','robots')->get();
            $models = Models::where('status','Active')->where('category','consumer')->orderby('name','asc')->get();
            $commercicalmodels = Models::where('status','Active')->where('category','commercial')->orderby('name','asc')->get();
            $countries =  Country::all();
            if($product->category_id=="1" && $product->subcategory_id=="1")
            {
                return view('seller.edit',compact('categories','subcategories','product','cities','brands','models','countries','commericalbrands','accessoriesbrands','robotsbrands','models','commercicalmodels'));
            }
            else if($product->category_id=="1" && $product->subcategory_id=="2")
            {
                return view('seller.commercial_edit',compact('categories','subcategories','product','cities','brands','models','countries','commericalbrands','accessoriesbrands','robotsbrands','models','commercicalmodels'));
            }
             else if($product->category_id=="2")
            {
                return view('seller.accessories_edit',compact('categories','subcategories','product','cities','brands','models','countries','commericalbrands','accessoriesbrands','robotsbrands','models','commercicalmodels'));
            }
            else
            {
                return view('seller.robots_edit',compact('categories','subcategories','product','cities','brands','models','countries','commericalbrands','accessoriesbrands','robotsbrands','models','commercicalmodels'));
            }
        
        
    }

    public function update(Request $request)
    {

        $new = Products::find($request->product_id);
        $new->user_id = auth()->user()->id;
        $new->title = $request->title;
        $new->date = date('Y-m-d');
        $new->location = $request->location;
        $new->state = $request->state;
        $new->country = $request->country;
        $new->price = $request->price;
        $new->brand = $request->brand;
        $new->model_name = $request->model_name;
        $new->model_year = $request->model_year;
        $new->description = $request->description;
        $new->category_id = $request->category;
        $new->subcategory_id = $request->subcategory_id;
        $new->resolution = $request->resolution;
        $new->uas_category = $request->uas_category;
        $new->package_items = $request->package_items;
        $new->manufacturer = $request->manufacturer;
        $new->application_type = $request->application_type;
        $new->engine_type = $request->engine_type;
        $new->warranty_available = $request->warranty_available;
        $new->type_certified = $request->type_certified;
        $new->video_resolution = $request->video_resolution;
        $new->save();
        if($request->data){
            foreach($request->data as $data){
                if($data['product_image_id'] == '0'){

                     $folder = 'product/image';   
                     if(isset($data['image'])){
                    $uploadedFile =  $data['image'];
                    $thumbnail =  $data['image']->getClientOriginalName();
                
                    $image = time().$uploadedFile->getClientOriginalName();
                     $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
             

                    $newImage = new ProductImages();
                    $newImage->product_id          = $data['product_id'];
                    $newImage->image               = $image;
                    $newImage->display_order       = $data['display_order'];
                    $newImage->save();
                     }
                }
                else
                {

                    if(isset($data['image'])){
                        $uploadedFile =  $data['image'];
                    $thumbnail =  $data['image']->getClientOriginalName();
                
                    $image = time().$uploadedFile->getClientOriginalName();
                     $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
                    }else{
                        $image = $data['old_image'];
                    }

                    $newImage = ProductImages::find($data['product_image_id']);
                    $newImage->image               = $image;
                    $newImage->display_order       = $data['display_order']; 
                    $newImage->save();
                }

            }
        }

        if($request->spec){
            foreach($request->spec as $spec){
                if($spec['product_spec_id'] == '0'){
                    if($spec['tech_parameter']!=null)
                    {
                        $new = new ProductSpecifications();
                        $new->product_id  = $spec['product_id'];
                        $new->parameters  = $spec['tech_parameter'];
                        $new->value       = $spec['tech_value'];
                        $new->save();
                    }
                }
                else
                {

                    $new = ProductSpecifications::find($spec['product_spec_id']);
                    $new->parameters  = $spec['tech_parameter'];
                    $new->value       = $spec['tech_value'];
                    $new->save();
                }
              
            }
        }
        
        return redirect()->route('product.list')->with('status', 'Post updated Successfully');
    }

    public function deleteImage(Request $request)
    {
        $product_id = ProductImages::where('id', $request->id)->value('product_id');
        ProductImages::where('id', $request->id)->delete();

        $product = Products::with('images','specifications','packages')->where('id',$product_id)->first();
        if($request->ajax()){
                if($request->category=="commercial")
                {
                    $records1 = View::make('seller.components.edit.img_commercial')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="consumer")
                {
                    $records1 = View::make('seller.components.edit.img_consumer')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="accessories")
                {
                    $records1 = View::make('seller.components.edit.img_accessories')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="robots")
                {
                    $records1 = View::make('seller.components.edit.img_robots')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
            
           
        }

     }

    public function deleteSpecification(Request $request)
    {
        $product_id = ProductSpecifications::where('id', $request->id)->value('product_id');
        ProductSpecifications::where('id', $request->id)->delete();
        $product = Products::with('images','specifications','packages')->where('id',$product_id)->first();
        if($request->ajax()){
                if($request->category=="commercial")
                {
                    $records1 = View::make('seller.components.edit.specification_commercial')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="consumer")
                {
                    $records1 = View::make('seller.components.edit.specification_consumer')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="accessories")
                {
                    $records1 = View::make('seller.components.edit.specification_accessories')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
                if($request->category=="robots")
                {
                    $records1 = View::make('seller.components.edit.specification_robots')->with([
                    'product' => $product,

                    ])->render();
                     return Response::json(['product' => $records1]);
                }
            
           
        }
     }

    public function deletePackage($id)
    {
        $product_id = ProductPackages::where('id', $id)->value('product_id');
        ProductPackages::where('id', $id)->delete();
        return redirect(route('product.edit', [ 'id' => $product_id]))->with('status', 'Package Deleted Successfully');
    }
    
    public function deleteProduct($id, $status)
    {
        // Find the product by ID
        $product = Products::where('id', $id)->first();

        // If product does not exist
        if (!$product) {
            return redirect(route('product.list'))->with('error', 'Product not found.');
        }

        // Delete from Products table
        $product->delete();

        // Delete from Wishlists table
        Wishlist::where('product_id', $id)->delete();

        // Delete from Contact table (assuming contact is related to products through product_id)
        Contact::where('product_id', $id)->delete();

        // Delete from Product Images table
        ProductImages::where('product_id', $id)->delete();

        // Delete from Product Specifications table
        ProductSpecifications::where('product_id', $id)->delete();

        if ($status == "Y") {
            return redirect(route('product.list'))->with('status', 'Product Deleted Successfully');
        } else {
            return redirect(route('product.list'))->with('status', 'Product Deleted Successfully');
        }
    }

    /************** Commercial Add ****************************/

    public function addCommercial(Request $request)
    {
         $slug = $this->getUniqueSlug($request->commercial_title, 'product');

        if($request->commercial_brand=="Other")
        {
            $brandNew = new Brand();
            $brandNew->name = $request->commercial_other_brand;
            $brandNew->status = "Active";
            $brandNew->category = "commercial";
            $brandNew->save();
            $brand = $request->commercial_other_brand;
        }
        else
        {
            $brand = $request->commercial_brand;
        }
        
         $brands = Brand::where('name',$brand)->first();
        
        if($request->commercial_model_name=="Other")
        {
            $brandNew = new Models();
            $brandNew->brand_id = $brands->id;
            $brandNew->name = $request->commercial_other_model_name;
            $brandNew->status = "Active";
            $brandNew->category = "commercial";
            $brandNew->save();
            $model = $request->commercial_other_model_name;
        }
        else
        {
            $model = $request->commercial_model_name;
        }
        if($request->location=="Other")
        {
            $New = new City();
            $New->state_id = $request->commercial_state;
            $New->name = $request->commercial_other_location;
            $New->status = "Active";
            $New->save();
            $location = $request->commercial_other_location;
        }
        else
        {
            $location = $request->commercial_location;
        }

        $new = new Products();
        $new->user_id = auth()->user()->id;
        $new->title = $request->commercial_title;
        $new->date = date('Y-m-d');
        $new->location = $request->location;
        $new->state = $request->commercial_state;
        $new->country = $request->commercial_country;
        $new->price = $request->commercial_price;
        $new->brand = $brand;
        $new->model_name = $model;
        $new->description = $request->commercial_description;
        $new->category_id = $request->category;
        $new->subcategory_id = $request->subcategory_id;
        $new->aircraft_type = $request->aircraft_type;
        $new->propulsion = $request->propulsion;
        $new->package_items = $request->commercial_package_items;

        $new->finance = $request->commercial_finance;
        $new->offers = $request->commercial_offers;
        $new->product_brochure_link = $request->commercial_product_brochure_link;
        $new->made_in = $request->commercial_made_in;
        $new->method = $request->commercial_method;
        if($request->has('commercial_pricing_request'))
        {
            if($request->commercial_pricing_request=="on")
            {
                $new->pricing_request = "Y";
            }
             else if($request->commercial_pricing_request=="Y")
            {
                $new->pricing_request = "Y";
            }
             else
            {
                $new->pricing_request = "N";
            }
            
        }
        else
        {
            $new->pricing_request = "N";
        }
        
        if($request->has('commercial_gst_included'))
        {
            if($request->commercial_gst_included=="on")
            {
                $new->gst_included = "Y";
            }
            else if($request->commercial_gst_included=="Y")
            {
                $new->gst_included = "Y";
            }
             else
            {
                $new->gst_included = "N";
            }
         }
        else
        {
            $new->gst_included = "N";
        }
        $new->delivery_lead_time = $request->commercial_delivery_lead_time;
 
        $new->use_type = $request->commercial_use_type;
        $new->warranty_available = $request->commercial_warranty_available;
        $new->type_certified = $request->commercial_type_certified;
        $new->slug = $slug;
        $new->status = $request->commercial_status;
        $new->uas_category = $request->commercial_uas_category;
        $new->save();
        Session::put('added_product_id',$new->id);
        if($request->Commercialdata){
            foreach($request->Commercialdata as $data){
                      $folder = 'product/image';   
                     if(isset($data['image'])){
                    $uploadedFile =  $data['image'];
                    $thumbnail =  $data['image']->getClientOriginalName();
                
                    $image = time().$uploadedFile->getClientOriginalName();
                     $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
             

                    $newImage = new ProductImages();
                    $newImage->product_id          = Session::get('added_product_id');
                    $newImage->image               = $image;
                    $newImage->display_order       = $data['display_order'];
                    $newImage->save();
                     }
               
            }
        }

        if($request->Commercialspec){
            foreach($request->Commercialspec as $spec){
                if($spec['tech_parameter']!=null)
                {
                    $new = new ProductSpecifications();
                    $new->product_id  = Session::get('added_product_id');
                    $new->parameters  = $spec['tech_parameter'];
                    $new->value       = $spec['tech_value'];
                    $new->save();
                }
              
            }
        }
         
        return redirect()->route('product.list')->with('status', 'Product Added Successfully');
    }

    /************** Accessories Add ****************************/

    public function addAccessories(Request $request)
    {
         $slug = $this->getUniqueSlug($request->accessories_title, 'product');

        if($request->inner_subcategory=="Other")
        {
             $inner_subcategory = $request->inner_subcategory_other;
              DB::table('equipment_type')->insert([
            'name' => $inner_subcategory]);
        }
        else
        {
            $inner_subcategory = $request->inner_subcategory;
        }
        if($request->accessories_location=="Other")
        {
            $New = new City();
            $New->state_id = $request->accessories_state;
            $New->name = $request->accessories_other_location;
            $New->status = "Active";
            $New->save();
            $location = $request->accessories_other_location;
        }
        else
        {
            $location = $request->accessories_location;
        }


        $new = new Products();
        $new->user_id = auth()->user()->id;
        $new->title = $request->accessories_title;
        $new->date = date('Y-m-d');
        $new->location = $location;
        $new->state = $request->accessories_state;
        $new->country = $request->accessories_country;
        $new->price = $request->accessories_price;
        $new->brand = $request->accessories_brand;
        $new->model_name = $request->accessories_model_name;
        $new->description = $request->accessories_description;
        $new->category_id = $request->category;
        $new->subcategory_id = $request->subcategory_id;
        $new->inner_category = $request->inner_category;
        $new->inner_subcategory = $inner_subcategory;
        $new->aircraft_type = $request->aircraft_type;
        $new->propulsion = $request->propulsion;
        $new->package_items = $request->accessories_package_items;

        $new->finance = $request->accessories_finance;
        $new->offers = $request->accessories_offers;
        $new->product_brochure_link = $request->accessories_product_brochure_link;
        $new->made_in = $request->accessories_made_in;
        $new->compatible_with = $request->accessories_compatible_with;
        $new->method = $request->accessories_method;
        
         if($request->has('accessories_pricing_request'))
        {
            if($request->accessories_pricing_request=="on")
            {
                $new->pricing_request = "Y";
            }
             else if($request->accessories_pricing_request=="Y")
            {
                $new->pricing_request = "Y";
            }
             else
            {
                $new->pricing_request = "N";
            }
            
        }
        else
        {
            $new->pricing_request = "N";
        }
        
        if($request->has('accessories_gst_included'))
        {
            if($request->accessories_gst_included=="on")
            {
                $new->gst_included = "Y";
            }
            else if($request->accessories_gst_included=="Y")
            {
                $new->gst_included = "Y";
            }
             else
            {
                $new->gst_included = "N";
            }
         }
        else
        {
            $new->gst_included = "N";
        }
        $new->delivery_lead_time = $request->accessories_delivery_lead_time;
 
        $new->use_type = $request->accessories_use_type;
        $new->warranty_available = $request->accessories_warranty_available;
        $new->type_certified = $request->accessories_type_certified;
        $new->slug = $slug;
        $new->status = $request->accessories_status;
        $new->uas_category = $request->accessories_uas_category;
        $new->save();
        Session::put('added_product_id',$new->id);
        if($request->Accessoriesdata){
            foreach($request->Accessoriesdata as $data){
                       $folder = 'product/image';   
                     if(isset($data) && isset($data['image'])){
                        $uploadedFile =  $data['image'];
                        $thumbnail =  $data['image']->getClientOriginalName();
                    
                        $image = time().$uploadedFile->getClientOriginalName();
                         $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
                 
    
                        $newImage = new ProductImages();
                        $newImage->product_id          = Session::get('added_product_id');
                        $newImage->image               = $image;
                        $newImage->display_order       = $data['display_order'];
                        $newImage->save();
                     }
               
            }
        }

        if($request->Accessoriesspec){
            foreach($request->Accessoriesspec as $spec){
                if($spec['tech_parameter']!=null)
                {
                    $new = new ProductSpecifications();
                    $new->product_id  = Session::get('added_product_id');
                    $new->parameters  = $spec['tech_parameter'];
                    $new->value       = $spec['tech_value'];
                    $new->save();
                }
              
            }
        }
         
        return redirect()->route('product.list')->with('status', 'Product Added Successfully');
    }


/************** Robots Add ****************************/



    public function addRobots(Request $request)
    {
         $slug = $this->getUniqueSlug($request->robots_title, 'product');

        if($request->robot_type=="Other")
        {
             $robot_type = $request->robot_type_other;
              DB::table('robot_type')->insert([
            'name' => $robot_type]);
        }
        else
        {
            $robot_type = $request->robot_type;
        }
        if($request->robots_location=="Other")
        {
            $New = new City();
            $New->state_id = $request->robots_state;
            $New->name = $request->robots_other_location;
            $New->status = "Active";
            $New->save();
            $location = $request->robots_other_location;
        }
        else
        {
            $location = $request->robots_location;
        }

        $new = new Products();
        $new->user_id = auth()->user()->id;
        $new->title = $request->robots_title;
        $new->date = date('Y-m-d');
        $new->location = $location;
        $new->state = $request->robots_state;
        $new->country = $request->robots_country;
        $new->price = $request->robots_price;
        $new->brand = $request->robots_brand;
        $new->model_name = $request->robots_model_name;
        $new->description = $request->robots_description;
        $new->category_id = $request->category;
        $new->subcategory_id = $request->subcategory_id;
        $new->inner_category = $request->inner_category;
        $new->inner_subcategory = $request->inner_subcategory;
        $new->aircraft_type = $request->aircraft_type;
        $new->propulsion = $request->propulsion;
        $new->package_items = $request->robots_package_items;

        $new->finance = $request->robots_finance;
        $new->certification = $request->robots_certification;
        $new->offers = $request->robots_offers;
        $new->product_brochure_link = $request->robots_product_brochure_link;
        $new->made_in = $request->robots_made_in;
        $new->method = $request->robots_method;
        
         if($request->has('robots_pricing_request'))
        {
            if($request->robots_pricing_request=="on")
            {
                $new->pricing_request = "Y";
            }
            else if($request->robots_pricing_request=="Y")
            {
                $new->pricing_request = "Y";
            }
             else
            {
                $new->pricing_request = "N";
            }
            
        }
        else
        {
            $new->pricing_request = "N";
        }
        
        if($request->has('robots_gst_included'))
        {
            if($request->robots_gst_included=="on")
            {
                $new->gst_included = "Y";
            }
             else if($request->robots_gst_included=="Y")
            {
                $new->gst_included = "Y";
            }
             else
            {
                $new->gst_included = "N";
            }
         }
        else
        {
            $new->gst_included = "N";
        }
        $new->delivery_lead_time = $request->robots_delivery_lead_time;
 
        $new->use_type = $request->robots_use_type;
        $new->warranty_available = $request->robots_warranty_available;
        $new->type_certified = $request->robots_type_certified;
        $new->slug = $slug;
        $new->status = $request->robots_status;
        $new->uas_category = $request->robots_uas_category;
        $new->engine_type = $request->robots_engine_type;
        $new->robot_type = $robot_type;
        $new->save();
        Session::put('added_product_id',$new->id);
        if($request->Robotsdata){
            foreach($request->Robotsdata as $data){
                      $folder = 'product/image';   
                     if(isset($data['image'])){
                    $uploadedFile =  $data['image'];
                    $thumbnail =  $data['image']->getClientOriginalName();
                
                    $image = time().$uploadedFile->getClientOriginalName();
                     $images = $data['image']->move(storage_path('/app/public/product/image'), $image);
             

                    $newImage = new ProductImages();
                    $newImage->product_id          = Session::get('added_product_id');
                    $newImage->image               = $image;
                    $newImage->display_order       = $data['display_order'];
                    $newImage->save();
                     }
               
            }
        }

        if($request->Robotsspec){
            foreach($request->Robotsspec as $spec){
                if($spec['tech_parameter']!=null)
                {
                    $new = new ProductSpecifications();
                    $new->product_id  = Session::get('added_product_id');
                    $new->parameters  = $spec['tech_parameter'];
                    $new->value       = $spec['tech_value'];
                    $new->save();
                }
              
            }
        }
         
        return redirect()->route('product.list')->with('status', 'Product Added Successfully');
    }
}
