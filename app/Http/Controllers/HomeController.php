<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Products;
use App\Models\ProductImages;
use App\Models\ProductSpecifications;
use App\Models\ProductPackages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(Session::get('post-ad')=="true")
        {
            return redirect()->route('post-ad');
        }
        else if(Session::get('eqnuiry')=="true")
        {
            $enquiry_id = Session::get('enquiry_id');
            return redirect('enquiry/'.$enquiry_id);
        }
        else if(Session::get('wishlist')!=null)
        {
             return redirect('wishlist/'.Session::get('wishlist')."/".Session::get('wishlist_type'));
        }
        else
        {
            return view('home');
        }
        
    }

   
}
