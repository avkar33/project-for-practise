<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        dd(Auth::user());
    }
}
