<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class TestController extends Controller
{
    public function testLog(Request $request)
    {
        Log::debug('debug');
        Log::alert($request->all());
    }
}
