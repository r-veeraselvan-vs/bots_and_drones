<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Products;

class WishListController extends Controller
{
    public function add($product_id, $type)
    {
         if(Session::get('shop_url')==null)
        {
            Session::put('shop_url',url()->previous());
        }
        
        Session::put('wishlist', $product_id);
        Session::put('wishlist_type', $type);
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $data = Wishlist::where('product_id', $product_id)->where('user_id', $user_id)->first();

            if(!$data){
                $new = new Wishlist();
                $new->user_id = $user_id;
                $new->product_id = $product_id;
                $new->save();
            }

            $success = "Product Added to favourites";
            if($type == 'false'){
                Wishlist::where('product_id', $product_id)->where('user_id', $user_id)->delete();
                $success = "Product Removed from favourites";
            }

            return redirect(session::get('backpage_product'))->with([
                'success' => $success
            ]);
        }
        return redirect()->route('login');
    }
    
    public function listWishlistedItems()
    {
        $user_id = Auth::user()->id;
        $d = Wishlist::where('user_id', $user_id)->pluck('product_id');
        $data = Wishlist::where('user_id', $user_id)->pluck('product_id');

        if ($data) {
            $products = Products::whereIn('id', $data)->where('status','Y')->get();
            return view('seller.wishlisted', compact('products', 'data'));
        } else {
            $products = Products::whereIn('id', $d)->where('status','Y')->get();
            return view('seller.wishlisted', compact('products', 'data'));
        }
    }

    public function Delete(Request $request)
    {
        $user_id = Auth::user()->id;
        $wish = Wishlist::where('product_id',$request->id)->where('user_id',$user_id)->delete();
        return \Redirect::back()->withSuccess( 'Favourites Deleted  Successfully'); 
    }
}
