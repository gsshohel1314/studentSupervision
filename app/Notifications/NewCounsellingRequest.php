<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewCounsellingRequest extends Notification
{
    use Queueable;

    protected $insert;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($insert)
    {
        $this->insert=$insert;
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
        ->greeting('Hello, Teacher!')
        ->subject('You have one new counselling request')
        ->line('New request by '.$this->insert->name.' need to approve')
        ->line('To approve the request click aprrove button')
        ->action('View', url('admin/counselling/request'))
        ->line('Thank you for using our service!');
    }

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
