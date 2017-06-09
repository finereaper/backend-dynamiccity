@extends('layout')

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
    <title>Over Ons - Dynamic City</title>
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
        <section class="sectionMargin overPreview">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <h2>Over Dynamic City</h2>
                        <p>Wij zijn Henri, Marijn, Rens, Robbin en Tim. Samen zijn wij Dynamic-City. Bent u opzoek naar een tijdelijk winkelpand om uw innovatieve product te verkopen? Dan bent U bij ons aan het juiste adres!</p>
                        <p>Door onze samenwerking met gemeentes verhuren wij tijdelijk winkelpanden voor een lagere prijs, ook kunt u opzoek gaan naar een huurpartner om samen een pand te delen.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sectionMargin">
            <div class="container">
                <div class="row equal">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <figure><img src="/public/assets/images/Robbin.png"></figure>
                        <ul class="persoonlijkeLijst">
                            <li><h3>Robbin van Tankeren</h3></li>
                            <li>Ik ben Robbin, 22 jaar en afkomstig uit Broekhuizenvorst. Ik ben graag bezig met design en webdevelopment.</li>
                            <li>Ik hou van gamen en kijk graag naar voetbal. Daarnaast heb ik een passie voor alles wat met ICT & Media Design te maken heeft.</li>
                            <li>Als mede oprichter van Dynamic-City richt ik me op zowel het marketing gedeelte van ons product en de ontwikkeling daarvan.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <figure><img src="/public/assets/images/Tim.png"></figure>
                        <ul class="persoonlijkeLijst">
                            <li><h3>Tim Frakking</h3></li>
                            <li>Mijn naam is Tim een 23 jarige web developer afkomstig uit Venlo, mijn passie ligt vooral bij back-end development en het oplossen van problemen.</li>
                            <li>In mijn vrij tijd ben ik niet vies van een potje gamen en sinds kort houd ik mij ook bezig met fotografie.</li>
                            <li>Als mede oprichter van Dynamic-city richt ik mij vooral op het back-end gedeelte en SEO van ons product.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <figure><img src="/public/assets/images/Marijn.png"></figure>
                        <ul class="persoonlijkeLijst">
                            <li><h3>Marijn Donders</h3></li>
                            <li>Ik ben Marijn Donders, ik ben 22 jaar en ik kom uit Tilburg. Ik hou me graag bezig met database design, queries en front-end development.</li>
                            <li>In mijn vrije tijd ga ik graag touren in mijn auto, op zoek naar mooie plekjes om te fotograferen. Daarnaast brouw ik ook graag bier.</li>
                            <li>Als mede oprichter van Dynamic City richt ik mij op het ontwerpen van de database, het concept en front-end development.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <figure><img src="/public/assets/images/Rens.png"></figure>
                        <ul class="persoonlijkeLijst">
                            <li><h3>Rens Knoors</h3></li>
                            <li>Ik ben Rens Knoors, een 22 jarige student ICT & Media Design. Ik ben een all-arounder maar ik houd me het liefste bezig met grafisch ontwerp.</li>
                            <li>Buiten school besteed ik een groot deel van mijn tijd aan tekenen, wandelen, muziek luisteren, mijn android phone modificeren of experimenteren met webapplicaties. Daarnaast ben ik een film fanaticus en ben ik bijna wekelijks terug te vinden in de bioscoop. Vandaar ook mijn keuze voor ICT & Media Design, hier kan ik mijn creativiteit en technische kennis gebruiken in innovatieve projecten.</li>
                            <li>Binnen Dynamic City vul ik een rol als vormgever en front-end developer. </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <figure><img src="/public/assets/images/Henri.jpg"></figure>
                        <ul class="persoonlijkeLijst">
                            <li><h3>Henri van Winkoop</h3></li>
                            <li>Ik ben Henri van Winkoop, een 30 jarige student ICT & Media Design met een extra route in education. Ik leg graag mensen allerlei ICT gerelateerde dingen uit en ben geïnteresseerd in alle verschillende onderdelen van ICT & Media design.</li>
                            <li>Mijn hobbys bestaan uit muziek, drummen ,films ,series en af en toe een game.</li>
                            <li>Mijn functie binnen Dynamic City bestaat uit business, database design en communicatie.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="sectionMargin overPreview">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <h2>Voordelen voor huurders</h2>
                        <p>Met behulp van ons platform kun je samen met ons de stap zetten naar een tijdelijk winkelpand. Hierdoor kunt u uw product of dienst uittesten in een winkelpand, voor een beperkte tijd tegen een lage prijs. Daarbij is het mogelijk om een partner te vinden om samen met hem een pand te delen, waardoor de huurprijs voordeliger zal zijn.</p>
                    </div>
                    <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <h2>Voordelen voor verhuurders</h2>
                        <p>Door het aanbieden en verhuren van uw pand op ons platform, kunt u uw pand ( in delen ) beschikbaar stellen voor huurders. Op die manier kunt u tijdelijke inkomsten genereren en publiek trekken naar je pand, waardoor het interessanter zal worden voor huurders om het pand voor een lange tijd over te nemen.</p>
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