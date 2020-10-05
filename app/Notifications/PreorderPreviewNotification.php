<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class PreorderPreviewNotification extends Notification implements ShouldQueue
{
    use Queueable;

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
            ->subject('Preorder Preview Link')
            ->line('Hi,')
            ->line('Your preorders preview link is here,')
            ->action('Check Preorders', url($this->signedUrl()))
            ->line('Link valid for 10 minutes only');
    }

    private function signedUrl()
    {
        return URL::temporarySignedRoute('preorders.index', now()->addMinutes(10));
    }
}
