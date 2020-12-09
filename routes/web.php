<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::redirect('/landing', '/')
    ->name('landing');

Route::get('/contact', 'ContactController@index')
    ->name('contact.index');

Route::post('/contact', 'ContactController@store')
    ->name('contact.store');

Route::post('/subscribe', 'SubscriptionController@store')
    ->name('subscription.store');

Route::middleware('signed')->group(function () {
    Route::get('/subscribe/verify/{subscription}', 'SubscriptionVerificationController@store')
        ->name('subscription.verify');
    Route::get('/unsubscribe/{subscription}', 'SubscriptionController@destroy')
        ->name('subscription.destroy');
    Route::get('/preorders', 'PreorderController@index')
        ->name('preorders.index');
});
