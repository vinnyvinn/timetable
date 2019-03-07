<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aft\AfricasTalking;
use App\Jobs\SendSmsJob;
use Carbon\Carbon;

class SendMessagesController extends Controller
{
    public function index()
    {
//        $AT =  new AfricasTalking(config('aft.user_name'),config('aft.owner_secret'));
//        $sms= $AT->sms();
//        $sms->send([
//            'to'      => '0704522671',
//            'message' => 'It worked'
//
//        ]);

        $smsJob = (new SendSmsJob())->delay(Carbon::now()->addSeconds(3));
        dispatch($smsJob);

        echo 'message sent';

    }
}
