<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false, 'reset' => false, 'login' => false]);

Route::get('/', 'ComingSoonController')->name('home');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/subscribe', 'SubscriptionController@store')->name('subscription.store');
Route::middleware('signed')->group(function () {
    Route::get('/subscribe/verify/{subscription}', 'SubscriptionVerificationController@store')
        ->name('subscription.verify');
    Route::get('/unsubscribe/{subscription}', 'SubscriptionController@destroy')
        ->name('subscription.destroy');
    Route::get('/preorders', 'PreorderController@index')
        ->name('preorders.index');
});
Route::get('/landing', 'LandingPageController')->name('landing.page');
