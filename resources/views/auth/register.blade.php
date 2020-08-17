<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MinusculeAnt</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ url('/css/gaia.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/css/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <body>

    <div class="section section-white section-signup">
        <div class="static-image">
            <div class="image"
                style="background-image: url('{{ url('/img/forest-2179318_1920.jpg') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="text-white">Sign up</h2>

                        <div class="separator separator-success">✻</div>

                        <p class="description">No credit card required.</p>
                        <div class="form-group">
                            <input type="text" value="" placeholder="First Name" class="form-control form-control-plain">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" placeholder="Last Name" class="form-control form-control-plain">
                        </div>
                        <div class="form-group">
                            <input type="email" value="" placeholder="Email adress" class="form-control form-control-plain">
                        </div>
                        <div class="form-group">
                            <input type="password" value="" placeholder="Password" class="form-control form-control-plain">
                        </div>
                        <p>
                            By signing up you agree to
                            <a href="signup.html">
                                <span class="text-success">
                                    Terms of Service
                                </span>
                            </a> and
                            <a href="signup.html">
                                <span class="text-success" >
                                    Privacy Policy
                                </span>
                            </a>
                        </p>
                        <div class="button-signin">
                            <button class="btn btn-success btn-round btn-fill btn-wd">
                                Sign Up
                            </button>
                            <a href="{{ route('home') }}" class="btn btn-success btn-round btn-fill btn-wd">
                                Go Back
                            </a>
                        </div>
                        <p>
                            Or use an existing <a href="{{ route('login') }}" class="text-success">account</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!--   core js files    -->
<script src="{{ url('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ url('/js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ url('/js/gaia.js') }}"></script>

</html>

