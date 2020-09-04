<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');
