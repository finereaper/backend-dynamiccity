<?php

namespace App\Http\Controllers;

use App\Huurder;
use App\Mail\Huurafspraak;
use App\Mail\huurafspraakAccept;
use App\Mail\huurafspraakDecline;
use App\Pand;
use App\Verhuurder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class verhuurderController extends Controller
{
    public function index()
    {
        return view('pages.verhuurder.registratie');
    }

    public function register(Request $request)
    {
        $options = [
            'gebruikerVoornaam' => 'required|min:2|max:30',
            'gebruikerAchternaam' => 'required|min:2|max:30',
            'gebruikerEmail' => 'required|email',
            'gebruikerBedrijfsnaam' => 'min:2|max:30',
            'gebruikerTelefoonnummer' => 'required|min:10|numeric|',
            'gebruikerOmschrijving' => 'required|max:255',
            'gebruikerWachtwoord1' => 'required|min:8|max:40', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
            'gebruikerWachtwoord2' => 'required|min:8|max:40|same:gebruikerWachtwoord1', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ];
        $this->validate($request, $options);
        if(emailExist($request->gebruikerEmail) == false) {
            $verhuurder = new Verhuurder();
            $verhuurder->verhuurder_Voornaam = $request->gebruikerVoornaam;
            $verhuurder->verhuurder_Achternaam = $request->gebruikerAchternaam;
            $verhuurder->verhuurder_Email = $request->gebruikerEmail;
            $verhuurder->verhuurder_Bedrijfsnaam = $request->gebruikerBedrijfsnaam;
            $verhuurder->verhuurder_Telefoonnummer = $request->gebruikerTelefoonnummer;
            $verhuurder->verhuurder_Omschrijving = $request->gebruikerOmschrijving;
            $verhuurder->verhuurder_Wachtwoord = Hash::make($request->gebruikerWachtwoord1);
            $verhuurder->save();
            return redirect('/verhuurder/inloggen')->with('status', 'Registeren is gelukt');
        }
        return back()->with('status', 'Dit email adress is al eerder gebruikt')->withInput(Input::except('gebruikerWachtwoord1','gebruikerWachtwoord2'));
    }

    public function showLogin()
    {
        return view('pages.standaard.inloggen');
    }

    public function doLogin(Request $request)
    {
        $options = [
            'gebruikerGebruikersnaam' => 'required|email',
            'gebruikerWachtwoord' => 'required|min:8|max:40', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ];
        $this->validate($request, $options);
        $verhuurder = new Verhuurder();
        $account = $verhuurder->where('verhuurder_Email', '=', $request->gebruikerGebruikersnaam)->first();
        if ($account) {
            if (Hash::check($request->gebruikerWachtwoord, $account->verhuurder_Wachtwoord)) {

                Session::put('verhuurder_ID', $account->verhuurder_ID);
                Session::put('verhuurder_Voornaam', $account->verhuurder_Voornaam);
                Session::put('verhuurder_Achternaam', $account->verhuurder_Achternaam);
                return redirect()->route('verhuurderProfiel');
            }
            return back()->with('status', 'Email of wachtwoord is incorrect');
        }
        return back()->with('status', 'Email of wachtwoord is incorrect');
    }

    public function doLogout()
    {
        Session::flush();
        return redirect('verhuurder/inloggen');
    }

    public function showProfile()
    {
        $verhuurder = new Verhuurder();
        $account = $verhuurder->where('verhuurder_ID', '=', Session::get('verhuurder_ID'))->first();
        $info = [
            'verhuurder_Voornaam' => $account['attributes']['verhuurder_Voornaam'],
            'verhuurder_Achternaam' => $account['attributes']['verhuurder_Achternaam'],
            'verhuurder_Email' => $account['attributes']['verhuurder_Email'],
            'ververhuurder_Telefoonnummer' => $account['attributes']['verhuurder_Telefoonnummer'],
            'verhuurder_Bedrijfsnaam' => $account['attributes']['verhuurder_Bedrijfsnaam'],
            'verhuurder_Omschrijving' => $account['attributes']['verhuurder_Omschrijving'],
        ];
        return view('pages.verhuurder.profiel', compact('info'));
    }

    public function overviewPanden()
    {
        $pand = new Pand();
        $panden = $pand->where('verhuurder_ID', '=', Session::get('verhuurder_ID'))->get();
        return view('pages.verhuurder.overzicht', compact('panden'));
    }

    public function overviewHuuraspraken()
    {
        $huurAfspraaken = DB::select('select * FROM huurafspraak where idPand in (SELECT idPand FROM pand WHERE verhuurder_ID = ?)', [Session::get('verhuurder_ID')]);
        $huurders = array();
        $panden = array();
        foreach ($huurAfspraaken as $afspraak) {
            $huurders[] = Huurder::where('huurder_ID', $afspraak->huurder_ID)->first();
            $panden[] = Pand::where('idPand', $afspraak->idPand)->first();
        }
        return view('pages.verhuurder.huurafspraak', compact('huurAfspraaken', 'huurders', 'panden'));
    }

    public function acceptHuurafspraak($huurder_ID, $pandId)
    {
        $huurAfspraak = new \App\Huurafspraak();
        $huurAfspraak->where('huurder_ID', '=', $huurder_ID)->where('idPand', '=', $pandId)->update(['geaccepteerd' => 1]);
        $huurder = Huurder::where('huurder_ID', '=', $huurder_ID)->first();
        $pand = Pand::where('idPand', '=', $pandId)->first();
        $afpraak = \App\Huurafspraak::where('huurder_ID', '=', $huurder_ID)->where('idPand', '=', $pandId)->first();
        $huurder_Naam = $huurder["attributes"]["huurder_Voornaam"] . ' ' . $huurder["attributes"]["huurder_Achternaam"];
        $huurder_Email = $huurder["attributes"]["huurder_Email"];
        $pandInfo = $pand["attributes"];
        $afspraakInfo =  $afpraak["attributes"];
        Mail::to($huurder_Email)->send(new huurafspraakAccept($huurder_Naam,$pandInfo,$afspraakInfo));
        return back()->with('status', 'Huurafspraak is geaccepteerd');
    }

    public function showdeclineHuurafspraak($huurder_ID, $pandId)
    {
        return view('pages.standaard.huurafspraakForm');
    }

    public function declineHuurafspraak(Request $request, $huurder_ID, $pandId)
    {
        $options = [
            'gebruikerReden' => 'required|max:255',
        ];
        $this->validate($request, $options);
        $huurder = Huurder::where('huurder_ID', '=', $huurder_ID)->first();
        $huurder_Naam = $huurder["attributes"]["huurder_Voornaam"] . ' ' . $huurder["attributes"]["huurder_Achternaam"];
        $huurder_Email = $huurder["attributes"]["huurder_Email"];
        $reden = $request->gebruikerReden;
        Mail::to($huurder_Email)->send(new huurafspraakDecline($huurder_Naam,$reden));
        return redirect('/verhuurder/huurafspraken');
    }

    public function deleteHuurafspraak($huurder_ID, $pandId)
    {
        $huurAfspraak = new \App\Huurafspraak();
        $huurAfspraak->where('huurder_ID', '=', $huurder_ID)->where('idPand', '=', $pandId)->delete();
        return back()->with('status', 'Huurafspraak is verwijdert');
    }



}
