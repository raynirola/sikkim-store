<?php

namespace App\Console\Commands;

use App\Notifications\PreorderPreviewNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class PreorderPreview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:preview-link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Preview Link for preorders which is valid for 10 minutes';

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
     * @return int
     */
    public function handle()
    {
        $this->info('Generating Preorder Preview Link.');
        $email = $this->ask('Please enter an email address');
        $this->info('Processing....');
        Notification::route('mail', $email)->notify(new PreorderPreviewNotification());
        $this->info('Notification Sent, please check your inbox.');
        return 0;
    }
}
