<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\barrido;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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
        $schedule->call(function(){
            DB::table('users')->where('verificado', '=', 'N')->delete();
        })->daily(); //Va a eliminar los registros sin verificar diario a media noche


        $schedule->call(function(){
        $users = User::where('activo', 'S')->get('email');
        foreach ($users as $mail) {
            $name = DB::table('users')->where('email', $mail)->value('name');
            Mail::to($mail)->send(new barrido($mail,$name));
        }
            //Cambiamos todos los users a N
            DB::table('users')->where('activo', 'S')->update(['activo' => 'N']);

            
        })->everyMinute(); //Cada cuatro meses el 15 del mes va a eliminar correos no activos


        $schedule->call(function(){
            DB::table('users')->where('activo', '=', 'N')->delete();
        })->quarterlyOn(15, '14:00'); //Cada cuatro meses el 15 del mes va a eliminar correos no activos


        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
