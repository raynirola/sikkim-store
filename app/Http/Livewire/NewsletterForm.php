<?php

namespace App\Http\Livewire;

use App\Http\Requests\EmailSubscriptionRequest;
use App\Notifications\SubscriptionVerificationNotification;
use App\Subscription;
use Livewire\Component;

class NewsletterForm extends Component
{
    public $subscriber_email;

    protected function getRules()
    {
        return (new EmailSubscriptionRequest())->rules();
    }

    protected function getMessages()
    {
        return (new EmailSubscriptionRequest())->messages();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function subscribe()
    {
        $this->emailExists() ?: tap(Subscription::create($this->validate()), function ($subscription) {
            $subscription->notify(new SubscriptionVerificationNotification($subscription));
        });
        $this->reset();
        session()->flash('info', 'Verification email will be sent upon successful subscription, please check your email inbox.');
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }

    private function emailExists()
    {
        return
            Subscription::query()->where('subscriber_email', $this->subscriber_email)->count();
    }
}
