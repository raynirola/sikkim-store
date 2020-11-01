<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EarlyAccessInformation extends Mailable
{
    use Queueable, SerializesModels;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('emails.early_access_information')->with(['name' => $this->name]);
    }
}
