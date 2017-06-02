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
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-8 col-lg-8 text-center centerCol">
                <form class="form-horizontal" action="" method="post">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend>Reden van afwijzen</legend>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gebruikerReden"></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="gebruikerReden" name="gebruikerReden" rows="1" placeholder="Vul hier de reden in van het afwijzen van het verzoek."
                                          required=""></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gebruikerSubmit"></label>
                            <div class="text-center col-sm-10">
                                <button type="submit" id="gebruikerSubmit" name="gebruikerSubmit"
                                        class="btn btn-primary" aria-label="">Vertuur
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
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBedVnTXvMSMhIl6cKmuKElCTbo2oQ7rpI&libraries=places&language=nl&region=NL"></script>
<script src="/js/google.js"></script>
</html>
@endsection