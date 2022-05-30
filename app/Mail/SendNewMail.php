<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $author;
    protected $authorMail;
    protected $mailContent;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $authorMail, $mailContent)
    {
        $this->author = $author;
        $this->authorMail = $authorMail;
        $this->mailContent = $mailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.body', ['author'=> $this->author, 'authorMail'=> $this->authorMail, 'mailContent'=> $this->mailContent]);
    }
}
