<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .bg{
                background-image: url("/img/websitemppl8.jpg");
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
                left: 380px;
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
                transition: transform .2s;
                font-family: blacksword; 
                text-decoration: none; 
                word-spacing: 40px; 
                font-size: 75px;
                opacity: 0.7;
            }

            .top-right:hover {
                -ms-transform: scale(1.25); /* IE 9 */
                  -webkit-transform: scale(1.25); /* Safari 3-8 */
                  transform: scale(1.25); 
                opacity: 1.0;
                filter: alpha(opacity=100);
            }

            .top-center {
                position: absolute;
                left: 570px;
                top: 75px;
                font-family: blacksword; 
                text-decoration: none; 
                word-spacing: 40px; 
                font-size: 62px;
                color: #354857;
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
                width:80px;
                height:80px;
                line-height:80px;
                border: 4px solid #C2AE65;
                border-radius: 50%;
                color:#f5f5f5;
                text-align:center;
                text-decoration:none;
                background: #AD9336;
                box-shadow: 0 0 3px gray;
                font-size:18px;
                font-weight:bold;
            }

            .round-button:hover {
                background: #C2AE65;
                font-size: 20px;
            }

            .box-biru {
                display:block;
                width:110px;
                height:150px;
                line-height:80px;
                border-radius: 8%;
                color:#f5f5f5;
                text-align:center;
                text-decoration:none;
                background-image: linear-gradient(to right, #354857 , #19354B);
                box-shadow: 0 0 3px gray;
                font-size:18px;
                font-weight:bold;
            }

            .box-biru:hover {
                background: #C2AE65;
                font-size: 20px;
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
            .column {
              float: left;
              width: 33.33%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
        </style>
    </head>
    <body style="background-color: #354857">
        <div class="bg">
            <p class="top-center">Market Place</p>
            <a href="" class="chat" style=" ">Post</a>
            <a href="" class="logout" style="">Logout</a>
            <img class="crop" src="/img/prof.jpg">
            <a href="/profil" class="top-leftnew">Profile</a>
            <a href=""><img class='top-right' src="/img/appetaizer.png" style="width: auto; height: 20%; right: 64%; top: 40%;"></a>
            <a href=""><img class='top-right' src="/img/maincourse.png" style="width: auto; height: 20%; right: 43%; top: 40%;"></a>
            <a href=""><img class='top-right' src="/img/dessert.png" style="width: auto; height: 20%; right: 22%;
                top: 40%;"></a>
            <div class="flex-center">
                <a href="/home" class="round-button" style="margin-top: 538px; margin-right: 0px;">Back</a>
            </div>
        </div>
</div>

