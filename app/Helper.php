<?php

use App\pandFoto;
use App\Huurder;
use \App\Verhuurder;

function getCor($address, $city)
{
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?address=$address+$city&sensor=false";
    $ch = curl_init();
    $options = array(
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL            => $url,
        CURLOPT_HEADER         => false,
    );

    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
    if (!$response) {
        return false;
    }
    $response = json_decode($response);
    if ($response->status !== 'OK') {
        return false;
    }
    $lat  = $response->results[0]->geometry->location->lat;
    $long = $response->results[0]->geometry->location->lng;
    $array= [
        'lat' => $lat,
        'lon' => $long
    ];
    return $array;
}

function getFirstpicture($pandId)
{
    $pandFoto = new pandFoto();
    $allFoto = $pandFoto->where('idPand', '=', $pandId)->get();
    return $allFoto[0]["fotoURL"];
}

function getSecondpicture($pandId)
{
    $pandFoto = new pandFoto();
    $allFoto = $pandFoto->where('idPand', '=', $pandId)->get();
    return $allFoto[1]["fotoURL"];
}

function emailExist($email)
{
    if(Huurder::where('huurder_Email', '=',$email)->exists() || Verhuurder::where('verhuurder_Email', '=', $email)->exists())
    {
        return true;
    }
    return false;
}