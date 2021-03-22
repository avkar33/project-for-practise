<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestDbController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => DB::table('users')->get(),
            'user_id_1' => DB::table('users')->where('id', '1')->select('name', 'email')->get()
        ]);
    }
}
