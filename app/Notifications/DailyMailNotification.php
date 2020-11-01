<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Inspiring;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DailyMailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $quote;
    private $author;

    public function __construct()
    {
        [$quote, $author] = explode('-', Inspiring::quote(), 2);
        $this->quote = $quote;
        $this->author = $author;
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
        return (new MailMessage)->view(
            'emails.dailyinspiringmail', ['author' => $this->author, 'quote' => $this->quote]
        );
    }
}
