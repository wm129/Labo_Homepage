<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContacdtSendMail extends Mailable
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
    public function __construct($input,$type)
    {
        $this->your_name = $input['your_name'];
        $this->email = $input['email'];
        $this->contact = $input['contact'];
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
            ->view('email.user');
            ->with([
                'your_name' => $this->your_name,
                'email' => $this->email,
                'contact' => $this->contact ? $this->contact : null
            ]);
    }
}
