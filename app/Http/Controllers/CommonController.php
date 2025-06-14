<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Products;
use App\Models\User;
use App\Models\ProductImages;
use App\Models\ProductSpecifications;
use App\Models\ProductPackages;
use App\Models\Wishlist;
use App\Models\Category;
use App\Models\SubCategory;
use View;
use Response;
use App\Models\Banner;
use App\Models\State;
use App\Models\Trending;
use Illuminate\Support\Facades\DB;
use App\Models\Subscription;
use App\Models\SubscriptionPackage;
use App\Models\SupportingPartner;
use App\Events\SubscriptionCreated;
use Illuminate\Support\Facades\Redirect;

class CommonController extends Controller
{
    public function userRedirection()
    {
         if(Session::get('enquiry')=="true")
        {
            return redirect()->back();
        }
        return redirect()->route('dashboard');
    }
    
    public function index()
    {
         session::put('backpage',url()->current());
        $usedDrones = Products::with('images','specifications','packages')->where('category_id','1')->where('status','Y')->orderby('id','desc')->limit(3)->get();
        $usedAccessories = Products::with('images','specifications','packages')->where('category_id','2')->where('status','Y')->orderby('id','desc')->limit(3)->get();
        $usedRobots = Products::with('images','specifications','packages')->where('category_id','3')->where('status','Y')->orderby('id','desc')->limit(3)->get();
        $otherProducts = Products::with('images','specifications','packages')->where('category_id','4')->where('status','Y')->orderby('id','desc')->limit(3)->get();
        $allProducts = Products::with('images','specifications','packages')->where('status','Y')->orderby('id','desc')->limit(8)->get();

        $consumer = Products::with('images','specifications','packages')->where('category_id','1')->where('subcategory_id','1')->where('status','Y')->orderby('id','desc')->get();

        $commercial = Products::with('images','specifications','packages')->where('category_id','1')->where('subcategory_id','2')->where('status','Y')->orderby('id','desc')->get();

        $robots = Products::with('images','specifications','packages')->where('category_id','3')->where('status','Y')->orderby('id','desc')->get();

        $accessories = Products::with('images','specifications','packages')->where('category_id','2')->where('status','Y')->orderby('id','desc')->get();

        $user_id = Auth::user() ? Auth::user()->id : 0;

        $wishlists = WishList::where('user_id', $user_id)->pluck('product_id')->toArray();
        
        $banners = Banner::orderby('id','desc')->get();
        $supporting_partner = SupportingPartner::orderby('id','desc')->where('status', 'Active')->get();
        $categories = Category::where('show_in_home','Y')->where('status','Active')->take(2)->orderby('name','asc')->get();
        $subcategories = SubCategory::where('show_in_home','Y')->where('status','Active')->take(2)->orderby('id','asc')->get();

         $consumer_locations = Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->orderby('state','asc')->where('category_id','1')->where('subcategory_id','1')->pluck('state');

         $consumer_states = State::whereIn('id',$consumer_locations)->get();

         $commericial_locations = Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->orderby('state','asc')->where('category_id','1')->where('subcategory_id','2')->pluck('state');

         $commericial_states = State::whereIn('id',$commericial_locations)->get();
         
         
          $accessories_locations = Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->orderby('state','asc')->where('category_id','2')->pluck('state');

         $accessories_states = State::whereIn('id',$accessories_locations)->get();
         
         $robots_locations = Products::select('state')->groupBy('state')->where('status', 'Y')->where('state','!=',null)->orderby('state','asc')->where('category_id','3')->pluck('state');

         $robots_states = State::whereIn('id',$robots_locations)->get();

         $trending = Products::where('visitors_count', '>=', 1)
                            ->where('status', 'Y')
                            ->orderBy('visitors_count', 'desc')
                            ->get();
        $brands = Products::select('brand')->distinct()->where('subcategory_id','1')->where('status','Y')->orderby('brand','asc')->get();
            $commericalbrands = Products::select('brand')->distinct()->where('subcategory_id','2')->where('status','Y')->orderby('brand','asc')->get();
            $accessoriesbrands =Products::select('brand')->distinct()->where('category_id','2')->where('status','Y')->orderby('brand','asc')->get();
            $robotsbrands = Products::select('brand')->distinct()->where('category_id','3')->where('status','Y')->orderby('brand','asc')->get();
            
        Session::forget('state');
        Session::forget('city');
        Session::forget('uas_category');
        Session::forget('brand');
        Session::forget('application_type');
        Session::forget('engine_type');
        Session::forget('model');
        Session::forget('propulsion');
        Session::forget('aircraft_type');
        Session::forget('uin');
        Session::forget('invoice_copy');
        Session::forget('warranty_available');
        Session::forget('type_certified');
        Session::forget('usedFor');
        Session::forget('robot_type');
        Session::forget('equipment_item_type');
        Session::forget('min_price');
        Session::forget('max_price');
        Session::forget('item_type');
         Session::forget('sort');

        $consumer = Products::with('images', 'specifications', 'packages')
            ->where('category_id', '1')
            ->where('subcategory_id', '1')
            ->where('visitors_count', '>=', 1)
            ->where('status', 'Y')
            ->orderBy('visitors_count', 'desc')
            ->orderby('id', 'desc')
            ->take(3);

        $commercial = Products::with('images', 'specifications', 'packages')
            ->where('category_id', '1')
            ->where('subcategory_id', '2')
            ->where('visitors_count', '>=', 1)
            ->where('status', 'Y')
            ->orderBy('visitors_count', 'desc')
            ->orderby('id', 'desc')
            ->take(3);

        // $robots = Products::with('images', 'specifications', 'packages')
        //     ->where('category_id', '3')
        //     ->where('visitors_count', '>=', 1)
        //     ->where('status', 'Y')
        //     ->orderBy('visitors_count', 'desc')
        //     ->orderby('id', 'desc')
        //     ->take(2);

        // $accessories = Products::with('images', 'specifications', 'packages')
        //     ->where('category_id', '2')
        //     ->where('visitors_count', '>=', 1)
        //     ->where('status', 'Y')
        //     ->orderBy('visitors_count', 'desc')
        //     ->orderby('id', 'desc')
        //     ->take(2);

        // $compareProducts = $consumer->union($commercial)->union($robots)->union($accessories)->get();
        $compareProducts = $consumer->union($commercial)->get();
         
        return view('index',compact('accessories_states','robots_states','usedDrones','usedAccessories','usedRobots','otherProducts','allProducts','wishlists','banners','categories','subcategories',
        'commericial_states','consumer_states','consumer','commercial', 'robots', 'accessories', 'trending','compareProducts','brands','commericalbrands','accessoriesbrands','robotsbrands', 'supporting_partner'));
    }

