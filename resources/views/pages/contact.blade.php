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

    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="{{ route('home') }}" class="navbar-brand">
                    MinusculeAnt  
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Share
                        </a>
                        <ul class="dropdown-menu dropdown-success">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

      
    <div class="wrapper">
        <div class="section section-contact-form">
            <div class="container">
                    <div class="title-area">
                        <h5 class="subtitle text-gray">Glad to Talk With You</h5>
                        <h2>Contact Us</h2>
                        <div class="separator separator-success">✻</div>
                        <p class="description">In this area you can write some interesting description about the projects that your team created. Don't forget to add some awesome images under this description, like the beautiful ones that we added.</p>
                    </div>

                <div class="social-buttons">
                    <button class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-instagram"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-google" ></i></button>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Full Name</label>
                                            <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control form-control-plain" placeholder="Here you can write your nice text" rows="8"></textarea>
                                        </div>
                                        <div>
                                            <div class="col-md-2 col-md-offset-5">
                                                <button type="button" class="btn btn-success btn-fill">
                                                    Contact Us
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- Footer -->
    
    <footer class="footer footer-color-black" data-color="black">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Company</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-facebook btn-simple">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-twitter btn-simple">
                    <i class="fa fa-twitter"></i>
                </a>
                    <a class="btn btn-social btn-pinterest btn-simple">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Minuscule Sim, made with love
            </div>
        </div>
    </footer>

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
