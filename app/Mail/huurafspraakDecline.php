<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class huurafspraakDecline extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $huurder_Naam;
    public $reden;

    public function __construct($huurder_Naam, $reden)
    {
        $this->huurder_Naam = $huurder_Naam;
        $this->reden = $reden;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mail.huurafspraakDecline', compact('huurder_Naam', 'reden'));
    }
}
