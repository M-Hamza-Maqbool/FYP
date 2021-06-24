<?php

namespace App\Mail;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShopActivation extends Mailable
{
    use Queueable, SerializesModels;
public $shop;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.shop-activation');
    }
}
