<?php

namespace App\Console\Commands;

use App\Models\Cat;
use App\Models\User;
use App\Events\SendEmailEvents;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()

        {




             event(new SendEmailEvents($user));




        }
}
