<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
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
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Query From WattGuru Website Career Form')
        ->view('email.sendMail')
        ->with('data', $this->data)
        ->attach($this->data['cv']->getRealPath(),

            [
                'as' => $this->data['cv']->getClientOriginalName(),
                'mime' => $this->data['cv']->getClientMimeType(),
            ])
        ->attach($this->data['cover_letter']->getRealPath(),

            [
                'as' => $this->data['cover_letter']->getClientOriginalName(),
                'mime' => $this->data['cover_letter']->getClientMimeType(),
            ]);

    }
}