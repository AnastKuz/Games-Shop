<?php

namespace App\Mail;

use App\Buyer;
use App\Discs;
use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSent extends Mailable
{
    use Queueable, SerializesModels;

    public $buyer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Buyer $buyer)
    {
        $buyer = Buyer::find(1);
        $this->buyer = $buyer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('liannatartt@gmail.com')
            ->view('emails.orders');
    }
}
