<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class formApproved extends Notification
{
    use Queueable;

    public $userName;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($applicant)
    {
        //
         $this->userName= $applicant['name'];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                     ->greeting( greeting:'Hello,  Admin!!')
                     ->subject( subject: 'New Application Needed')
                    ->line(line:'New Applicant'.$this->userName. 'need to approve.')
                    ->line(line:'To Check  the Application click view button.')
                   // ->action(text:'view', url(route( name:'Applicant.index2',$$this->userName->id)))
                    ->line(line:'Thank you for using our application!');
    }

    //

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
