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
                background-image: url("/img/websitemppl5.jpg");
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 35px;
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
        </style>
    </head>
    <body style="background-color: #354857">
        <div class="bg">
                <div class="top-right links" style="">
                    <a href="/">Back</a>
                </div>

<!--             <div class="content">
                <a href="{{ route('login') }}" class="round-button" style="margin-top: 528%">Log in</a>
            </div> -->
                <form method="POST" action="{{ route('login') }}">
                        <center>
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="margin-top: 422px" placeholder="Username">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </center>
                        <center>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </center>

                        <center>
                            <button type="submit" class="round-button" style="margin-top: 10px;">
                                {{ __('Login') }}
                            </button>
                        </center>
                        <div style="margin-top: -35px">
                        <center>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="color: white">
                                {{ __('Remember Me') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 180px; color: white;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </center>
                        </div>
                        <div style="margin-top: 50px">
                            <center>
                            <a style="font-size: 15px; color: white;"> Jika anda belum mendaftar silahkan daftar di </a>
                            <a href="{{ route('register') }}" style="font-size: 15px; color: #EFC113">sini</a>
                            </center>
                        </div>                   
                </form>
            </div>
    </body>
</html>
