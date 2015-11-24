<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if(Session::get('locale') == "ar")
            {{ HTML::style('css/ar.css') }}
        @else
            {{ HTML::style('bootstrap/css/bootstrap.css') }}
        @endif
        {{ HTML::style('css/main.css') }}
        {{ HTML::script('js/functions.js') }}
    </head>
    <body>
<div class="container">
    <div class="row">
    	<div class="col-lg-3 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-5  ">@include('layout.include.navigation') </div>
        <div class="clearfix col-lg-3 col-md-3 col-sm-3"></div>
    </div>
