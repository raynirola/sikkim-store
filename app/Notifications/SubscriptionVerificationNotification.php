<?php

namespace App\Notifications;

use App\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class SubscriptionVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Subscription
     */
    private $subscription;

    /**
     * Create a new notification instance.
     *
     * @param Subscription $subscription
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
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
            ->subject('Subscription Verification')
            ->line('Please verify your email address.')
            ->action('Verify', url($this->signedUrl()))
            ->line('Thank you for using our application!');
    }

    private function signedUrl()
    {
        return URL::temporarySignedRoute('subscription.verify', now()->addMinutes(30), ['subscription' => $this->subscription->email]);
    }
}
