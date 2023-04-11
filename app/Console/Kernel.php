<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $users = User::all();
        foreach($users as $user){
            if(!empty($user->orders)){
                foreach($user->orders as $order){
                    $time = $order->start_date;
                    $time2=strtotime($time);
                    $day = date('d',$time2) ; //to get day in date

                    Carbon::now()->timezone('Africa/Cairo')->format('Y-m-d H:i');

                    $send_time_for_ifCondition = Carbon::parse( $time)->subHours(2)->format("Y-m-d H:i"); //time befor exorire b 2 hours
                    $send_time = Carbon::parse( $time)->subHours(2)->format("H:i"); //time befor exorire b 2 hours

                    if( Carbon::now()->timezone('Africa/Cairo')->format('Y-m-d H:i') == $send_time_for_ifCondition && $order->flag == 'unsend' ){
                        $order->update([
                            'flag'=>'send'
                        ]);

                        $schedule->command('send:email', [$order->id])->monthlyOn($day,  $send_time); //1, 16, '13:00'

                    }



                }

            }
        }

    }


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