    public function dashboard()
    {
        return view('home');
    }

    public function products(Request $request, $menu, $slug = 'all', $sub_slug="all")
    {
         
        session::put('backpage',\Request::getRequestUri());
         Session::put('filter_url',\URL::full());
        $category = Category::where('slug',$slug)->where('status', 'Active')->first();
        $p = Products::with('images','specifications','packages')->where('category_id',$category->id)->where('status','Y');
        $BannerUrl = $category->BannerImageUrl;
        $SideBannerUrl = $category->SideBannerImageUrl;
        if(Session::get('category')!=$slug && Session::get('category')!=null)
        {
            Session::put('category',$slug);
             Session::forget('state');
            Session::forget('city');
            Session::forget('uas_category');
            Session::forget('brand');
            Session::forget('application_type');
            Session::forget('engine_type');
            Session::forget('model');
            Session::forget('propulsion');
            Session::forget('aircraft_type');
            Session::forget('uin');
            Session::forget('warranty_available');
            Session::forget('type_certified');
            Session::forget('usedFor');
            Session::forget('robot_type');
            Session::forget('equipment_item_type');
            Session::forget('min_price');
            Session::forget('max_price');
            Session::forget('sort');
            Session::forget('item_type');
            Session::forget('category');
        }
        else
        {
            Session::put('category',$slug);
        }
        if($request->has('item_type'))
        {
            if($request->item_type!=null)
            {
                
                
                if($request->item_type!="All")
                {
                    $subcategory = SubCategory::where('slug',$request->item_type)->first();
                    $BannerUrl = $subcategory->BannerImageUrl;
                    $SideBannerUrl = $subcategory->SideBannerImageUrl;
                    $p = $p->where('subcategory_id',$subcategory->id);
                }
                else
                {
                    $BannerUrl = $category->BannerImageUrl;  
                    $SideBannerUrl = $category->SideBannerImageUrl;
                    $p = $p;
                }
                 
                if(Session::get('item_type')!=$request->item_type)
                {
                     Session::put('item_type',$request->item_type);
                    Session::forget('state');
                    Session::forget('city');
                    Session::forget('uas_category');
                    Session::forget('brand');
                    Session::forget('application_type');
                    Session::forget('engine_type');
                    Session::forget('model');
                    Session::forget('propulsion');
                    Session::forget('aircraft_type');
                    Session::forget('uin');
                    Session::forget('warranty_available');
                    Session::forget('type_certified');
                    Session::forget('usedFor');
                    Session::forget('robot_type');
                    Session::forget('equipment_item_type');
                    Session::forget('min_price');
                    Session::forget('max_price');
                    Session::forget('sort');
                    Session::forget('item_type');
                    Session::forget('category');
                    Session::put('item_type',$request->item_type);

                }
                else
                {
                    Session::put('item_type',$request->item_type);
                }
             
                
            }
            else
            {
              $BannerUrl = $category->BannerImageUrl;  
            }
        }
         
        

        if($request->has('location'))
        {
            
             if($request->location!=null)
            {
                Session::put('state',$request->location); 
                if($request->location!="All")
                {
                   $p = $p->where('state',$request->location);
                }
                else
                {
                    $p = $p;
                }
            
             }
            
             
        }

        if($request->city!=null)
        {
            Session::put('city',$request->city);
            if($request->city!="0")
            {
                $p = $p->where('location',$request->city);
            }
            else
            {
                $p = $p;
            }
            
        }
         if($request->uas_category!=null)
        {
              Session::put('uas_category',$request->uas_category);
            if($request->uas_category!="All")
            {
                $p = $p->where('uas_category',$request->uas_category);
            }
            else
            {
                $p = $p;
            }
        }

        if($request->brand!=null)
        {
            Session::put('brand',$request->brand);
            if($request->brand!="All")
            {
                $p = $p->where('brand',$request->brand);
            }
            else
            {
                $p = $p;
            }
        }
 
        if($request->application_type!=null)
        {
             Session::put('application_type',$request->application_type);
            if($request->application_type!="All")
            {
                $p = $p->where('use_type',$request->application_type);
            }
            else
            {
                $p = $p;
            }
        }
         

        if($request->engine_type!=null)
        {
            Session::put('engine_type',$request->engine_type);
            if($request->engine_type!="All")
            {
                $p = $p->where('engine_type',$request->engine_type);
            }
            else
            {
                $p = $p;
            }
        }

        if($request->model!=null)
        {
            Session::put('model',$request->model);
            
            if($request->model!="All")
            {
                $p = $p->where('model_name',$request->model);
            }
            else
            {
                $p = $p;
            }
        }
        
         if($request->propulsion!=null)
        {
            Session::put('propulsion',$request->propulsion);
            
            if($request->propulsion!="All")
            {
                $p = $p->where('propulsion',$request->propulsion);
            }
            else
            {
                $p = $p;
            }
        }
        
        if($request->aircraft_type!=null)
        {
            Session::put('aircraft_type',$request->aircraft_type);

            if($request->aircraft_type!="All")
            {
                $p = $p->where('aircraft_type',$request->aircraft_type);
            }
            else
            {
                $p = $p;
            }
            
        }

        if($request->uin!=null)
        {
            Session::put('uin',$request->uin);
            if($request->uin!="All")
            {
                $p = $p->where('UIN','like','%'.$request->uin.'%');
            }
            else
            {
                $p = $p;
            }
           
        }

        if($request->warranty_available!=null)
        {
            Session::put('warranty_available',$request->warranty_available); 
            
            if($request->warranty_available!="All")
            {
                $p = $p->where('warranty_available','like','%'.$request->warranty_available.'%');
            }
            else
            {
                $p = $p;
            }
            
            
        }

        if($request->type_certified!=null)
        {
            Session::put('type_certified',$request->type_certified); 
              
            if($request->type_certified!="All")
            {
                $p = $p->where('type_certified','like','%'.$request->type_certified.'%');
            }
            else
            {
                $p = $p;
            }
        }
        
        if($request->usedFor!=null)
        {
          
             Session::put('usedFor',$request->usedFor); 
             
            if($request->usedFor!="8")
            {
                $p = $p->where('subcategory_id',$request->usedFor);
            }
            else
            {
                $p = $p;
            }
        }
         if($request->state!=null)
        {
            Session::put('state',$request->state); 
              
            if($request->state!="0")
            {
                $p = $p->where('state',$request->state);
            }
            else
            {
                $p = $p;
            }
        }

        if($request->robot_type!=null)
        {
            Session::put('robot_type',$request->robot_type); 
            
            if($request->robot_type!="All")
            {
                $p = $p->where('robot_type',$request->robot_type);
            }
            else
            {
             
             $p= $p;
                
            }
           
        }
        
        if($request->equipment_item_type!=null)
        {
           Session::put('equipment_item_type',$request->equipment_item_type); 
            if($request->equipment_item_type!="All")
                {
                    $p = $p->where('inner_subcategory',$request->equipment_item_type);
                }
                else
                {
                    $p = $p;
                }
                
               
            
          
        }
        
        if($request->min_price!=null && $request->max_price!=null )
        {
            Session::put('min_price',$request->min_price); 
            Session::put('max_price',$request->max_price); 
            $p =  $p->whereRaw('REPLACE(`price`, ",","")')->whereBetween('price', [ $request->min_price,  $request->max_price]);
            
        }
         
 
        $mobile_sort_value="desc";
        if($request->sort!=null)
        {
            Session::put('sort',$request->sort);
            
             if($request->sort=="most_recent")
            {
                 
    
                 $p = $p->orderBy('id','desc');
            }
            if($request->sort!="most_recent")
            {
                $p = $p->orderByRaw('LENGTH(price)'.$request->sort)
                        ->orderBy('price');
                
            }
            else
            {
                 $p = $p->orderBy('id','desc');
            }
              
             
        }
         if($request->sort==null)
        {
             Session::forget('sort');
             $p = $p->orderby('id','desc');
        }
       
      
       


        $products = $p->paginate(10);
        
         $user_id = Auth::user() ? Auth::user()->id : 0;
        $wishlists = WishList::where('user_id', $user_id)->pluck('product_id')->toArray();
        $brandModels = Products::groupBy('model_name')->select('model_name','brand')->get();
        $manufacturerModels = Products::groupBy('model_name')->select('model_name','manufacturer')->get();
        
        $cities = Products::select('state','location','category_id','subcategory_id')->where('location','!=',null)->distinct('locations')->orderby('location','asc')->get();
        
        $citiesAjax1 = DB::table('products')
            ->groupBy('location')
            ->where('category_id','1')
            ->where('location','!=',null)
            ->where('subcategory_id','1')
            ->get();
            $citiesAjax2 = DB::table('products')
            ->groupBy('location')
            ->where('category_id','1')
            ->where('location','!=',null)
            ->where('subcategory_id','2')
            ->get();
            $citiesAjax3 = DB::table('products')
            ->groupBy('location')
            ->where('category_id','2')
            ->where('location','!=',null)
            ->get();
            $citiesAjax4 = DB::table('products')
            ->groupBy('location')
            ->where('category_id','3')
            ->where('location','!=',null)
            ->get();
           
         if($request->ajax()){
             $products1 = View::make('components.product')->with([
            'products' => $products,
            'menu' => $menu,
            'wishlists' => $wishlists,
            'manufacturerModels' => $manufacturerModels,
            'brandModels' => $brandModels,
            'mobile_sort_value' =>$mobile_sort_value,
            'BannerUrl' =>$BannerUrl,
            'SideBannerUrl' =>$SideBannerUrl,
            'category' =>$category,
            'citiesAjax1' => $citiesAjax1,
            'citiesAjax2' => $citiesAjax2,
            'citiesAjax3' => $citiesAjax3,
            'citiesAjax4' => $citiesAjax4,
            ])->render();
           
            return Response::json(['products' => $products1]);
        }
        else
        {
            return view('products',compact('products','wishlists','brandModels','manufacturerModels','mobile_sort_value','BannerUrl','SideBannerUrl','category','citiesAjax1','citiesAjax2','citiesAjax3','citiesAjax4'));
        }
    }

