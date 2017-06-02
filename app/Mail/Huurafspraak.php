<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Huurafspraak extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $huurder_ID;
    public $huurder_Naam;
    public $huurder_Email;
    public $huurder_Telefoonnummer;
    public $huurder_Bedrijfsnaam;
    public $huurder_Productgroep;
    public $verhuurder_Naam;
    public $pandInfo;

    public function __construct($huurder_Naam,$huurder_Email,$huurder_Telefoonnummer,$huurder_Bedrijfsnaam,$huurder_Productgroep,$verhuurder_Naam,$pandInfo,$huurder_ID)
    {
        $this->huurder_ID = $huurder_ID;
        $this->huurder_Naam = $huurder_Naam;
        $this->huurder_Email = $huurder_Email;
        $this->huurder_Telefoonnummer = $huurder_Telefoonnummer;
        $this->huurder_Bedrijfsnaam = $huurder_Bedrijfsnaam;
        $this->huurder_Productgroep = $huurder_Productgroep;
        $this->verhuurder_Naam = $verhuurder_Naam;
        $this->pandInfo = $pandInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $aantalPlekken = \App\Huurafspraak::select('aantalPlekken')->where('idPand', $this->pandInfo["idPand"])->where("huurder_ID", '=', $this->huurder_ID)->first();
        return $this->view('pages.mail.huurafspraak', compact('huurder_Naam','huurder_Email','huurder_Telefoonnummer','$huurder_Bedrijfsnaam','huurder_Productgroep','verhuurder_Naam','pandInfo','aantalPlekken'));
    }
}
