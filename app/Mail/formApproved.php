<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formApproved extends Mailable
{
    use Queueable, SerializesModels;
    public $userName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicant)
    {
        $this->userName= $applicant['Name'];
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.body');
        if(isset($this->ccemail) && $this->ccemail != ''){
            $email->cc($this->ccemail);
        }
        if(isset($this->bccemail) && $this->bccemail !=''){
            $email->bcc($this->bccemail);
        }
        if(isset($this->attachmentsfilepath) && $this->attachmentsfilepath !=''){
            $email->attach($this->attachmentsfilepath);
        }
        $email->subject('your verification');
        return $email;
    }
}
