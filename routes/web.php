<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'ComingSoonController')->name('home');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/subscribe', 'SubscriptionController@store')->name('subscription.store');
