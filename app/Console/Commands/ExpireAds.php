<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Ad;
use Carbon\Carbon;

class ExpireAds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ExpireAds';

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
        Ad::where('time', '>=', (
                Carbon::now()->diffInDays(Carbon::parse(strtotime('updated_at')))
            ))
            ->update(['time' => 0]);

        echo "Expired Ads are removed";
    }
}
