<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private array $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Contact Message, Sikkim Store')
            ->greeting('Hello, Admin!')
            ->line('You have a new message.')
            ->line('From: ' . $this->request['name'])
            ->line('Email: ' . $this->request['email'])
            ->line('Message:')
            ->line('"' . $this->request['message'] . ' "')
            ->salutation('(Bot)');
    }
}
