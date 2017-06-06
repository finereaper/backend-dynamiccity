<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Stelvraag extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $verhuurder_Naam;
    public $gebruiker_Email;
    public $gebruiker_Message;
    public $pand_Straat;

    public function __construct($verhuurder_Naam, $gebruiker_Email, $gebruiker_Message,$pand_Straat)
    {
        $this->verhuurder_Naam = $verhuurder_Naam;
        $this->gebruiker_Email = $gebruiker_Email;
        $this->gebruiker_Message = $gebruiker_Message;
        $this->pand_Straat = $pand_Straat;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mail.stelvraag', compact('verhuurder_Naam', 'gebruiker_Email', 'gebruiker_Message','pand_Straat'));
    }
}
