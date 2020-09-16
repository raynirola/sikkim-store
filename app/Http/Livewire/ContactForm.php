<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactMessageNotification;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected function getRules()
    {
        return (new ContactFormRequest())->rules();
    }

    public function submitContactForm()
    {
        Notification::route('mail', config('services.admin.email'))
            ->notify(new ContactMessageNotification($this->validate()));

        $this->reset();

        session()->flash('success', 'We received your message successfully and will get back to you shortly!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
