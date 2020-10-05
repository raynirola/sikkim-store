<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Preorder extends Model
{
    protected $fillable = [
        'email', 'name', 'phone', 'business'
    ];

    public function getInitialAttribute()
    {
        [$firstName, $lastname] = explode(' ', $this->name);
        return Str::upper(Str::substr($firstName, 0, 1) . Str::substr($lastname, 0, 1));
    }

    public function getPhoneAttribute()
    {
        return '+91 ' . $this->attributes['phone'];
    }

}
