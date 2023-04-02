<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderNotification extends Notification
{
    use Queueable;



    public $order ;

    public function __construct($order)
    {
        $this->order = $order ;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }



    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {


        return [
            'order_id'=>$this->order->id,
            'user_id'=>Auth::id(),
        ];
    }
}
/*
   $table->text('name')->nullable();
            $table->text('price')->nullable();//description
            $table->text('total_price')->nullable();//description
            $table->text('number_days')->nullable();//description
            $table->text('start_date')->nullable();
            $table->text('exp_date')->nullable();
            $table->text('qty')->default(1)->nullable();
            $table->enum('status' , ['paid' , 'unpaid' ])->default('unpaid')->nullable();


            $table->foreignId('user_id')-

*/
