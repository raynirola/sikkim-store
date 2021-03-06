<?php

namespace App\Notifications;

use App\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class WelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Subscription
     */
    private $subscription;

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
            ->subject('Subscription Confirmed')
            ->success()
            ->line('Welcome to Sikkim Store')
            ->line('Thank you for subscribing to our newsletter, you are now a part of a great adventure.')
            ->line('If you didnt subscribe, you can always unsubscribe.')
            ->action('Unsubscribe', url($this->signedUrl()))
            ->line('Thank you for using our application!');
    }

    private function signedUrl()
    {
        return URL::signedRoute('subscription.destroy', ['subscription' => $this->subscription->email]);
    }
}
