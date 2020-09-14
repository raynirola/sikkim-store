<?php

namespace App\Console\Commands;

use App\Notifications\DailyMailNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

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
    protected $description = 'Send a daily mail';

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
        Notification::route('mail', ['raynirola@gmail.com', 'alishachauhan797@gmail.com', 'raynirola@icloud.com'])
            ->notify(new DailyMailNotification());
    }
}
