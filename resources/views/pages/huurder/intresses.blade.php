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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="well well-sm">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        @foreach($panden as $pand)
            <div id="products">
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image"
                             src="../images/{{ getFirstpicture($pand[0]["attributes"]['idPand']) }}" alt=""/>
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">{{ $pand[0]["attributes"]['straat'] }}
                                / {{ $pand[0]["attributes"]['postcode'] }} / {{ $pand[0]["attributes"]['stad'] }}</h4>
                            <label>Omschrijving</label>
                            <p class="group inner list-group-item-text">{{ $pand[0]["attributes"]['omschrijving'] }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-5">
                                    <p class="lead">&euro;{{ $pand[0]["attributes"]['prijs'] }} per M<sup>2</sup></p>
                                </div>
                                <div class="col-xs-12 col-md-7">
                                    <a class="btn btn-danger btn-sm"
                                       href="/huurder/{{ $pand[0]["attributes"]['idPand'] }}/verwijder/intresse"><span
                                                class="fa-stack fa-sm">
  <i class="fa fa-heart fa-stack-1x"
     aria-hidden="true"></i>
  <i class="fa fa-ban fa-stack-2x"></i>
</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
</html>
@endsection
