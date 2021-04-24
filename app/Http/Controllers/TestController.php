<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestSendMail;

class TestController extends Controller
{
    public function testLog(Request $request)
    {
        Log::debug('debug');
        Log::alert($request->all());
    }

    public function testEmail(Request $request)
    {
        $sending = $request->sending;
        $email = $request->email;

        Mail::to($email)->send(new TestSendMail($sending));
    }
}
