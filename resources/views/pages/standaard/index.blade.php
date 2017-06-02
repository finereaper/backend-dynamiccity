﻿@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" integrity="" href="public/assets/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" integrity="" href="public/assets/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="public/assets/liquidslider-master/css/liquid-slider.css">
    <link rel="stylesheet" href="public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dynamic City</title>
    <meta charset="UTF-8">
</head>

<body>

<!-- Header -->
<header id="headerOpmaak">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{route('index')}}"><img id="headerLogo" src="public/assets/images/chameleon-blue-txt.png" alt="Dynamic City Logo"></a>
            </div>
            <nav id="headerNav" class="col-md-9 col-sm-9 col-xs-12">
               @include('menu')
        </div>
    </div>
</header>
@endsection

@section('main')
    <main>
        <section id="introSection">
            <div class="container" style="padding: 50px 0px;">
                <div id="introBlock" class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <span class="subTitle">Zet samen met ons</span>
                    <h1>De stap naar een eigen pand</h1>
                    <a href="/info"><button type="button">Lees meer</button></a>
                </div>
            </div>
        </section>
        <section class="sectionMargin">
            <div class="container">
                <div class="row">
                    <div class="padding-bottom-25 col-md-5 col-sm-8 col-xs-12">
                        <span class="subTitle">Bent u een huurder?</span>
                        <h2>Wat kunnen wij voor u betekenen?</h2>
                        <ul id="USPlist">
                            <li><i class="fa fa-check" aria-hidden="true"></i> <span>Zet samen met ons de stap naar een winkelpand</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <span>Deel uw pand met andere</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <span>Probeer je product of dienst uit</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <span>Vergroot uw doelgroep</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <span>Samenwerking met gemeentes</span></li>
                        </ul>
                        <a href="/info"><button type="button">Lees meer</button></a>
                    </div>
                    <figure class="img-width-100 align-right col-md-offset-1 col-md-6 col-sm-8 col-xs-12"><img src="public/assets/images/afbeeldingpand.png"></figure>
                </div>
                <div class="row">
                    <ul id="pandenStats">
                        <li>
                            <ul>
                                <li>32</li>
                                <li>Winkelruimte's vanaf 1 maand</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>432</li>
                                <li>Winkelruimte's tot 1 maand</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>12</li>
                                <li>Panden van 1 tot 3 dagen</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>64</li>
                                <li>Shop in shops per m2</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="liquid-slider" id="main-slider">
            <div class="previewSlider">
                <div class="container">
                    <h3 class="title">Maasboulevard</h3>
                    <p>Het winkelaanbod in de binnenstad van Venlo is sinds 2010 flink uitgebreid met de realisering van de Maasboulevard.</p>
                    <p>De grote stedenbouwkundige ingrepen sluiten zeer mooi aan op de historische binnenstad. U loopt moeiteloos over van bestaand naar nieuw. In de nieuwbouw zijn naast een hoofdwinkelstraat ook kleine zijstraten die aansluiten op de historische Jodenstraat van Venlo</p>
                    <p>Naast de zeer grote filialen van de Jumbo en de Saturn zijn er ook middelgrote en kleinere winkels zoals onder andere Ecco, Mexx, H&M, Bakker Bart, S.Oliver, The Sting en Aktie Sport.</p>
                </div>
            </div>
            <div class="previewSlider">
                <div class="container">
                    <h3 class="title">Binnenstad</h3>
                    <p>Winkelen was en is leuk in Venlo! Zeker in de historische oude binnenstad. Leuke speciaalzaken vind je met name in Klaasstraat, Gasthuisstraat, Parade en Jodenstraat. Grotere ketens zijn voornamelijk gevestigd op de Lomstraat, de Vleesstraat en de Maasboulevard.</p>
                    <p>Al vele jaren is de omgeving Nolensplein en Gelderse Poort het domein van de Duitse koopjesjagers. Maar ook dát is een ervaring om er eens doorheen te wandelen! Strijk neer in een van de horecagelegenheden en op de terrassen om bij te komen.</p>
                    <p>Met de opening van de Maasboulevard is de binnenstad van Venlo 25 splinternieuwe winkels rijker geworden. Vandaar de terechte titel 'beste binnenstad 2013-2015'.</p>
                </div>
            </div>
        </section>
        <section class="sectionMargin">
            <div class="container">
                <h2 class="text-center">Panden</h2>
                <div class="row">
                    @foreach($panden as $pand)
                    <section class="pandPreviewblok col-md-4 col-sm-6 col-xs-12">
                        <img src="public/images/{{ getFirstpicture($pand['attributes']['idPand']) }}">
                        <ul>
                            <li>{{ $pand['attributes']['straat']}}</li>
                            <li class="subTitle">{{ $pand['attributes']['stad'] }}</li>
                            <li>{{ substr($pand['attributes']['omschrijving'],0,50) }}...</li>
                            <li><a class="info" href="{{ route('pandInfo', ['pandId' => $pand['attributes']['idPand']]) }}">Lees meer <i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                    </section>
                    @endforeach
                </div>
                <div class="text-center row">
                    <a href="{{ route('allePanden') }}"><button type="button">Bekijk meer</button></a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                <h2 class="text-center">Dynamic-city</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center"><ul class="footerMenu">
                        <li>Contact</li>
                        <li><i class="adres fa fa-home"></i>Rachelsmolen 1</li>
                        <li><i class="adres"></i>5612 MA, Eindhoven</li>
                        <li><i class="adres fa fa-envelope"></i>projectobbi@gmail.com</li>
                    </ul></div>
                    <div class="mobileFooterPadding col-md-4 col-sm-4 col-xs-12 text-center">
                        <ul class="footerMenu">
                            <li>Social media</li>
                            <li><i class="social fa fa-facebook"></i></li>
                            <li><i class="social fa fa-twitter"></i></li>
                            <li><i class="social fa fa-linkedin"></i></li>
                            <li><i class="social fa fa-pinterest"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center"><ul class="footerMenu">
                        <li>Menu</li>
                        <li>Ruimtes</li>
                        <li>Word Verhuurder</li>
                        <li>Aanmelden</li>
                        <li>Inloggen</li>
                    </ul></div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
                <script src="public/assets/liquidslider-master/js/jquery.liquid-slider.min.js"></script>
		@include('analytics')
		<script src="/public/js/main.js"></script>
                <script src="/public/assets/js/schnitzelMenu.js"></script>
                <script>
                    $('#main-slider').liquidSlider();

                </script>
            </div>
        </div>
    </footer>
</body>

</html>
@endsection