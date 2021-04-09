<?php

namespace App\Mail;

use App\Models\MailAdress;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email = $request->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailAddress = MailAdress::first();
        return $this->from($emailAddress)->subject('Bienvenue !')->view('template.templateNewsletter')->with(['emailClient' => $this->email]);
    }
}
