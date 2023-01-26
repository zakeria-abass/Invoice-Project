<?php

namespace App\Mail\users;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailusermail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $title ,$body ,$name ;

    public function __construct($title ,$body,$name)
    {
         $this->title=$title;
         $this->body=$body;
         $this->name=$name;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.users.email_users')->with([
            'title'=>$this->title,
            'body'=>$this->body,
            'name'=>$this->name,

        ]);
    }
}
