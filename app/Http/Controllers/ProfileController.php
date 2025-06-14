<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Products;
use App\Models\Contact;
use App\Models\Wishlist;
use App\Http\Controllers\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        if(Auth::check())
        {
            $user = Auth::user();

            if ($user) {
                return view('profile.index', compact('user'));
            }
        }
    }
    public function edit($id) {
        $user = User::where('id',$id)->first();
        return view('profile.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
 
        $new = User::find($id);
        $new->name = $request->name;
         if ($new->seller == 'Y')
         {
             $new->company_phone = $request->country_code." ".$request->company_phone;
              $new->mobile_no =  $request->mobile_no;
         }
         else
         {
             $new->mobile_no =  $request->country_code." ".$request->mobile_no;
         }

        
        $new->seller = $request->seller;
        $new->company_name = $request->company_name;
        $new->registered_address = $request->registered_address;
        $new->registered_number = $request->registered_number;
         
         $new->country = $request->country;
        $new->address1 = $request->address1;
        $new->address2 = $request->address2;
        $new->city = $request->city;
        $new->state = $request->state;
        $new->pincode = $request->pincode;
        $new->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function delete(Request $request)
    {
        $user = User::where('id', $request->id)->first();

        if ($user) {
            $user->is_deleted = 'Y';
            $user->save();

            $products = Products::where('user_id', $user->id)->get();
            if ($products) {
                foreach ($products as $product) {
                    $product->status = 'N';
                    $product->save();

                    $contact = Contact::where('product_id', $product->id)->get();
                    if ($contact) {
                        foreach ($contact as $singleContact) {
                            $singleContact->status = 'N';
                            $singleContact->save();
                        }
                    }
                
                    Wishlist::where('product_id', $product->id)->delete();
                }
            }

            Wishlist::where('user_id', $user->id)->delete();
             Contact::where('seller_id', $user->id)->delete();
            Contact::where('buyer_id', $user->id)->delete();
              User::where('id', $request->id)->delete();
            Auth::logout();

            return redirect()->route('login')->with('success', 'Account successfully deleted. You have been logged out.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
    
     public function viewChangePassword() {
         
        return view('profile.viewChangePassword');
    }
    public function updateChangePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
        
    }
}


