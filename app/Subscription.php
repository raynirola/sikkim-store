<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscription extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subscriber_email', 'active', 'email_verified_at'];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'subscriber_email' => 'string',
        'email_verified_at' => 'datetime'
    ];

    /**
     * Get the user's email.
     *
     * @return string
     */
    public function getEmailAttribute()
    {
        return $this->subscriber_email;
    }

    public function getRouteKeyName()
    {
        return 'subscriber_email';
    }
}