    public function product($slug)
    {
        session::put('backpage_product',url()->current());
        $product = Products::with('images', 'specifications', 'packages')->where('slug', $slug)->first();
        $user_id = Auth::user() ? Auth::user()->id : 0;
        $wishlists = WishList::where('user_id', $user_id)->pluck('product_id')->toArray();
        if($product->category_id!=1)
        {
             $related_products = Products::with('images', 'specifications', 'packages')->where('category_id', $product->category_id)->where('slug', '!=', $slug)->where('status','Y')->orderBy('id', 'desc')->get();
        }
        else
        {
             $related_products = Products::with('images', 'specifications', 'packages')->where('subcategory_id', $product->subcategory_id)->where('slug', '!=', $slug)->where('status','Y')->orderBy('id', 'desc')->get();
        }
        

        $trending = Products::where('id',$product->id)->first();

        if ($trending) {
            $trending->visitors_count++;
            $trending->save();
        }

        return view('product', compact('product', 'related_products', 'wishlists'));
    }

    public function listProducts()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $subscription = Subscription::where('user_id', $user->id)->first();
            $userProductsCount = $user->products()->count();
            $products = Products::with('images', 'specifications')->where('user_id', $user->id)->orderBy('id', 'desc')->get();
            
            // Check if the subscription is empty or null, then set subscription status to '0'
            if (!$subscription) {
                $subscriptionStatus = '0';
                $subscription_package = SubscriptionPackage::where('id', '1')->first();
                $subscription_product = $subscription_package->products;
            } else {
                $subscriptionStatus = $subscription->status;
                if ($subscription->status == 'active') {
                    $subscription_package = SubscriptionPackage::where('id', $subscription->subscription_type)->first();
                    $subscription_product = $subscription_package->products;
                } else {
                    $subscription_package = SubscriptionPackage::where('id', '1')->first();
                    $subscription_product = $subscription_package->products;
                }
            }

