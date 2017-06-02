@extends('layout')

@section('header')
        <!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Dynamic-city</title>
</head>
<body>
<article id="menu">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container text-center">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Dynamic-city" src="...">
                </a>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Zoek een stad in de buurt">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</article>
@endsection

@section('main')
    <div class="container">
        <div class="well well-sm">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        @for ($i = 0; $i < count($huurAfspraaken); $i++)
            <div id="products">
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">{{ $panden[$i]["attributes"]["straat"]}}
                                / {{ $panden[$i]["attributes"]["stad"]}}
                                / {{ $panden[$i]["attributes"]["postcode"]}} </h4>
                            <label>Huurder</label>
                            <p class="group inner list-group-item-text">{{ $huurders[$i]["attributes"]["huurder_Voornaam"] }} {{ $huurders[$i]["attributes"]["huurder_Achternaam"]  }}</p>
                            <label>Start en Eind datum</label>
                            <p class="group inner list-group-item-text">{{ $huurAfspraaken[$i]->startDatum }}
                                || {{ $huurAfspraaken[$i]->eindDatum }}</p>
                            <label>Aantal plekken</label>
                            <p class="group inner list-group-item-text">{{ $huurAfspraaken[$i]->aantalPlekken}}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-5">
                                    <label>Prijs</label>
                                    <p class="lead">&euro;{{ $huurAfspraaken[$i]->prijs}}</p>
                                </div>
                                <div class="col-xs-12 col-md-7">
                                    @if($huurAfspraaken[$i]->geaccepteerd == 0)
                                        <a class="btn btn-success btn-sm"
                                           href="/verhuurder/accepteer/huurafspraak/{{$huurAfspraaken[$i]->huurder_ID}}/{{$huurAfspraaken[$i]->idPand}}"><i
                                                    class="fa fa-check"
                                                    aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                           href="/verhuurder/afwijzen/huurafspraak/{{$huurAfspraaken[$i]->huurder_ID}}/{{$huurAfspraaken[$i]->idPand}}"><i
                                                    class="fa fa-times" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    @else
                                        <h4>Huurafspraak is al Geaccepteerd</h4>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection


@section('footer')
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
</html>
@endsection