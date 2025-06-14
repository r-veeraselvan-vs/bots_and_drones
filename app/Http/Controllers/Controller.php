<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Products;
use App\Models\Enquiry;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUniqueSlug($name, $type)
    {
        do {
            $rules = [
                '@' => '-',
                '#' => '-',
                '$' => '-',
                '%' => '-',
                '&' => '-',
                '*' => '-',
                ')' => '-',
                '(' => '-',
                '_' => '-',
                '- ' => '-',
                ' -' => '-',
                '   ' => '-',
                '  ' => '-',
                ' ' => '-',
                '----' => '-',
                '---' => '-',
                '--' => '-',
                '-' => '-',
                '/' => '-',
            ];
            
            foreach($rules as $i => $rule){
                $name = str_replace($i, $rule,$name);
            }

            $count = 0;
            $random_number = '-'.rand(100,9999);
            $unique_slug = $name.$random_number;
            
            switch ($type) {
                case 'product':
                    $count = Products::where('slug', $unique_slug)->count();
                    break;
            }
        } while ($count > 0);
        return $unique_slug;
    }
    
    
    public function sendEmail($customer_id)
    {
        
        $enquiries = Enquiry::where('id', $customer_id)->first();
        $customer = User::where('id',$enquiries->buyer_id)->first();
        $seller = User::where('id',$enquiries->seller_id)->first();
        $email = $seller->email;
        
       // \Mail::to('roselin@thulirsoft.com')->send(new \App\Mail\NotifyMail($enquiries));
        //\Mail::to('info@thulirsoft.com')->send(new \App\Mail\NotifyMail($enquiries));
       
        \Mail::to($email)->send(new \App\Mail\NotifyMail($enquiries));
       
        \Mail::to($customer->email)->send(new \App\Mail\NotifyMail($enquiries));
       
        //\Mail::to('ai@botsanddrones.in')->send(new \App\Mail\NotifyMail($enquiries));
      
      
        return;
    }
    
     public function upload_image($file_name, $folder_name, $image)
    {
        // File name overwrite here
        $name = $image->getClientOriginalName();
       //  $name = str_replace(' ', '-', $name);
        $extension = $image->getClientOriginalExtension(); 
        $file_name = str_replace('.'.$extension, '', $name);
        // File name overwrite here

       $name = $file_name.'-'.rand().'-'.date('m_d_Y_h_i_a.').$image->getClientOriginalExtension();
       $path = '/'.$folder_name.'/';
       \Storage::disk('public')->put($path.$name, file_get_contents($image), 'public');
       return $name;
    }
    
}
