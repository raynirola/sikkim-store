<?php

namespace App\Console\Commands;

use App\Notifications\DailyMailNotification;
use App\Subscription;
use Illuminate\Console\Command;

class SendDailyMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:dailyMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a daily mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        foreach (Subscription::query()
                     ->where('active', true)
                     ->whereNotNull('email_verified_at')->get() as $sub) {
            $sub->notify((new DailyMailNotification())->onQueue('dailyMail'));
        }
    }
}
