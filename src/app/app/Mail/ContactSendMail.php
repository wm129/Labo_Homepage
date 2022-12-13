<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $your_name;
    private $emal;
    private $contact;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs,$type)
    {
        $this->your_name = $inputs['your_name'];
        $this->email = $inputs['email'];
        $this->contact = $inputs['contact'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('お問合せを受け付けました')
            ->view('emails.user');
            ->with([
                'your_name' => $this->your_name,
                'email' => $this->email,
                'contact' => $this->contact ? $this->contact : null
            ]);
    }
}
