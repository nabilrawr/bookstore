<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReturnNotification extends Notification
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
        $this->rental = $rental;
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
            ->line('Thank you for return the book ')
            ->line('Below is a detail of the book that already returned')
            ->line('Title : ' . $this->rental->book->title)
            ->line('Pickup Date/Time:  ' . $this->rental->start_date)
            ->line('End Date/Time:  ' . $this->rental->end_date)
            ->line('see you again')

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
