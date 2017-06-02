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
    <div class="row">
        <div class="col-lg-5 col-sm-5 col-xs-5 text-center centerCol">
            <table class="table table-user-information">
                <h2>Profiel gegevens</h2>
                <tbody>
                <tr>
                    <td>Voornaam:</td>
                    <td>{{ $info["verhuurder_Voornaam"] }}</td>
                </tr>
                <tr>
                    <td>Achternaam:</td>
                    <td>{{ $info["verhuurder_Achternaam"] }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $info["verhuurder_Email"] }}</td>
                </tr>
                <tr>
                <tr>
                    <td>Telefoonnummer</td>
                    <td>{{ $info["ververhuurder_Telefoonnummer"] }}</td>
                </tr>
                <tr>
                    <td>Bedrijfsnaam</td>
                    <td>{{ $info["verhuurder_Bedrijfsnaam"] }}</td>
                </tr>
                <tr>
                    <td>Omschrijving</td>
                    <td>{{ $info["verhuurder_Omschrijving"] }}</td>
                </tr>
                </tbody>
            </table>
            <a href="/pand/toevoegen" class="btn btn-primary" role="button">Pand Toevoegen</a>
            <a href="/verhuurder/panden" class="btn btn-primary" role="button">Overzicht panden</a>
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