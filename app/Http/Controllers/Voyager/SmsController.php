<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\Models\Box;
use App\Notifications\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function smsNotifi($id )
    {
        
        $box = Box::find($id);
        $box->notify(new Sms($box));
        return redirect()->back();
    }
}
