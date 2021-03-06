<!doctype html>
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="section section-signin">

            <div class="image-container">
                <div class="filter filter-color-black"  style="background-image: url('{{ url('/img/forest.jpg') }}')">
                    <div class="col-md-8 col-md-offset-1">
                        <div class="content">
                            <div class="title-area">
                                <h1 class="title-modern">Gaia</h1>
                                <h3>Premium Bootstrap Template</h3>
                            </div>

                            <h5 class="subtitle">First Feature</h5>
                            <p>Ultralight Prayer: Happy Easter! In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                            </p>
                            <h5 class="subtitle">Second Feature</h5>
                            <p>We no longer have to be scared of the truth I promise I will never let the people down. I want a better life for all!
                            </p>
                            <h5 class="subtitle">Third Feature</h5>
                            <p>WI have a dream. That dreams will actualize. Dreams will manifest. When companies doubt me they doubt us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 text-center">

                    <div class="title-area">
                        <h2>Welcome</h2>
                        <div class="separator separator-success">✻</div>
                    </div>

                    <label><h4 class="text-gray">Your email</h4></label>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="MichaelJordan@gmail.com" class="form-control form-control-plain">
                    </div>

                    <label><h4 class="text-gray">Your password</h4></label>
                    <div class="form-group">
                         <input type="password" name="password" value="" placeholder="&#x25CF;&#x25CF;&#x25CF;&#x25CF;" class="form-control form-control-plain">
                    </div>
                    <p class="text-gray">
                        By signing up you agree to<br>
                        <a href="signin.html">Terms of Use</a> and <a href="signin.html"> Privacy Policy</a>
                    </p>

                    <div class="footer">
                        <button class="btn btn-success btn-round btn-fill btn-wd">
                            Sign In
                        </button>
                        <a href="{{ route('home') }}" class="btn btn-success btn-round btn-fill btn-wd">
                            Go Back
                        </a>
                        <p class="text-gray info">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
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
