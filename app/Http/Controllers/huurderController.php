<?php

namespace App\Http\Controllers;

use App\Favorieten;
use App\Http\Requests\HuurafspraakRequest;
use App\Huurder;
use App\Interesse;
use App\Mail\Huurafspraak;
use App\Pand;
use App\Verhuurder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Int_;

class huurderController extends Controller
{
    /**
     * Methode voor het tonen van de registratie van een huurder
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.huurder.registratie');
    }

    /**
     * Methode voor het registeren van een huurder
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $options = [
            'gebruikerVoornaam' => 'required|min:2|max:30',
            'gebruikerAchternaam' => 'required|min:2|max:30',
            'gebruikerEmail' => 'required|email',
            'gebruikerGeboortedatum' => 'required',
            'gebruikerBedrijfsnaam' => 'min:2|max:30',
            'gebruikerTelefoonnummer' => 'required|min:10|numeric|',
            'gebruikerPostcode' => 'required|min:6|max:6', ['regex:/^[1-9]{1}[0-9]{3}[\s]{0,1}[a-z]{2}$/i'],
            'gebruikerProductgroep' => 'required',
            'gebruikerWachtwoord1' => 'required|min:8|max:40', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
            'gebruikerWachtwoord2' => 'required|min:8|max:40|same:gebruikerWachtwoord1', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ];
        $this->validate($request, $options);
        if(emailExist($request->gebruikerEmail) == false) {
            $huurder = new Huurder();
            $huurder->huurder_Voornaam = $request->gebruikerVoornaam;
            $huurder->huurder_Achternaam = $request->gebruikerAchternaam;
            $huurder->huurder_Email = $request->gebruikerEmail;
            $huurder->huurder_Geboortedatum = $request->gebruikerGeboortedatum;
            $huurder->huurder_Bedrijfsnaam = $request->gebruikerBedrijfsnaam;
            $huurder->huurder_Telefoonnummer = $request->gebruikerTelefoonnummer;
            $huurder->huurder_Postcode = $request->gebruikerPostcode;
            $huurder->huurder_Productgroep = $request->gebruikerProductgroep;
            $huurder->huurder_Wachtwoord = Hash::make($request->gebruikerWachtwoord1);
            $huurder->save();
            return redirect('/huurder/inloggen')->with('status', 'Registeren is succesvol');
        }
        return back()->with('status', 'Dit email adress is al eerder gebruikt')->withInput(Input::except('gebruikerWachtwoord1','gebruikerWachtwoord2'));;
    }

    /**
     * Methode voor het tonen van de inlog pagina van de huurder
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLogin()
    {
        return view('pages.standaard.inloggen');
    }

    /**
     * Methode voor het inloggen van een huurder
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doLogin(Request $request)
    {
        $options = [
            'gebruikerGebruikersnaam' => 'required|email',
            'gebruikerWachtwoord' => 'required|min:8|max:40', ['regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ];
        $this->validate($request, $options);
        $huurder = new Huurder();
        $account = $huurder->where('huurder_Email', '=', $request->gebruikerGebruikersnaam)->first();
        if ($account) {
            if (Hash::check($request->gebruikerWachtwoord, $account->huurder_Wachtwoord)) {

                Session::put('huurder_ID', $account->huurder_ID);
                Session::put('huurder_Voornaam', $account->huurder_Voornaam);
                Session::put('huurder_Achternaam', $account->huurder_Achternaam);
                return redirect()->route('allePanden');
            }
            return back()->with('status', 'Email of wachtwoord is incorrect');
        }
        return back()->with('status', 'Email of wachtwoord is incorrect');
    }

    /**
     * Methode voor het uitloggen van een huurder
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function doLogout()
    {
        Session::flush();
        return redirect('huurder/inloggen');
    }

    /**
     * Methode voor het tonen van de profiel pagina van een huurder
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile()
    {
        $huurder = new Huurder();
        $account = $huurder->where('huurder_ID', '=', Session::get('huurder_ID'))->first();
        $info = [
            'huurder_Voornaam' => $account['attributes']['huurder_Voornaam'],
            'huurder_Achternaam' => $account['attributes']['huurder_Achternaam'],
            'huurder_Geboortedatum' => $account['attributes']['huurder_Geboortedatum'],
            'huurder_Email' => $account['attributes']['huurder_Email'],
            'huurder_Postcode' => $account['attributes']['huurder_Postcode'],
            'huurder_Telefoonnummer' => $account['attributes']['huurder_Telefoonnummer'],
            'huurder_Bedrijfsnaam' => $account['attributes']['huurder_Bedrijfsnaam'],
            'huurder_Productgroep' => $account['attributes']['huurder_Productgroep'],
        ];
       return view('pages.huurder.profiel', compact('info'));
    }

    /**
     * Methode voor het tonen van de pagina waarop alle gelikete panden staan van een huurder
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function overviewLikes()
    {
        $intresse = new Interesse();
        $intresses = $intresse->where('huurder_ID', '=', Session::get('huurder_ID'))->where('heeftInteresse', '=', 1)->get();
        $panden = array();
        foreach ($intresses as $item)
        {
            $pand = new Pand();
            $pandInfo = $pand->where('idPand', '=', $item['attributes']['idPand'])->get();
            $panden[] = $pandInfo;
        }
        return view("pages.huurder.intresses", compact('panden'));
    }

    /**
     * Methode voor het maken van een huurafspraak
     * @param HuurafspraakRequest $request
     * @param $pandId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function pandHuurafspraak(HuurafspraakRequest $request,$pandId)
    {
        $gebruikerStartdatum = \DateTime::createFromFormat('d/m/Y', $request->gebruikerStartdatum);
        $gebruikerEinddatum = \DateTime::createFromFormat('d/m/Y', $request->gebruikerEinddatum);
        if($gebruikerStartdatum == false)
        {
            $gebruikerStartdatum = \DateTime::createFromFormat('Y-m-d', $request->gebruikerStartdatum);
            $gebruikerEinddatum = \DateTime::createFromFormat('Y-m-d', $request->gebruikerEinddatum);
        }
        $Startdatum = date_format($gebruikerStartdatum, 'Y-m-d');
        $Einddatum = date_format($gebruikerEinddatum, 'Y-m-d');
        $huurAfspraak = new \App\Huurafspraak();
        $huurder = Huurder::where('huurder_ID', '=', Session::get('huurder_ID'))->first();
        $pand = Pand::where("idPand", "=", $pandId)->first();
        $verhuurder = Verhuurder::where("verhuurder_ID", "=", $pand["attributes"]["verhuurder_ID"])->first();
        $huurder_ID = $huurder["attributes"]["huurder_ID"];
        $huurder_Naam = $huurder["attributes"]["huurder_Voornaam"] . ' ' . $huurder["attributes"]["huurder_Achternaam"];
        $huurder_Email = $huurder["attributes"]["huurder_Email"];
        $huurder_Telefoonnummer = $huurder["attributes"]["huurder_Telefoonnummer"];
        $huurder_Bedrijfsnaam = $huurder["attributes"]["huurder_Bedrijfsnaam"];
        $huurder_Productgroep = $huurder["attributes"]["huurder_Productgroep"];
        $verhuurder_Naam = $verhuurder["attributes"]["verhuurder_Voornaam"] . ' ' . $verhuurder["attributes"]["verhuurder_Achternaam"];
        $verhuurder_Email = $verhuurder["attributes"]["verhuurder_Email"];
        $pandInfo = $pand["attributes"];

        $huurAfspraak->huurder_ID = Session::get('huurder_ID');
        $huurAfspraak->idPand = $pandId;
        $huurAfspraak->startDatum = $Startdatum;
        $huurAfspraak->eindDatum = $Einddatum;
        $huurAfspraak->prijs = $pandInfo["prijs"];
        $huurAfspraak->aantalPlekken = $request->gebruikerAantalplekken;
        $huurAfspraak->geaccepteerd = 0;
        $huurAfspraak->save();
        Mail::to($verhuurder_Email)->send(new Huurafspraak($huurder_Naam, $huurder_Email, $huurder_Telefoonnummer, $huurder_Bedrijfsnaam, $huurder_Productgroep, $verhuurder_Naam, $pandInfo, $huurder_ID));
        return back()->with('status', 'U heeft een afspraak gemaakt met de verhuurder');
    }
}
