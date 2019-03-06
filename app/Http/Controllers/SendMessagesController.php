<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aft\AfricasTalking;

class SendMessagesController extends Controller
{
    public function index()
    {
        $AT =  new AfricasTalking(config('aft.user_name'),config('aft.owner_secret'));
        $sms= $AT->sms();
        $sms->send([
            'to'      => '0704522671',
            'message' => 'It worked'

        ]);
    }
}
