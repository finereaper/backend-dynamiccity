@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="../public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link integrity="" rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link integrity="" rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="../public/assets/liquidslider-master/css/liquid-slider.css">
    <link rel="stylesheet" href="../public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/favicon/favicon-16x16.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Zoeken - Dynamic City</title>
</head>

<body>

<!-- Header -->
<header id="headerOpmaak">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{route('index')}}"><img id="headerLogo" src="../public/assets/images/chameleon-blue-txt.png"
                                                  alt="Dynamic City Logo"></a>
            </div>
            <nav id="headerNav" class="col-md-9 col-sm-9 col-xs-12">
                <ul>
                    <li><a href="{{route('allePanden')}}">Ruimtes</a></li>
                    <li><a href="{{route('verhuurderRegisteren')}}">Word Verhuurder</a></li>
                    <li><a href="{{ route('huurderRegisteren') }}">Aanmelden</a></li>
                    <li><a href="{{ route('huurderInloggen') }}">
                        <button id="loginButton">Inloggen</button>
                    </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@endsection

@section('main')
    <main>
        <section id="introSection">
            <div class="container" style="padding: 50px 0px;">
                <div id="pandZoekBlok"
                     class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <h1>Start je zoektocht!</h1>
                    <form id="searchForm" action="/panden/zoek" method="post">
                        {{ csrf_field() }}
                        <input class="zoekPlaats" type="text" name="gebruikerStad" placeholder="Waar wil je zoeken?" required>
                        <input class="zoekButton" type="submit" value="Zoek!">
                    </form>
                </div>
            </div>
        </section>
        <section class="sectionMargin">
            <div class="pandOverzicht container">
                @if(session('status'))
                    <h2 class="text-center">{{session('status')}}</h2>
                @endif
                <h2 class="text-center">Populairste ruimtes</h2>
                <div class="row">
                    @foreach($panden as $pand)
                        <section class="pandPreviewblok col-md-4 col-sm-6 col-xs-12">
                            <img src="/public/images/{{ getFirstpicture($pand['attributes']['idPand']) }}">
                            <ul>
                                <li>{{ $pand['attributes']["straat"] }}</li>
                                <li class="subTitle">{{ $pand['attributes']["stad"] }}</li>
                                <li>{{ $pand['attributes']["omschrijving"] }}</li>
                                <li><a href="/pand/{{ $pand['attributes']['idPand']  }}/info">Lees meer <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </section>
                    @endforeach
                </div>
                <div class="text-center row">
                    <a href="/map"><button type="button">Bekijk meer</button></a>
                </div>
            </div>
        </section>
    </main>
    </div>
@endsection

@section('footer')
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@include('analytics')
<script src="../public/js/main.js"></script>
</html>
@endsection