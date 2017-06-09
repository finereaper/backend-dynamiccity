@extends('layout')

@section('header')
        <!DOCTYPE html>
<html>

<head>
    <!-- Project CSS -->
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/main.css">
    <!-- Bootstrap -->
    <link integrity="" rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link integrity="" rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="/public/assets/liquidslider-master/css/liquid-slider.css">
    <link rel="stylesheet" href="/public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
     <!--favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="../public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/manifest.json">
    <link rel="mask-icon" href="/public/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registreren - Dynamic City</title>
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <main>
        <section id="introSection">
            <div class="container" style="padding: 50px 0px;">
                <div id="introBlock"
                     class="registerBlock col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <h2 id="loginHeader">Maak een account</h2>
                    <form id="signupForm" action="registeren" method="post">
                        {{ csrf_field() }}
                        <p class="regLabel">Voornaam</p> <input class="smallInput" type="text" name="gebruikerVoornaam"
                                                                required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerVoornaam')}}">
                        <p class="regLabel">Achternaam</p> <input class="smallInput" type="text"
                                                                  name="gebruikerAchternaam" required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerAchternaam')}}">
                        <p class="regLabel">E-mail adres</p> <input class="smallInput" type="email"
                                                                    name="gebruikerEmail" required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerEmail')}}">
                        <p class="regLabel">Geboortedatum</p> <input class="smallInput" type="date"
                                                                     name="gebruikerGeboortedatum" required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerGeboortedatum')}}">
                        <p class="regLabel">Bedrijfsnaam</p> <input class="smallInput" type="text"
                                                                    name="gebruikerBedrijfsnaam" value="{{ \Illuminate\Support\Facades\Input::old('gebruikerBedrijfsnaam')}}">
                        <p class="regLabel">Telefoonnummer</p> <input class="smallInput" type="text"
                                                                      name="gebruikerTelefoonnummer" required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerTelefoonnummer')}}">
                        <p class="regLabel">Postcode</p> <input class="smallInput" type="text" name="gebruikerPostcode"
                                                                required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerPostcode')}}">
                        <p class="regLabel">Productgroep</p> <select class="smallInput" name="gebruikerProductgroep"
                                                                     required value="{{ \Illuminate\Support\Facades\Input::old('gebruikerProductgroep')}}">
                            <option value="Kies een productgroep" disabled selected>Kies een productgroep</option>
                            <option value="ICT">ICT</option>
                            <option value="Sokken">Sokken</option>
                            <option value="Overig">Overig</option>
                        </select>
                        <p class="regLabel">Wachtwoord</p> <input class="smallInput" type="password"
                                                                  name="gebruikerWachtwoord1" required>
                        <p class="regLabel">Herhaal</p> <input class="smallInput" type="password"
                                                                  name="gebruikerWachtwoord2" required>
                        <input class="button" type="submit" value="Registreren" name="Registreren">
                    </form>
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
                <script src="public/assets/liquidslider-master/js/jquery.liquid-slider.min.js"></script>
                <script type="text/javascript" src="/public/assets/jquery-validation-v1.16/lib/jquery.js"></script>
                <script type="text/javascript" src="/public/assets/jquery-validation-v1.16/dist/jquery.validate.js"></script>
                <script type="text/javascript" src="/public/assets/jquery-validation-v1.16/dist/additional-methods.js"></script>
		@include('analytics')
		        <script src="/public/js/main.js"></script>
                <script src="/public/assets/js/schnitzelMenu.js"></script>
                <script>
                    /*$.validator.setDefaults({
                     submitHandler: function() {
                     alert("submitted!");
                     }
                     });*/

                    $().ready(function() {
                        // validate signup form on keyup and submit
                        $("#signupForm").validate({
                            rules: {
                                gebruikerVoornaam: "required",
                                gebruikerAchternaam: "required",
                                /*username: {
                                 required: true,
                                 minlength: 2
                                 },*/
                                gebruikerTelefoonnummer: {
                                    required: true,
                                    number: true,
                                    minlength: 10
                                },
                                gebruikerWachtwoord1: {
                                    required: true,
                                    minlength: 8
                                },
                                gebruikerWachtwoord2: {
                                    required: true,
                                    minlength: 8,
                                    equalTo: "#gebruikerWachtwoord1"
                                },
                                gebruikerEmail: {
                                    required: true,
                                    email: true
                                },
                                gebruikerPostcode: "required",
                            },
                            messages: {
                                gebruikerVoornaam: "Vul uw voornaam in",
                                gebruikerAchternaam: "Vul uw achternaam in",
                                gebruikerTelefoonnummer: {
                                    required: "Vul alstublieft een wachtwoord in",
                                    number: "Uw telefoonnummer mag alleen maar uit cijfers bestaan",
                                    minlength: "Uw telefoonnummer moet 10 tekens langs zijn"
                                },
                                gebruikerWachtwoord1: {
                                    required: "Vul alstublieft een wachtwoord in",
                                    minlength: "Uw wachtwoord moet 8 karakters lang zijn"
                                },
                                gebruikerWachtwoord2: {
                                    required: "Vul alstublieft een wachtwoord in",
                                    minlength: "Uw wachtwoord moet 8 karakters lang zijn",
                                    equalTo: "Vul het wachtwoord exact het zelfde in"
                                },
                                gebruikerEmail: "Vul een geldig email adres in",
                                gebruikerPostcode: "Vul uw postcode in",
                            }
                        });
                    });
                </script>
                <script>
                    $('#main-slider').liquidSlider();
                </script>
            </div>
        </div>
    </footer>
</body>
</html>
@endsection