<?php

namespace App\Http\Controllers;

use App\Notifications\WelcomeNotification;
use App\Subscription;

class SubscriptionVerificationController extends Controller
{
    public function store(Subscription $subscription)
    {
        $subscription->email_verified_at == null
            ?: abort(403, 'Link not valid');
        $subscription->update(['email_verified_at' => now()]);
        $subscription->notify(new  WelcomeNotification($subscription));
        return 'success';
    }
}
