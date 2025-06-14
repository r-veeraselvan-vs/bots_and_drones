<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product,$buyer,$order)
    {
        $this->product = $product;
        $this->buyer = $buyer;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Order Confirmation')
                    ->view('email.order_confirmation')
                    ->with([
                        'product' => $this->product,
                        'buyer' => $this->buyer,
                        'order' => $this->order,
                    ]);
    }

}
