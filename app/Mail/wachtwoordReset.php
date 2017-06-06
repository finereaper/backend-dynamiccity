<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class wachtwoordReset extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $naam;
    public $randomWachtwoord;

    public function __construct($naam,$randomWachtwoord)
    {
        $this->naam = $naam;
        $this->randomWachtwoord = $randomWachtwoord;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mail.wachtwoordReset', compact('naam', 'randomWachtwoord'));
    }
}
