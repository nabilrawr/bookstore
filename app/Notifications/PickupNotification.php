<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PickupNotification extends Notification
{
    use Queueable;
    protected $rental;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($rental)
    {
        $this->rental=$rental;
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
            ->line('Hi ' . $this->rental->user->name)
            ->line('Thank you for book the book with us')
            ->line('Below is a detail of the book book')
            ->line('Title : ' . $this->rental->book->title)
            ->line('Pickup Date/Time:  ' . $this->rental->start_date)
            ->line('Make Sure to pick up the book by the date given to avoid cancellation of the borrow')

            ->line('Thank you,');
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
