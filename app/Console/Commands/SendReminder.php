<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Appointment;
use Carbon\Carbon;
use App\Notifications\Reminder;

class SendReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SendReminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $appointments = Appointment::where('date', '=', carbon::tomorrow()->toDateString())
            ->get();
            
        foreach($appointments as $appointment) {
            $appointment->notify(new Reminder($appointment));
        }
    }
}
