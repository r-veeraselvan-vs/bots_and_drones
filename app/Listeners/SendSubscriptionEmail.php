<?php

namespace App\Listeners;

use App\Events\SubscriptionCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionEmail
{
    public function handle(SubscriptionCreated $event)
    {
        $subscription = $event->subscription;
        $user = $subscription->user;

        $data = [
            'company_name' => $user->company_name,
            'company_email' => $user->company_email,
            'company_phone' => $user->company_phone,
            'state' => $user->state,
            //'subscription_type' => $subscription->subscription_type,
        ];

        try {
            // Send email
            Mail::send(new SubscriptionEmail($data));

            // Email sent successfully, redirect with success message
            return redirect()->route('product.list')->with('success', 'Your subscription message has been sent to the admin. Please wait for further communication.');
        } catch (\Exception $e) {
            // Error occurred while sending email, redirect with error message
            return redirect()->route('product.list')->with('error', 'Failed to send subscription message. Please try again later.');
        }
    }
}
