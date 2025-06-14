<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Products;
use App\Models\ProductImages;
use App\Models\ProductSpecifications;
use App\Models\ProductPackages;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\Contact;
use App\Mail\OtpMail;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;
use App\Mail\ContactEmail;

class EnquiryController extends Controller
{
    public function enquiry($id)
    {
         Session::put('enquiry_id', $id);
         $currenturl = url()->current();
        $product = Products::where('id', $id)->first();
        $seller = User::where('id', $product->user_id)->first();

        if (Auth::check()) {
            if (auth()->user()->id == $product->user_id) {
                return redirect()->back()->with('warning', 'Seller cannot buy the same product');
            }
            $enquiryCheck = Enquiry::where('product_id',$product->id)->where('buyer_id',auth()->user()->id)->where('order_confirm','Yes')->count();
            if($enquiryCheck!=0)
            {
                
                 return redirect($currenturl)->with('warning', 'Already enquired this product');
            }

            $user = auth()->user(); 

            return view('buyer.enquiry', compact('seller', 'id', 'product', 'user'));
        }
        
        return redirect()->route('login');
    }
    public function addEnquiry(Request $request)
    {
       
        $product = Products::where('id',$request->product_id)->first();
        $seller = User::where('id',$product->user_id)->first();
        $enquiryCheck = Enquiry::where('product_id',$request->product_id)->where('buyer_id',auth()->user()->id)->where('order_confirm','Yes')->count();
        if($enquiryCheck==0)
        {
            $new = new Enquiry();
            $new->product_id = $request->product_id;
            $new->buyer_id = auth()->user()->id;
            $new->seller_id = $seller->id;
            $new->delivery_address = $request->delivery_address;
            $new->country = $request->country;
            $new->quantity = $request->quantity;
            $new->company_name = $request->company_name;
            $new->usage = $request->usage;
            $new->tax_register_no = $request->tax_register_no;
            $new->order_confirm = 'No';
            $new->save();
             
            $enquiry = $new; 

            $user = User::where('id',$new->buyer_id)->first();
            $otp = rand(123456, 999999);
            if ($user) {

                $user->otp = $otp;
                $user->save();
                
                if($user->seller=="N")
                {
                  Mail::to($user->email)->send(new OtpMail($otp));
                }
                else if($user->seller==null)
                {
                   Mail::to($user->email)->send(new OtpMail($otp));
                }
                else
                {
                     Mail::to($user->company_email)->send(new OtpMail($otp));
                }
               
                
                return redirect()->route('order', [$new->id])->with('success', 'OTP sent to Mail successfully');
              
            }
            
        }
        else
        {
            return redirect()->back()->with('warning', 'Already enquired this product');
        }
        
    }
    
    public function order($id)
    {
        $enquiry = Enquiry::where('id', $id)->first();
        $product = Products::where('id', $enquiry->product_id)->first();
        $seller = User::where('id', $product->user_id)->first();

        if (Auth::check()) {
            if (auth()->user()->id == $product->user_id) {
                return redirect()->back()->with('warning', 'Seller cannot buy the same product');
            }

            $user = auth()->user(); 

            return view('buyer.order', compact('seller', 'id', 'product', 'user','enquiry'));
        }

        return redirect()->route('login');
    }

    public function addOrder(Request $request)
    {
        $product = Products::where('id',$request->product_id)->first();
        $order = Enquiry::where('id',$request->enquiry_id)->first();
        $seller = User::where('id',$request->seller_id)->first();
        $buyer = User::where('id',$order->buyer_id)->first();
        $buyer_enquiries = Enquiry::where('buyer_id',auth()->user()->id)->get();
        if ($order && $buyer->otp == $request->otp_verify) {
            $order->order_confirm = 'Yes';
            $order->save();
            
            $buyer->otp_verified_at=date('Y-m-d');
            $buyer->save();
            
            Mail::to($seller->company_email)->send(new OrderConfirmation($product, $buyer, $order));
           return view('buyer.view')->with('success', '<span class="fa fa-check-circle"></span> Order Confirmed');
                        
        }
        else 
        {
            return redirect()->back()->with('warning', 'Make sure the OTP is correct');
        }
     
        
    }


//------contact seller----//

