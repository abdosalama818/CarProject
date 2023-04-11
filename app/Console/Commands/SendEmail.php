<?php

namespace App\Console\Commands;

use App\Models\Cat;
use App\Models\User;
use App\Mail\OrderShipped;
use App\Events\SendEmailEvents;
use App\Models\Order;
use App\Notifications\OrderNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email{order}';

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
            $order = $this->argument('order');
            $getOrder_id = Order::find($order);
            event(new SendEmailEvents($getOrder_id->user));
            Notification::send($getOrder_id->user, new OrderNotification($getOrder_id));






       
    }
}
