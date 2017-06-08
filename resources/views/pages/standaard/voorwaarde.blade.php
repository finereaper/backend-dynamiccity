@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link integrity="" rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link integrity="" rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
    <title>Algemene Voorwaarden - Dynamic City</title>
</head>

<body>

<!-- Header -->
<header id="headerOpmaak">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{route('index')}}"><img id="headerLogo" src="/public/assets/images/chameleon-blue-txt.svg"
                                                  alt="Dynamic City Logo"></a>
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
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h2>Algemene Voorwaarden</h2></li>
                            <li>
                                <i>Algemene Voorwaarden ("Voorwaarden") <br>
                                    Laatst bijgewerkt: 6 Juni, 2017 </i> <br><br>

                                Lees deze Algemene Voorwaarden ("Algemene Voorwaarden", "Voorwaarden") zorgvuldig door voordat u gebruik maakt van de website dynamic-city.nl (de "Dienst", "Diensten") beheerd door Dynamic City ("ons", "wij", of "onze"). <br><br>

                                Uw toegang tot and het gebruik van de Dienst is afhankelijk van uw acceptatie en naleving van deze voorwaarden. Deze voorwaarden zijn van toepassing op alle bezoekers, gebruikers en anderen die toegang krijgen of gebruik maken van de Dienst. <br><br>

                                Door gebruik te maken van onze Diensten gaat u akkoord met deze voorwaarden te zijn gebonden. Als u het niet eens bent met een deel van de voorwaarden, dan mag u geen gebruik van maken onze Diensten.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Accounts</h3></li>
                            <li>
                                Wanneer u een account bij ons maakt, moet u ons altijd informatie verstrekken die accuraat, compleet en actueel is. Als u dit niet doet, vormt dit een inbreuk op de Algemene Voorwaarden, die ertoe kunnen leiden dat uw account onmiddellijk wordt gedeactiveerd op onze Dienst. <br><br>

                                U bent verantwoordelijk voor het waarborgen van het wachtwoord dat u gebruikt om toegang te krijgen tot onze Dienst en voor iedere activiteit of actie waarmee u het wachtwoord gebruikt, ongeacht of uw wachtwoord bij onze Dienst of een dienst van derden gebruikt wordt. <br><br>

                                U gaat ermee akkoord uw wachtwoord niet aan derden te onthullen. U moet ons onmiddellijk op de hoogte stellen als u zich bewust bent van iedere vorm van schending van veiligheid of onbevoegd gebruik van uw account.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Links Naar Andere Websites</h3></li>
                            <li>
                                Onze Dienst kan links bevatten naar websites van derden of diensten die niet eigendom zijn van of gecontroleerd worden door Dynamic City. <br><br>

                                Dynamic City heeft geen controle over en aanvaardt geen verantwoordelijkheid voor de inhoud, het privacybeleid of de praktijken van websites van derden of diensten van derden. U erkent verder dat Dynamic City noch direct, noch indirect aansprakelijk is voor eventuele schade of verlies die wordt veroorzaakt door of in verband met het gebruik of vertrouwen op dergelijke inhoud, goederen of diensten die beschikbaar zijn op of via dergelijke websites of diensten. <br><br>

                                Wij raden u ten sterkste aan de voorwaarden en het privacybeleid te lezen van websites of diensten van derden die u bezoekt.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Beëindiging</h3></li>
                            <li>
                                Wij kunnen uw toegang tot onze Dienst onmiddellijk, zonder voorafgaande kennisgeving of aansprakelijkheid, om welke reden dan ook beëindigen of opschorten indien u de voorwaarden schendt. <br><br>

                                Bij beëindiging zal uw recht om de Dienst te gebruiken onmiddellijk ophouden. Als u uw account wilt beëindigen, kunt u de Dienst gewoon stoppen te gebruiken.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Wetgeving</h3></li>
                            <li>
                                Deze Voorwaarden worden geregeld en geïnterpreteerd in overeenstemming met de wetten van Nederland, zonder inachtneming van de conflicten van wettelijke bepalingen. <br><br>

                                Ons nalaten van het recht of de bepaling van deze Voorwaarden wordt niet beschouwd als een afstand van die rechten.Indien een bepaling van deze Voorwaarden onjuist of onuitvoerbaar is door een rechtbank, blijven de overige bepalingen van deze Voorwaarden van kracht. Deze Voorwaarden vormen de volledige overeenkomst tussen ons betreffende onze Dienst, en hebben voorrang op en vervangen eventuele eerdere afspraken die wij onder ons betreffende de Dienst.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Veranderingen Aan Algemene Voorwaarden</h3></li>
                            <li>
                                Wij behouden ons het recht om, naar eigen goeddunken, deze Voorwaarden te allen tijde te wijzigen of te vervangen. Als een herziening grote veranderingen bevat, zullen we proberen om u tenminste 30 dagen van tevoren kennis te geven voordat er nieuwe voorwaarden worden ingevoerd. Wat wij zien als een grote verandering wordt bepaald naar ons eigen oordeel. <br><br>

                                By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service. <br><br>

                                Door door te gaan met toegang te verschaffen tot of gebruik maken van onze Dienst nadat deze wijzigingen van kracht zijn, gaat u akkoord met de herziene voorwaarden. Als u niet akkoord gaat met de nieuwe voorwaarden, stop dan met gebruik te maken van onze Dienst.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                        <ul class="infoList">
                            <li><h3>Contacteer Ons</h3></li>
                            <li>
                                Mocht u enige vragen hebben over deze Voorwaarden, contacteer ons gerust.
                            </li>
                        </ul>
                    </div>
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
                        </ul>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
                <script src="/public/assets/liquidslider-master/js/jquery.liquid-slider.min.js"></script>
                <script src="/public/js/main.js"></script>
                @include('analytics')
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