<?php

namespace App\Mail;

use App\Models\ContactFormSubject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $subjectId = ContactFormSubject::find($request->subject_id);
        $this->name = $request->name;
        $this->email = $request->email;
        $this->subject = $subjectId->subject;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject($this->subject)->view('template.templateMail')->with(['nameClient' => $this->name, 'emailClient' => $this->email, 'messageClient' => $this->message]);
    }
}
