<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Support\Renderable;
use App\Notifications\ContactMessageNotification;

class ContactController extends Controller
{
    /**
     * Show contact form.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('contact.create');
    }

    /**
     * Process the contact message.
     *
     * @param ContactFormRequest $request
     * @return RedirectResponse
     */
    public function store(ContactFormRequest $request)
    {
        Notification::route('mail', config('services.admin.email'))
            ->notify(new ContactMessageNotification($request->validated()));

        return redirect()->back()->with(['success' => 'Message sent successfully']);
    }
}
