<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body style="background-color: #354857">
        <div class="bg" style="background-image: url({{url('/img/websitemppl7.jpg)')}}">
            <a href="{{ url('marketplace') }}" class="top-left" style=" ">Market Place</a>
            <a href="{{ url('foodrecipe') }}" class="top-right" style=" ">Food Recipe</a>
            <a href="" class="chat" style=" ">Post</a>
            <a href="" class="logout" style="">Logout</a>
            <img class="crop" src="/img/prof.jpg">
            <a href="{{ url('profile') }}" class="top-leftnew">Profile</a>
        </div>
</div>

