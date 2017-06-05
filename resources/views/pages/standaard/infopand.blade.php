@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="/public/assets/liquidslider-master/css/liquid-slider.css">
    <link rel="stylesheet" href="/public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/favicon/favicon-16x16.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pand info - Dynamic City</title>
    <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/manifest.json">
    <link rel="mask-icon" href="/public/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

<!-- Header -->
<header id="headerOpmaak">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{route('index')}}"><img id="headerLogo" src="../../public/assets/images/chameleon-blue-txt.png" alt="Dynamic City Logo"></a>
            </div>
            <nav id="headerNav" class="col-md-9 col-sm-9 col-xs-12">
             @include('menu')
        </div>
    </div>
</header>
@endsection

@section('main')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <main>
        <div class="pandBackground">
            <img src="/public/images/{{ getFirstpicture($pandInfo['idPand']) }}">
        </div>
        <section id="introSection" style="background-image: none !important;">
            <div class="container" style="padding: 50px 0px;">
                <div id="pandInfoBlok" class="col-md-offset-1 col-md-10 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <h1>{{ $pandInfo["straat"] }} - {{ $pandInfo["stad"] }}</h1>
                    <img src="/public/images/{{ getFirstpicture($pandInfo['idPand']) }}">
                    <h3>Omschrijving</h3>
                    <p>{{$pandInfo["omschrijving"]}}</p>
                    <h3>Ligging</h3>
                    <p>{{$pandInfo["ligging"]}}</p>
                    <h3>Status</h3>
                    <p>{{$pandInfo["status"]}}</p>
                    <h3>Aantal plekken</h3>
                    <p>{{$pandInfo["aantalPlekken"]}} plekken vrij</p>
                </div>
            </div>
        </section>
        <section class="sectionMargin">
            <div class="container">
                <div class="row">
                    <div class="padding-bottom-25 col-md-5 col-sm-8 col-xs-12">
                        <div id="vraagPopup">
                            <a href="#" class="cancel"><i class="fa fa-close"></i></a>
                            <h3>Stel een vraag</h3>
                            <form action="/pand/{{ $pandInfo["idPand"] }}/stelvraag" method="post">
                                {{ csrf_field() }}
                                <input type="email" placeholder="E-mailadres" name="gebruikerEmail">
                                <textarea id="vraagText" name="Vraag">
                                </textarea>
                                <input class="huurVraagButton" type="submit" value="Verstuur vraag">
                            </form>
                        </div>
                        <div id="cover"> </div>
                        <h2 class="pandInfoH2">Interesse? Maak dan snel een afspraak!</h2>
                        <form action="/pand/{{ $pandInfo["idPand"] }}/huurafspraak" method="post">
                            {{ csrf_field() }}
                            <label class="huurLabel">Start huurperiode</label>
                            <input class="huurDate" name="gebruikerStartdatum" type="date">
                            <label class="huurLabel">Eind huurperiode</label>
                            <input class="huurDate" name="gebruikerEinddatum" type="date">
                            <label class="huurLabel">Aantal plekken</label>
                            <input class="huurDate" name="gebruikerAantalplekken" type="number">
                            <input type="checkbox" id="checkbox2" class="css-checkbox" checked="checked" />
                            <label for="checkbox2" name="checkbox2_lbl" class="css-label lite-orange-check">Ik ga akkoord met de <a href="#">voorwaarden</a> van Dynamic City.</label>
                            <input class="huurButton" type="submit" value="Huur dit pand!">
                        </form>
                        <a href="#vraagPopup"><button class="huurVraagButton">Stel een vraag</button></a>
                    </div>
                    <figure class="align-right col-md-offset-1 col-md-6 col-sm-8 col-xs-12"><img class="img-responsive" src="/public/images/{{getSecondpicture($pandInfo['idPand'])}}"></figure>
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
                <script src="/public/assets/liquidslider-master/js/jquery.liquid-slider.min.js"></script>
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