    public function contact($id)
    {
         Session::put('contact_id', $id);
         
        $product = Products::where('id', $id)->first();
        $seller = User::where('id', $product->user_id)->first();
         if (Auth::check()) {
            if (auth()->user()->id == $product->user_id) {
                return redirect()->back()->with('warning', 'Seller cannot buy the same product');
            }
            $contactCheck = Contact::where('product_id',$product->id)->where('buyer_id',auth()->user()->id)->where('contact_confirm','Yes')->count();
            $contacts = Contact::where('product_id', $product->id)
                    ->where('buyer_id', auth()->user()->id)
                    ->where('contact_confirm', 'Yes')
                    ->first();
            if($contactCheck!=0)
            {  
                 $currenturl = Session::get('backpage_product');
                 $contactId = $contacts->id;
                 $contact = Contact::find($contactId);
        
                // Check if $contact is not null and contact_confirm is 'No'
                if ($contact && $contact->contact_confirm == 'Yes') {
                    // Handle remainder case
                    $remainderValue = ($contact && $contact->remainders == 0) ? 1 : ($contact->remainders + 1);

                    if ($contact) {
                        $contact->remainders = $remainderValue;
                        $contact->save();

                        $product = Products::find($contact->product_id);
                        $order = Contact::find($contactId);
                        $buyer = User::find($order->buyer_id);
                        $seller = User::find($contact->seller_id);

                        try {
                            // Send email to seller
                            Mail::to($seller->company_email)->send(new ContactEmail($product, $buyer, $order));
                        } catch (\Exception $e) {
                            // Handle email sending failure
                            return redirect()->back()->with('warning', 'Failed to send email to seller.');
                        }

                        $successMessage = 'You have already enquired this product.
                                                A Reminder email has been sent successfully to Seller. 
                                                Sent Reminder: ' . $remainderValue;
                        return redirect()->back()->with('success', $successMessage);
                    } else {
                        // Handle the case where $contact is not found
                        return redirect()->back()->with('warning', 'Contact not found.');
                    }
                }
            }

            $user = auth()->user(); 

            return view('buyer.contact', compact('seller', 'id', 'product', 'user'));
        }
         return redirect()->route('login');
    }
    public function addcontact(Request $request)
    {  
        $product = Products::where('id',$request->product_id)->first();
        $seller = User::where('id',$product->user_id)->first();
        $contactCheck = Contact::where('product_id',$request->product_id)->where('buyer_id',auth()->user()->id)->where('contact_confirm','Yes')->count();
        if($contactCheck==0)
        {
            $new = new Contact();
            $new->product_id = $request->product_id;
            $new->buyer_id = auth()->user()->id;
            $new->seller_id = $seller->id;
            $new->quantity = $request->quantity;
            $new->requirement = $request->requirement;
            $new->contact_confirm = 'No';
            $new->price_request = '0';
            $new->otp_verified_at=date('Y-m-d');
            $new->save();
             
            $contact = $new; 

            $user = User::findOrFail($new->buyer_id); 
            $user->company_name = $request->company_name;
            $user->city = $request->town_city;

            if (empty($user->seller) || $user->seller == "N" || $user->seller == "Null") {
                $user->mobile_no = $request->buyer_phone;
            }
            
            $user->country = $request->country;
            $user->save();

            $user = User::where('id',$new->buyer_id)->first();
            $otp = rand(123456, 999999);
            if($user) {

                $user->otp = $otp;
                $user->save();
                
               /* if($user->seller=="N")
                {
                  Mail::to($user->email)->send(new OtpMail($otp));
                }
                else if($user->seller==null)
                {
                   Mail::to($user->email)->send(new OtpMail($otp));
                }
                else
                {
                     Mail::to($user->company_email)->send(new OtpMail($otp));
                }*/
               
                
                return redirect()->route('ordered', [$new->id]);
              
            }
            
        }
        else
        {
            return redirect()->back()->with('warning', 'Already enquired this product');
        }
        
    }
    public function ordered($id)
    {
        $contact = Contact::where('id', $id)->first();
        $product = Products::where('id', $contact->product_id)->first();
        $seller = User::where('id', $product->user_id)->first();

        if (Auth::check()) {
            if (auth()->user()->id == $product->user_id) {
                return redirect()->back()->with('warning', 'Seller cannot buy the same product');
            }

            $user = auth()->user(); 

            return view('buyer.ordered', compact('seller', 'id', 'product', 'user','contact'));
        }

        return redirect()->route('login');
    }
    public function addOrdered(Request $request)
    {
        $product = Products::where('id',$request->product_id)->first();
        $order = Contact::where('id',$request->contact_id)->first();
        $seller = User::where('id',$request->seller_id)->first();
        $buyer = User::where('id',$order->buyer_id)->first();
        $buyer_enquiries = Contact::where('buyer_id',auth()->user()->id)->get();
        $order->contact_confirm = 'Yes';
        $order->status = 'Y';
        $order->save();
            
             try {
                    // Send email to seller
                    Mail::to($seller->company_email)->send(new ContactEmail($product, $buyer, $order));
                } catch (\Exception $e) {
                    // Handle email sending failure
                    return redirect()->back()->with('warning', 'Failed to send email to seller.');
                }
           return view('buyer.view')->with('success', '<span class="fa fa-check-circle"></span>Seller has received your enquiry!');
                        
    }
    public function remainder(Request $request)
    {
        $contact = Contact::find($request->id);
        
        // Check if $contact is not null and contact_confirm is 'No'
        if ($contact && $contact->contact_confirm == 'Yes') {
            // Handle remainder case
            $remainderValue = ($contact && $contact->remainders == 0) ? 1 : ($contact->remainders + 1);

            if ($contact) {
                $contact->remainders = $remainderValue;
                $contact->save();

                $product = Products::find($contact->product_id);
                $order = Contact::find($request->id);
                $buyer = User::find($order->buyer_id);
                $seller = User::find($contact->seller_id);

                try {
                    // Send email to seller
                    Mail::to($seller->company_email)->send(new ContactEmail($product, $buyer, $order));
                } catch (\Exception $e) {
                    // Handle email sending failure
                    return redirect()->back()->with('warning', 'Failed to send email to seller.');
                }

                $successMessage = 'Reminder Sent Successfully to Seller. Sent Reminder: ' . $remainderValue;
                return redirect()->back()->with('success', $successMessage);
            } else {
                // Handle the case where $contact is not found
                return redirect()->back()->with('warning', 'Contact not found.');
            }
        }
    }

    
    public function addRemark(Request $request, $id)
    {
        $enquiry = Contact::findOrFail($id);
        $new = Contact::where('id', $enquiry->id)->first(); 
        $new->remark = $request->remark;
        $new->save();
        return redirect()->back()->with('success', 'Remark added Successfully');
    }
    public function listEnquiry()
    {
        $user = auth()->user();
        $enquiries = Contact::where('seller_id', $user->id)->where('status', 'Y')->get();
        return view('buyer.enquiryList', compact('enquiries', 'user'));
    }
    public function listBuyerEnquiry()
    {
        $buyer_enquiries = Contact::where('buyer_id',auth()->user()->id)->where('status', 'Y')->get();  
         return view('buyer.BuyerenquiryList',compact('buyer_enquiries'));
    }
    public function sellerdelete(Request $request)
    {
         $seller = Contact::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Seller Deleted  Successfully'); 
    }
    public function buyerdelete(Request $request)
    {
         $buyer = Contact::where('id',$request->id)->delete();
        return \Redirect::back()->withSuccess( 'Buyer Deleted  Successfully'); 
    }
    public function handleRequest(Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        $contact->update(['price_request' => '1']);

        return redirect()->back()->with('success', 'Requested successfully');
    }
    public function handleAccept(Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        $contact->update(['price_request' => '2']);

        return redirect()->back()->with('success', 'Accepted successfully');
    }
}
