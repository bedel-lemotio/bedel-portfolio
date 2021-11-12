<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;


    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contact["email"], 'Bedel Portfolio')
            ->subject($this->contact["object"])
            ->view('mail.mail');
    }
}
