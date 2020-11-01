<?php

namespace App\Console\Commands;

use App\Mail\EarlyAccessInformation;
use App\Preorder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEarlyAccessInformationMail extends Command
{
    protected $signature = 'send:early_access_information';
    protected $preorders;

    public function __construct()
    {
        $this->preorders = Preorder::all();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Collecting Early Access Users.');
        foreach ($this->preorders as $preorder) {
            $this->info('Sending mail to ' . $preorder->email);
            $this->info('Processing....');
            Mail::to($preorder->email)->queue(new EarlyAccessInformation($preorder->name));
            $this->info('Mail Sent...');
        }
        return 0;
    }
}
