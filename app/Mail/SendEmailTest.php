<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailTest extends Mailable
{
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        // if($this->details['company']=="Fission Monster"){

        //     return $this->from($this->details['company_email'], $this->details['company'])->subject($this->details['title'])->view('emails.fm_one')->with('details', $this->details);

        // }else{

        // }
        return $this->from($this->details['company_email'], $this->details['company'])->subject($this->details['title'])->view('emails.test_email')->with('details', $this->details);
    }
}
