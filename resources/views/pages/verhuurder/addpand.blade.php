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
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-8 col-lg-8 text-center centerCol">
                <form class="form-horizontal" action="toevoegen" method="post" enctype="multipart/form-data">
                    <fieldset>
                    {{ csrf_field() }}


                    <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


                        <!-- Form Name -->
                        <legend>Pand toevoegen</legend>

                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandOppervlakte" class="control-label col-sm-2">Oppervlakte</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandOppervlakte" name="pandOppervlakte"
                                       placeholder="vul hier het aantal vierkante meters in" required=""
                                       type="number">

                            </div>
                        </div>
                        <!-- Textarea http://getbootstrap.com/css/#textarea -->
                        <div class="form-group">
                            <label class="control-label col-sm-2"
                                   for="pandOmschrijving">Omschrijving</label>
                            <div class="col-sm-10">
                                            <textarea class="form-control" id="pandOmschrijving" name="pandOmschrijving"
                                                      rows="2"
                                                      placeholder="Geef hier een korte beschrijving van het pand"
                                                      required=""></textarea>

                            </div>
                        </div>

                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandStraat" class="control-label col-sm-2">Straat</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandStraat" name="pandStraat"
                                       placeholder="Vul hier de straatnaam + nummer in van het pand"
                                       required="" type="text">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandPostcode" class="control-label col-sm-2">Postcode</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandPostcode" name="pandPostcode"
                                       placeholder="Vul hier de postcode in van het pand" required=""
                                       type="text">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandStad" class="control-label col-sm-2">Stad</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandStad" name="pandStad"
                                       placeholder="Vul hier de stad in waar het pand is gelegen"
                                       required="" type="text">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandPrijs" class="control-label col-sm-2">Prijs</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandPrijs" name="pandPrijs"
                                       placeholder="Vul hier de prijs in van het pand" required=""
                                       type="number">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandLigging" class="control-label col-sm-2">Ligging</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandLigging" name="pandLigging"
                                       placeholder="Vul hier de ligging in van het pand" required=""
                                       type="text">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandStatus" class="control-label col-sm-2">Status</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandStatus" name="pandStatus"
                                       placeholder="Vul hier de status in van het Pand" required=""
                                       type="text">

                            </div>
                        </div>
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandPlekken" class="control-label col-sm-2">Aantal Plekken</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pandPlekken" name="pandPlekken"
                                       placeholder="Vul hier het aantal plekken in van het pand" required=""
                                       type="text">

                            </div>
                        </div>

                        <!-- File Button http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="pandPhotos" class="control-label col-sm-2">Uploaden van photo's | Niet groter dan 2mb</label>
                            <div class="col-sm-10">
                                <input id="pandPhotos" name="pandPhotos[]" type="file" multiple>
                            </div>
                        </div>


                        <!-- Button http://getbootstrap.com/css/#buttons -->
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Toevoegen"></label>
                            <div class="text-center col-sm-10">
                                <button type="submit" id="Toevoegen" name="Toevoegen"
                                        class="btn btn-primary" aria-label="">Toevoegen
                                </button>

                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/js/google.js"></script>
</html>
@endsection