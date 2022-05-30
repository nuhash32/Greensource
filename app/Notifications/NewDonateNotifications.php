<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Order;  

class NewDonateNotifications extends Notification
{
    use Queueable;
    public  $order_detials;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $order_detials)
    {
        $this->order_detials= $order_detials;
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
                    ->greeting('Hello Admin!')
                    ->subject('Notifications')
                    ->line('New product payment by User')
                    ->line('*** Please Check it out ***')
                    ->action('View', url(route('confirmproducts.view')))
                    ->line('Thank you');
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
