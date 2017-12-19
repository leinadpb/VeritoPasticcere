<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

     public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = $this->data['from_email'];
        $subject = $this->data['subject_email'];
        $name = $this->data['name_from_email'] . " " . $this->data['lastname_from_email'];
        $comment = $this->data['message'];

        $data = $this->data;

        return $this->view('emails.contact')
                    ->from($address, $name)
                   // ->cc($address, $name)
                   // ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 
                        'data' => $data,
                    ]);

    }
}
