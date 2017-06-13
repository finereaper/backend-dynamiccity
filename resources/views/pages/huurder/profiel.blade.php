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
    <main>
        <section class="profileSection omslag"></section>
        <section class="profileSection headline">
            <div class="container">
                <div class="row">
                    <div class="profilePic"></div>
                    <div class="buttonBar">
                        <span class="profileName">{{ $info["huurder_Voornaam"] }} {{ $info["huurder_Achternaam"] }}</span>
                        <span class="group">
                            <button><a href="javascript:void(0)"><i class="fa fa-envelope" aria-hidden="true"></i> Mail</a></button>
                            <button><a href="javascript:void(0)"><i class="fa fa-globe" aria-hidden="true"></i> Website</a></button>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="profileSection">
            <div class="container">
                <div class="row">
                    <div class="description">
                        <h3>Wie ben ik</h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>Info</h3>
                        <table>
                            <tr>
                                <td>Geboortedatum</td>
                                <td>{{ $info["huurder_Geboortedatum"] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $info["huurder_Email"] }}</td>
                            </tr>
                            <tr>
                                <td>Bedrijfsnaam</td>
                                <td>{{ $info["huurder_Bedrijfsnaam"] }}</td>
                            </tr>
                            <tr>
                                <td>Productgroep</td>
                                <td>{{ $info["huurder_Productgroep"] }}</td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td>{{ $info["huurder_Postcode"] }}</td>
                            </tr>
                            <tr>
                                <td>Telefoonnummer</td>
                                <td>0{{ $info["huurder_Telefoonnummer"] }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>Foto's producten</h3>
                        <table class="album">
                            <tr>
                                <td><img src="http://unsplash.it/200/200/"></td>
                                <td><img src="http://unsplash.it/200/200/"></td>
                                <td><img src="http://unsplash.it/200/200/"></td>
                                <td><img src="http://unsplash.it/200/200/"></td>
                                <td><img src="http://unsplash.it/200/200/"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="social">
                        <a href="javascript:void(0)"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                            <li><a href="http://dynamic-city.nl/overons">Over ons</a></li>
                        </ul>
                    </div>
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