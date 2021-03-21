<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function user($id)
    {
        return view('user', ['id' => $id]);
    }
}
