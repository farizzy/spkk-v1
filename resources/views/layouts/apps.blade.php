<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {!!Html::style('../resources/assets/css/jquery.dataTables.css')!!}
    {!!Html::script('../resources/assets/js/jquery-3.2.1.js')!!}
    {!!Html::script('../resources/assets/js/jquery.dataTables.js')!!} 

    <style>
        body {
            font-family: 'Lato';
            background: url("banner.jpg");
            background: url("logo.png");
            background: #000000;
            background-repeat:no-repeat;
            background-size:cover;
        }

        #banner {
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            width: 100%;
            height: 72px;
            z-index: -1;
        }

        #banner2 {
            position: absolute;
            top: 0px;
            left: 100px;
            right: 0px;
            z-index: -1;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .judul {
            position: fixed;
              top: 50%;
              left: 50%;
              /* bring your own prefixes */
              transform: translate(-50%, -50%);
        }

        /* navbar */
        .navbar-default {
            background-color: rgb(255, 204, 0);
            border-color: black;
        }
        /* Title */
        .navbar-default .navbar-brand {
            color: rgb(0, 0, 0);
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #5E5E5E;
        }
        /* Link */
        .navbar-default .navbar-nav > li > a {
            color: rgb(0, 0, 0);
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: rgb(255, 255, 255);
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: rgb(255, 255, 255);
            background-color: #E7E7E7;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
            color: rgb(255, 255, 255);
            background-color: #D5D5D5;
        }
        /* Caret */
        .navbar-default .navbar-nav > .dropdown > a .caret {
            border-top-color: rgb(0, 0, 0);
            border-bottom-color: rgb(0, 0, 0);
        }
        .navbar-default .navbar-nav > .dropdown > a:hover .caret,
        .navbar-default .navbar-nav > .dropdown > a:focus .caret {
            border-top-color: rgb(255, 255, 255);
            border-bottom-color: rgb(255, 255, 255);
        }
        .navbar-default .navbar-nav > .open > a .caret,
        .navbar-default .navbar-nav > .open > a:hover .caret,
        .navbar-default .navbar-nav > .open > a:focus .caret {
            border-top-color: rgb(255, 255, 255);
            border-bottom-color: rgb(255, 255, 255);
        }
        /* Mobile version */
        .navbar-default .navbar-toggle {
            border-color: #DDD;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #DDD;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: #CCC;
        }
        @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: rgb(0, 0, 0);
            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                color: rgb(255, 255, 255);
            }
        }
    </style>
</head>
{{ HTML::image('banner.jpg', 'banner', array('id' => 'banner')) }}
{{ HTML::image('logo.png', 'banner', array('id' => 'banner2')) }}

<body id="app-layout" style="padding: 72px 0 0 0;">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/dashboard') }}" style="color:#9900ff;">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/guest_lk') }}">Kehilangan</a></li>
                        <li><a href="{{ url('/guest_pk') }}">Penemuan</a></li>
                    @else

                    @endif                
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#9900ff;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out" style="color:#9900ff;"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
