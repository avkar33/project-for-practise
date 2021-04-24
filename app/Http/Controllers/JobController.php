<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use Illuminate\Http\Request;
use App\Jobs\TestJob;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestSendMail;

class JobController extends Controller
{
    public function setJob($userId)
    {
        $user = User::find($userId);
        TestJob::dispatch($user)->onQueue('user');
    }

    public function sendEmail()
    {
        // EmailJob::dispatch('teasdst@mail.com', 'aewstgasedrysdrthsrtyh')->onQueue('email');
        Mail::to('teasdst@mail.com')->queue((new TestSendMail('aewstgasedrysdrthsrtyh'))->onQueue('email'));
    }
}
