<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\RedirectResponse;
use App\Notifications\WelcomeNotification;
use App\Http\Requests\EmailSubscriptionRequest;

class SubscriptionController extends Controller
{
    /**
     * Store the user provided email address into the database.
     *
     * @param EmailSubscriptionRequest $request
     * @return RedirectResponse
     */
    public function store(EmailSubscriptionRequest $request)
    {
        Subscription::create($request->validated())->notify( new WelcomeNotification());
        return redirect()->back()->with(['success' => 'Success, You are now subscribed!']);
    }
}
