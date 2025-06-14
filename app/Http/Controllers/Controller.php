<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Customer;
use App\Supplier;
use App\ServiceEnquiry;
use App\Enquiry;
use App\TraineeEnquiry;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function sendEmail($customer_id)
    {
        
        $enquiries = Enquiry::where('id', $customer_id)->first();
        $customer = Customer::where('id', $enquiries->customer_id)->first();
        
        $supplier = Supplier::where('id',$enquiries->suppliers_id)->first();
        $name = $supplier->name;
        $email = $supplier->email;
        
                
        \Mail::to('roselin@thulirsoft.com')->send(new \App\Mail\NotifyMail($enquiries));
        \Mail::to('info@thulirsoft.com')->send(new \App\Mail\NotifyMail($enquiries));
       
       //\Mail::to($email)->send(new \App\Mail\NotifyMail($enquiries));
       
       \Mail::to($customer->email)->send(new \App\Mail\NotifyMail($enquiries));
       
        \Mail::to('contact@botsanddrones.biz')->send(new \App\Mail\ServiceEnquiryMail($enquiries));
      
      
        return;
    }
    
     public function sendServiceEmail($customer_id)
    {
        
        
        $provider = ServiceEnquiry::where('id',$customer_id)->first();
        $name = $provider->name;
        $email = $provider->email;
       \Mail::to('roselin@thulirsoft.com')->send(new \App\Mail\ServiceEnquiryMail($provider));
       \Mail::to('info@thulirsoft.com')->send(new \App\Mail\ServiceEnquiryMail($provider));
       
       /* Customer Email*/
       \Mail::to($provider->email)->send(new \App\Mail\NotifyMail($provider));
       
       /*Admin Email*/
       \Mail::to('contact@botsanddrones.biz')->send(new \App\Mail\ServiceEnquiryMail($provider));
          
        return;
    }
    
    public function sendTraineeEmail($customer_id)
    {
        
        
        $provider = TraineeEnquiry::where('id',$customer_id)->first();
        $name = $provider->name;
        $email = $provider->email;
        
        \Mail::to('roselin@thulirsoft.com')->send(new \App\Mail\TraineeEnquiryMail($provider));
       \Mail::to('info@thulirsoft.com')->send(new \App\Mail\TraineeEnquiryMail($provider));
       
       /* Customer Email*/
       \Mail::to($provider->email)->send(new \App\Mail\NotifyMail($provider));
       
       /*Admin Email*/
        \Mail::to('contact@botsanddrones.biz')->send(new \App\Mail\ServiceEnquiryMail($provider));
           
        return;
    }
    
    
}
