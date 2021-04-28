<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestSendMail;
use Illuminate\Support\Facades\Cache;
use App\Services\MoneyFormatter;

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

    public function index()
    {
        $value = Cache::get('key', 'default');
        dd($value);
    }

    public function cachePut(Request $request)
    {
        $expireAt = now()->addMinute(10);
        foreach ($request->all() as $key => $value) {
            Cache::put($key, $value, $expireAt);
        }
    }

    public function product(Request $request)
    {
        $value = $request->money ?? 0;
        $formatter = new MoneyFormatter($value);
        dump($formatter->formatted());
    }
}