            return view('seller.products', compact('products', 'user', 'userProductsCount', 'subscriptionStatus', 'subscription_product'));
        } else {
            return redirect('/login');
        }
    }

    
    public function resetFilter()
    {
        // Clear session data
        $keysToForget = [
            'state', 'city', 'uas_category', 'brand', 'application_type', 'engine_type',
            'model', 'propulsion', 'aircraft_type', 'uin', 'warranty_available',
            'type_certified', 'usedFor', 'robot_type', 'equipment_item_type', 'min_price',
            'max_price', 'item_type', 'sort'
        ];

        foreach ($keysToForget as $key) {
            Session::forget($key);
        }

        // Store the previous URL in the session
        session()->put('backpage', url()->previous());

        // Retrieve the stored previous URL from the session
        $backpage = session()->get('backpage');

        // If $backpage is null or empty, redirect to a default URL
        if (empty($backpage)) {
            return redirect()->route('index');
        }

        // Parse the URL components
        $parsedUrl = parse_url($backpage);

        // List of expected URLs
        $expectedUrls = [
            route('products', ['menu' => 'categories', 'slug' => 'used-Accessories-1181', 'sub_slug' => 'all']),
            route('products', ['menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all', 'item_type' => 'Commercial-drones-9222']),
            route('products', ['menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all', 'item_type' => 'Consumer-drones-9987']),
            route('products', ['menu' => 'categories', 'slug' => 'used-Robots-4046', 'sub_slug' => 'all']),
            // Add more expected URLs as needed
        ];

        // Check if the base URL is one of the expected URLs
        if (in_array($backpage, $expectedUrls)) {
            return redirect()->back();
        }

        // If the base URL is not an expected URL, remove the 'brand' query parameter if it exists
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParameters);
            unset($queryParameters['brand']);

            // Rebuild the query string without the 'brand' parameter
            $newQueryString = http_build_query($queryParameters);

            // Update the base URL with the new query string
            $backpage = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];

            // Add port to the base URL if it exists in the parsed URL
            if (isset($parsedUrl['port'])) {
                $backpage .= ':' . $parsedUrl['port'];
            }

            $backpage .= $parsedUrl['path'];

            // Add the new query string to the base URL
            $backpage .= ($newQueryString ? '?' . $newQueryString : '');
        }

        // Redirect to the final base URL
        return redirect($backpage);
    }

    public function checkEmailUnique(Request $request)
    {
        $email = $request->input('email');

        // Check if the email already exists in the users table
        $isUnique = !User::where('email', $email)->exists();

        return response()->json(['unique' => $isUnique]);
    }

    public function checkCompanyEmailUnique(Request $request)
    {
        $companyEmail = $request->input('company_email');

        // Check if the company email already exists in the sellers table
        $isUniqueCompanyEmail = !User::where('company_email', $companyEmail)->exists();

        // Check if the company email already exists in the users table (buyer)
        $isUniqueUserEmail = !User::where('email', $companyEmail)->exists();

        $isUnique = $isUniqueCompanyEmail && $isUniqueUserEmail;

        return response()->json(['unique' => $isUnique]);
    }

    public function subscribe()
    {
        return view('subscribe');
    }

    public function subscription()
    {
        $userId = Auth::id();

        // Create a new subscription record for the user
        $subscription = Subscription::create([
            'user_id' => $userId,
            'subscription_type' => '2', // Default to standard, you can change this based on your logic
        ]);

        // Dispatch the event
        event(new SubscriptionCreated($subscription));
        return Redirect::route('product.list')->with('status', 'Your subscription message has been sent to the admin. Please wait for further communication.');
    }

}
