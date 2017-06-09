﻿@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" integrity="" href="/public/assets/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" integrity="" href="/public/assets/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="/public/assets/liquidslider-master/css/liquid-slider.css">
    <link rel="stylesheet" href="/public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/manifest.json">
    <link rel="mask-icon" href="/public/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dynamic City - Meer Info</title>
    <meta charset="UTF-8">
</head>

<body>

<!-- Header -->
<header id="headerOpmaak">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{route('index')}}"><img id="headerLogo" src="/public/assets/images/chameleon-blue-txt.svg" alt="Dynamic City Logo"></a>
            </div>
            <nav id="headerNav" class="col-md-9 col-sm-9 col-xs-12">
             @include('menu')
        </div>
    </div>
</header>
@endsection

@section('main')
    <main>
        <section class="sectionMargin">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12"><ul class="infoList"><li><h4>Voordelen voor huurders</h4></li>
                            <li>Met behulp van ons platform kun je samen met ons de stap zetten naar een tijdelijk winkelpand. Hierdoor kunt u uw product of dienst uittesten in een winkelpand, voor een beperkte tijd tegen een lage prijs. Daarbij is het mogelijk om een partner te vinden om samen met hem een pand te delen, waardoor de huurprijs voordeliger zal zijn.</li></ul></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12"><ul class="infoList"><li><h4>Voordelen voor verhuurders</h4></li>
                            <li>Door het aanbieden en verhuren van uw pand op ons platform, kunt u uw pand ( in delen ) beschikbaar stellen voor huurders. Op die manier kunt u tijdelijke inkomsten genereren en publiek trekken naar je pand, waardoor het interessanter zal worden voor huurders om het pand voor een lange tijd over te nemen.</li></ul></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12"><ul class="infoList"><li><h4>Wie zijn wij?</h4></li>
                            <li>Wij zijn de Airbnb voor winkelpanden. Ons platform “Dynamic City” is een ontmoetingsplek voor potentiële huurders en verhuurders van winkelpanden. We willen startups en hobbyisten een kans geven hun diensten of producten aan te bieden in een Winkelomgeving. Tegelijk kunnen eigenaren van panden hun leegstaande pand aanbieden  voor een door hen zelf bepaalde tijd aan de potentiële huurders op het platform van Dynamic City.</li></ul></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12"><ul class="infoList"><li><h4>Waarom Dynamic City</h4></li>
                            <li>Waarom doet Dynamic City dit? Dynamic City is een project van studenten aan de Fontys hogeschool. We willen kansen creëren voor startende ondernemers om zo gemakkelijk mogelijk hun diensten of services uit te proberen in de markt. Tegelijkertijd willen we de gezelligheid terug krijgen in de stad. Sinds 2008 is er een groeiende winkelleegstand in Nederland, dit maakt winkelcentra saai en grimmig, Nederland gezellig maken is ons doel.</li></ul></div>
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
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <ul class="footerMenu">
                            <li>Contact</li>
                            <li><i class="adres fa fa-home"></i>Rachelsmolen 1</li>
                            <li><i class="adres"></i>5612 MA, Eindhoven</li>
                            <li><i class="adres fa fa-envelope"></i>projectobbi@gmail.com</li>
                        </ul>
                    </div>
                    <div class="mobileFooterPadding col-md-4 col-sm-4 col-xs-12 text-center">
                        <ul class="footerMenu">
                            <li>Social media</li>
                            <li><a href="https://www.facebook.com/DynamicCityNL" target="_blank"><i
                                            class="social fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/dynamic_cityNL" target="_blank"><i
                                            class="social fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/dynamic-city-aa08a7144/" target="_blank"><i
                                            class="social fa fa-linkedin"></i></a></li>
                            <li><a href="https://nl.pinterest.com/dynamiccity0274/" target="_blank"><i
                                            class="social fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <ul class="footerMenu">
                            <li>Menu</li>
                            <li><a href="http://dynamic-city.nl/panden/overzicht">Ruimtes</a></li>
                            <li><a href="http://dynamic-city.nl/verhuurder/registratie">Word verhuurder</a></li>
                            <li><a href="http://dynamic-city.nl/huurder/registratie">Aanmelden</a></li>
                            <li><a href="http://dynamic-city.nl/huurder/inloggen">Inloggen</a></li>
                            <li><a href="http://dynamic-city.nl/info">Info</a></li>
                            <li><a href="http://dynamic-city.nl/overons">Over ons</a></li>
                        </ul>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
                <script src="/public/assets/liquidslider-master/js/jquery.liquid-slider.min.js"></script>
                <script src="/public/js/google.js"></script>
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