<?php

namespace App\Http\Controllers;

use App\Favorieten;
use App\Http\Requests\EditpandRequest;
use App\Http\Requests\UploadRequest;
use App\Interesse;
use App\Pand;
use App\pandFoto;
use DoctrineTest\InstantiatorTestAsset\PharAsset;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use function Symfony\Component\Debug\Tests\FatalErrorHandler\test_namespaced_function;

class pandController extends Controller
{
    public function index()
    {
        $panden = new Pand();
        return $panden->all();

    }

    public function getInfo()
    {
        return view('pages.standaard.meerinfo');
    }

    public function getPandfoto($pandId)
    {
        $pandFoto = new pandFoto();
        $allFoto = $pandFoto->where('idPand', '=', $pandId)->get();
        return json_encode($allFoto[0]["fotoURL"]);
    }

    public function getAllfoto($pandId)
    {
        $pandFoto = new pandFoto();
        $allFoto = $pandFoto->where('idPand', '=', $pandId)->get();
        $fotos = array();
        foreach ($allFoto as $foto)
        {
            $fotos[] = $foto->fotoURL;
        }
        return json_encode($fotos);
    }

    public function showAddpand()
    {
        return view('pages.verhuurder.addpand');
    }

    public function Addpand(UploadRequest $request)
    {
        $cor = getCor($request->pandStraat, $request->pandStad);
        $pand = new Pand();
        $pand->verhuurder_ID = Session::get('verhuurder_ID');
        $pand->oppervlakte = $request->pandOppervlakte;
        $pand->omschrijving = $request->pandOmschrijving;
        $pand->straat = $request->pandStraat;
        $pand->postcode = $request->pandPostcode;
        $pand->stad = $request->pandStad;
        $pand->prijs = $request->pandPrijs;
        $pand->ligging = $request->pandLigging;
        $pand->status = $request->pandStatus;
        $pand->aantalPlekken = $request->pandPlekken;
        $pand->Longitude = $cor['lon'];
        $pand->Latitude = $cor['lat'];
        $pand->save();
        foreach ($request->pandPhotos as $photo) {
            $filename = $photo->store("pandFoto");
            pandFoto::create([
                'fotoURL' => $filename,
                'idPand' => $pand->idPand
            ]);
        }
        return back()->with('status', 'Pand is toegevoegd');
    }

    public function Infopand($pandId)
    {
        $pand = new Pand();
        $pandFoto = new pandFoto();
        $intresse = new Interesse();
        $query = $pand->where('idPand', '=', $pandId)->get();
        $fotos = $pandFoto->where('idPand', '=', $pandId)->get();
        $intresses = $intresse->where('idPand', '=', $pandId)->where('heeftInteresse','=', 1)->count();
        $pandInfo = $query[0]["attributes"];
        $info = array();
        foreach($fotos as $foto)
        {
            $info[] = $foto["fotoURL"];
        }
        return view('pages.standaard.infopand', compact('pandInfo', 'info', 'intresses'));
    }

    public function getAllpands()
    {
        $intresses = DB::select('SELECT idPand, COUNT(heeftInteresse) as aantalLikes FROM interesse GROUP BY idPand ORDER BY aantalLikes DESC LIMIT 3');
        $panden = array();
        foreach ($intresses as $intresse) {
            $panden[] = Pand::where('idPand', '=', $intresse->idPand)->first();
        }
        return view('pages.standaard.panden', compact('panden'));
    }

    public function searchPands(Request $request)
    {
        $options = [
            'gebruikerStad' => 'required|alpha',
        ];
        $this->validate($request, $options);
        $count = Pand::where('stad','=',$request->gebruikerStad)->count();
        $panden = Pand::where('stad','=',$request->gebruikerStad)->get();
        if($count == 0)
        {
            return back()->with('status', 'Er zijn geen panden in deze stad');
        }
        return view('pages.standaard.zoeken', compact('panden'));

    }

    public function showEditpand($pandId)
    {
        $pand = new Pand();
        $query = $pand->where('idPand', '=', $pandId)->where('verhuurder_ID', '=', Session::get('verhuurder_ID'))->count();
        if ($query == 0) {
            return redirect('verhuurder/panden');
        }
        $pandInfo = $pand->where('idPand', '=', $pandId)->get();
        $pandInfo = $pandInfo[0]['attributes'];
        return view("pages.verhuurder.editpand", compact("pandInfo"));
    }

    public function Editpand(EditpandRequest $request, $pandId)
    {
        $pand = Pand::find($pandId);
        $pand->oppervlakte = $request->pandOppervlakte;
        $pand->omschrijving = $request->pandOmschrijving;
        $pand->straat = $request->pandStraat;
        $pand->postcode = $request->pandPostcode;
        $pand->stad = $request->pandStad;
        $pand->prijs = $request->pandPrijs;
        $pand->ligging = $request->pandLigging;
        $pand->status = $request->pandStatus;
        $pand->aantalPlekken = $request->pandPlekken;
        $pand->save();
        return back()->with('status', 'Het opslaan is gelukt');
    }

    // deleten moet ook al de foto's en favorieten en likes weggooien
    public function deletePand($pandId)
    {
        Pand::destroy($pandId);
        $pandFotos = pandFoto::select('fotoURL')->where('idPand', '=', $pandId)->get();
        $path = public_path() . '/images/';
        foreach ($pandFotos as $foto) {
            dump(\Illuminate\Support\Facades\File::delete($path . $foto->fotoURL));
            dump(\Illuminate\Support\Facades\File::exists($path . $foto->fotoURL));
        }
        pandFoto::where('idPand', '=', $pandId)->delete();
        return back()->with('status', 'Pand is verwijdert');
    }

    public function deleteLike($pandId)
    {
        $intresse = new Interesse();
        $query = $intresse->where('idPand', '=', $pandId)->where('huurder_ID', '=', Session::get('huurder_ID'))->delete();
        return back()->with('status', 'Pand is nu verwijdert uit liked');
    }

    public function likePand($pandId)
    {
        $interesse = new Interesse();
        $query = $interesse->where("huurder_ID", "=", Session::get("huurder_ID"))->where("idPand", "=", $pandId)->count();
        if ($query == 0) {
            $interesse->idPand = $pandId;
            $interesse->huurder_ID = Session::get("huurder_ID");
            $interesse->heeftInteresse = 1;
            $interesse->save();
            return 'Pand is nu geliked';
        }
        return 'Dit pand is al geliked';
    }

    public function pandMaps()
    {
        return view('pages.standaard.maps');
    }
}
