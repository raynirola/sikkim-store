<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Notifications\ContactMessageNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        Notification::route('mail', config('services.admin.email'))
            ->notify(new ContactMessageNotification($request->validated()));
        return redirect()->back()->with(['success' => 'Message sent successfully']);
    }
}
