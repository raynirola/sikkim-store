<?php

namespace App\Http\Livewire;

use App\Http\Requests\EmailSubscriptionRequest;
use App\Notifications\WelcomeNotification;
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
        Subscription::create($this->validate())->notify( new WelcomeNotification());
        $this->reset();
        session()->flash('success', 'Success, You are now subscribed!');
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
