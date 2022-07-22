<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $e_sub;
    public $e_body;
    public function __construct($e_sub, $e_body)
    {
        //
        $this->e_sub = $e_sub;
        $this->e_body = $e_body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('otp')->with('OTP', $this->e_body)->subject('OTP', $this->e_sub);
    }
}
