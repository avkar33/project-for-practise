<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('test {text?}', function ($text = 'base') {
    $this->comment("test1 {$text}");
})->purpose('Test command');

Artisan::command('ask', function () {
    if ($this->confirm('Continue?')) {
        $name = $this->ask('Name?');
        $this->comment("name: {$name}");
    }
    $this->comment("123");
})->purpose('Test command');
