<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
<<<<<<< HEAD
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .bg{
                background-image: url("/img/websitemppl7.jpg");
                height: 100%;
                margin: 0;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 280px;
                top: 235px;
                font-family: blacksword; 
                text-decoration: none; 
                word-spacing: 40px; 
                font-size: 75px;
                color: #354857;
            }

            .top-left:hover {
                color: #AD9336;
            }

            .top-leftnew {
                position: absolute;
                left: 90px;
                top: 365px;
                text-decoration: none;  
                font-size: 17px;
                font-weight: bold;
                color: #354857;
            }

            .top-leftnew:hover {
                color: #AD9336;
            }

            .top-right {
                position: absolute;
                right: 330px;
                top: 400px;
                font-family: blacksword; 
                text-decoration: none; 
                word-spacing: 40px; 
                font-size: 75px;
                color: #354857;
            }

            .top-right:hover {
                color: #AD9336;
            }

            .logout {
                position: absolute;
                font-family: 'Nunito', sans-serif;
                font-weight: bold; 
                margin-top: 655px; 
                color: white; 
                right: 70px; 
                font-size: 18px;
                text-decoration: none;
            }

            .logout:hover {
                color: #EFC113;
            }

            .chat {
                position: absolute;
                font-family: 'Nunito', sans-serif;
                font-weight: bold; 
                margin-top: 586px; 
                color: white; 
                right: 65px; 
                font-size: 18px;
                text-decoration: none;
            }

            .chat:hover {
                color: #EFC113;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #EFC113;
                padding: 0 25px;
                margin-top: 60px; margin-right: 50px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;               
            }
            .links > a:hover {
                color: #f5f5f5;  
                font-size: 23px;           
            }


            .m-b-md {
                margin-bottom: 30px;
            }

            .round-button {
                display:block;
                width:60px;
                height:60px;
                line-height:50px;
                border: 4px solid #C2AE65;
                border-radius: 50%;
                color:#f5f5f5;
                text-align:center;
                text-decoration:none;
                background: #AD9336;
                box-shadow: 0 0 3px gray;
                font-size:12px;
                font-weight:bold;
            }

            .round-button:hover {
                background: #C2AE65;
                font-size: 13px;
            }

            .crop {
              position: absolute;
              top: 50%;
              height: 15%;
              width: auto;
              -webkit-transform: translate(-50%,-50%);
                  -ms-transform: translate(-50%,-50%);
                      transform: translate(-50%,-50%);
              border-radius: 50%;
            }

            input[type=text], select {
              width: 37.5%;
              height: 62px;
              padding: 12px 20px;
              margin: 1px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              color: white;
              background-image: linear-gradient(to right, #354857 , #19354B);
            }
            input[type=password], select {
              width: 37.5%;
              height: 62px;
              padding: 12px 20px;
              margin: 4px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              color: white;
              background-image: linear-gradient(to right, #354857 , #19354B);
            }

            @font-face {
              font-family: blacksword;
              src: url(/font/Blacksword.otf);
            }
        </style>
    </head>
    <body style="background-color: #354857">
        <div class="bg">
            <a href="/marketplace" class="top-left" style=" ">Market Place</a>
            <a href="/foodrecipe" class="top-right" style=" ">Food Recipe</a>
            <a href="" class="chat" style=" ">Post</a>
            <a href="" class="logout" style="">Logout</a>
            <img class="crop" src="/img/prof.jpg">
            <a href="" class="top-leftnew">Profile</a>
=======
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
>>>>>>> dynamic asset
        </div>
</div>

