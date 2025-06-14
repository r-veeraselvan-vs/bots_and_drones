<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Product;
use App\Customer;
use App\Enquiry;
use Session;
use App\ServiceProvider;
use App\ServiceEnquiry;
use App\TrainingCenters;
use App\TraineeEnquiry;
use App\TrainingCourse;
use App\Supplier;
use App\Service;
use Mail;
use App\Mail\NotifyMail;

class EnquiryController extends Controller
{
    public function list()
    {
         $enquiries = Enquiry::get();
         $products = Product::get();
         $suppliers = Supplier::get();
         $customers = Customer::get();
         return view('admin.enquiry.list',compact('enquiries','products','suppliers','customers'));
    }

    public function listServiceEnquiry()
    {
         $enquiries = ServiceEnquiry::get();
         $services = Service::get();
         $providers = ServiceProvider::get();
         return view('admin.enquiry.serviceEnquiry',compact('enquiries','services','providers'));
    }

    public function listTrainerEnquiry()
    {
         $enquiries = TraineeEnquiry::get();
         
         return view('admin.enquiry.traineeEnquiry',compact('enquiries'));
    }

 

    public function enquiry($id)
    {
         $prodID =  Crypt::decrypt($id);
         Session::put('productId',$prodID);
         $product = Product::find($prodID);
         return view('enquiry',compact('product'));
    }

    public function enquirySave(Request $request)
    {
        $new = new Customer();
        $new->name =  $request->name;
        $new->email =  $request->email;
        $new->mobile_no =  $request->mobile_no;
        $new->country =  $request->country;
        $new->location =  $request->location;
         $new->verification_code =  $request->verification_code;
        $new->save();

        $prodID = Session::get('productId');
        $product = Product::find($prodID);

        $enquiry = new Enquiry();
        $enquiry->customer_id =  $new->id;
        $enquiry->products_id =  $product->id;
        $enquiry->suppliers_id =  $product->supplier_id;
        $enquiry->quantity =  $request->quantity;
        $enquiry->total_order_value =  $request->total_order_value;
        $enquiry->usage_application =  $request->usage_application;
        $enquiry->company_name =  $request->company_name;
        $enquiry->save();

         $this->sendEmail($enquiry->id);
        
       
        return redirect('verified')->with('success', 'We have received your enquiry. Stay tuned, we’ll get back to you very soon');   
    }


    public function serviceEnquiry($id)
    {
         $providerID =  Crypt::decrypt($id);
         Session::put('providerId',$providerID);
         $provider = ServiceProvider::find($providerID);
         return view('serviceEnquiry',compact('provider'));
    }

    public function serviceEnquirySave(Request $request)
    {
       
        $providerId = Session::get('providerId');
        $product = ServiceProvider::find($providerId);

        $enquiry = new ServiceEnquiry();
        $enquiry->contact_person_name =  $request->contact_person_name;
        $enquiry->company_name =  $request->company_name;
        $enquiry->email =  $request->email;
        $enquiry->mobile_no =  $request->mobile_no;
        $enquiry->verification_code =  $request->verification_code;
        $enquiry->city =  $request->location;
        $enquiry->country =  $request->country;
        $enquiry->service_id =  $request->service_id;
        $enquiry->requirement_details =  $request->requirement;
        $enquiry->provider_id = $request->provider_id;
        $enquiry->expected_date =  $request->expected_date;
        $enquiry->save();

    $this->sendServiceEmail($enquiry->id);

       return redirect('service/verified')->with('success', 'We have received your enquiry. Stay tuned, we’ll get back to you very soon');  
    }


    /********* Trainee Enquiry **************/

    public function traineeEnquiry($id)
    {
         $centerID =  Crypt::decrypt($id);
         Session::put('centerID',$centerID);
         $centers = TrainingCenters::find($centerID);
         return view('traineeEnquiry',compact('centers'));
    }

    public function traineeEnquirySave(Request $request)
    {
       
        $centerID = Session::get('centerID');
        $product = TrainingCenters::find($centerID);

        $enquiry = new TraineeEnquiry();
         $enquiry->name =  $request->name;
        $enquiry->email =  $request->email;
        $enquiry->mobile_no =  $request->mobile_no;
        $enquiry->verification_code =  $request->verification_code;
        $enquiry->city =  $request->location;
        $enquiry->country =  $request->country;
        $enquiry->training_course_id =  $request->course_id;
        $enquiry->message =  $request->message;
        $enquiry->center_id = $request->center_id;

        $enquiry->save();

     $this->sendTraineeEmail($enquiry->id);

        return redirect('training/verified')->with('success', 'We have received your enquiry. Stay tuned, we’ll get back to you very soon');  
    }
    
    public function testEmail(Request $request)
    {
         Mail::to('roselin@thulirsoft.com')->send(new NotifyMail());
 
          if (Mail::failures()) {
               return response()->Fail('Sorry! Please try again latter');
          }else{
               return response()->success('Great! Successfully send in your mail');
             }
    }
}
