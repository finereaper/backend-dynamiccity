<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class huurafspraakAccept extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $huurder_Naam;
    public $pandInfo;
    public $afspraakInfo;

    public function __construct($huurder_Naam, $pandInfo, $afspraakInfo)
    {
        $this->huurder_Naam = $huurder_Naam;
        $this->pandInfo = $pandInfo;
        $this->afspraakInfo = $afspraakInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mail.huurafspraakAccept', compact('huurder_Naam','pandInfo', 'afspraakInfo'));
    }
}
