<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestForSign extends Mailable
{
    use Queueable, SerializesModels;
    public $userName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->userName= $users['name'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.req');
    }
}
