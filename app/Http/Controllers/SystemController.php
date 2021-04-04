<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SystemController extends Controller
{
    public function changeLocale($locale)
    {
        if (in_array($locale, ['ru', 'en'])) {
            App::setLocale($locale);
        } else {
            return abort(400);
        }

        return redirect()->back();
    }
}
