<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fromMail = config('mail.from.address');
        return $this->from($fromMail)->view('email', ['content' => $this->text]);
    }
}
