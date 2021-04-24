<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Mail\TestSendMail;
use Illuminate\Support\Facades\Mail;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public $to;
    // public $text;
    public function __construct()
    {
        // $this->to = $to;
        // $this->text = $text;
    }

    // public function retryUntil()
    // {
    //     return now()->addSeconds(5);
    // }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Mail::to($this->to)->send(new TestSendMail($this->text));
    }

    public function failed()
    {
        Log::channel('emails')->alert('error!');
    }
}
