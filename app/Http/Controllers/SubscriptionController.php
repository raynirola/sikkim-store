<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailSubscriptionRequest;
use App\Notifications\WelcomeNotification;
use App\Subscription;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        Subscription::create($request->validated())->notify(new WelcomeNotification());
        return redirect()->back()->with(['success' => 'Success, You are now subscribed!']);
    }

    /**
     * Remove Subscription from database
     *
     * @param Request $request
     * @param Subscription $subscription
     * @return string
     * @throws Exception
     */
    public function destroy(Request $request, Subscription $subscription)
    {
        !$request->hasValidSignature() ?: $subscription->delete();
        return 'Success';
    }
}
