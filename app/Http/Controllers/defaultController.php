<?php

namespace App\Http\Controllers;

use App\Huurder;
use App\Mail\wachtwoordReset;
use App\Pand;
use App\Verhuurder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class defaultController extends Controller
{
    public function index()
    {
        $panden = Pand::all();
        $panden = $panden->take(3);
        return view('pages.standaard.index', compact('panden'));
    }

    public function getVoorwaarden()
    {
        return view('pages.standaard.voorwaarde');
    }

    public function getPassswordreset()
    {
        return view('pages.standaard.passwordReset');
    }

    public function postPassswordreset(Request $request)
    {
        $options = [
            'gebruikerGebruikersnaam' => 'required|email',
        ];
        $this->validate($request, $options);
        if (emailExist($request->gebruikerGebruikersnaam) == false) {
           return back()->with('status', 'Email bestaat niet, probeer opnieuw');
        }
        $account = infoAccount($request->gebruikerGebruikersnaam);
        $randomWachtwoord = str_random(7) . "!";
        if(isset($account["huurder_Voornaam"]))
        {
            $naam = $account["huurder_Voornaam"] . " " . $account["huurder_Achternaam"];
            $email = $account["huurder_Email"];
            Mail::to($email)->send(new wachtwoordReset($naam,$randomWachtwoord));
            $randomWachtwoord = Hash::make($randomWachtwoord);
            $huurder = Huurder::find($account["huurder_ID"]);
            $huurder->huurder_Wachtwoord = $randomWachtwoord;
            $huurder->save();
            return back()->with('status', 'Wachtwoord is gereset, check uw mail');
        }
        else
        {
            $naam = $account["verhuurder_Voornaam"] . " " . $account["verhuurder_Achternaam"];
            $email = $account["verhuurder_Email"];
            Mail::to($email)->send(new wachtwoordReset($naam,$randomWachtwoord));
            $randomWachtwoord = Hash::make($randomWachtwoord);
            $verhuurder = Verhuurder::find($account["verhuurder_ID"]);
            $verhuurder->verhuurder_Wachtwoord = $randomWachtwoord;
            $verhuurder->save();
            return back()->with('status', 'Wachtwoord is gereset, check uw mail');
        }
    }
}
