<?php

namespace App\Console\Commands;

use App\ScheduleLesson;
use Illuminate\Console\Command;
use App\Aft\AfricasTalking;
use Carbon\Carbon;

class ScheduleLessons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lesson:teachers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS to teachers.';

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

//        $AT =  new AfricasTalking(config('aft.user_name'),config('aft.owner_secret'));
//        $sms= $AT->sms();
//        $sms->send([
//            'to'      => '0704522671',
//            'message' => 'This worked like a charm. I just love it'
//
//        ]);
        $lessons = ScheduleLesson::all();
        foreach ($lessons as $lesson){
            $time_now = date('H:i');
            $s_time =date("H:i", strtotime($lesson->time));
            if($s_time == $time_now){

                $AT =  new AfricasTalking(config('aft.user_name'),config('aft.owner_secret'));
                $sms= $AT->sms();
                $sms->send([
                    'to'      => '0704522671',
                    'message' => 'This worked like a charm. I just love it'

                ]);
            }
        }

    }
}
