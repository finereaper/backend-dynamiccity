<?php

namespace App\Http\Controllers;

use App\Pand;
use Illuminate\Http\Request;

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
}
