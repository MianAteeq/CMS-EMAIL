<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailDental extends Mailable
{
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->from(env('MAIL_DENTAL_FROM_ADDRESS'), $this->details['company'])->subject($this->details['title'])->view('emails.fm_one')->with('details', $this->details);

    }
}
