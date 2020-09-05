<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes User Created using faker.';

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
        echo "Deleting All Users...\n";

        if (User::query()->count() == 0) {
            echo "No Users available...\n";
            return 1;
        }
        User::query()->delete();
        echo "Resetting Database\n";
        Artisan::call('migrate:fresh', ['-f']);
        echo "Cleaned..\n";
        return 1;
    }
}
