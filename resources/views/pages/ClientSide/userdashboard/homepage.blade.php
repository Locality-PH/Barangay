<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
</head>

<body style="margin: 0 0 169px;">
    <input type="hidden" id = "current_resident" data-id = {{ session("resident.id") }}>
    
    <header class="header-blue" style="padding-bottom: 0px;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="/barangay/home" style="font-size: 45px;font-family: bodoni mt;"><img src="{{ URL::to('images/logo.png') }}" style="resize: both;width: 80px;margin-right: 30px;">University of Rizal System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"></label></div>
                    </form>
                    <p class="navbar-text" style="margin-top: 15px;margin-right: 11px;color: white;font-size: 20px;"><i class="fa fa-user" style="margin-right: 5px;"></i>{{session("resident.firstname")}}</p><span class="navbar-text"> </span>
                    <div class="dropdown" style="font-size: 20px;"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: white;"><i class="fa fa-cog" style="margin-right: 5px;"></i>Settings</a>
                        <div class="dropdown-menu dropleft" style="resize: both;width: 80px;padding: 0px;"><a class="dropdown-item" href="/barangay/accountsetting" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Account Settings</a>
                            <a class="dropdown-item" href="/barangay/logout" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Log-out</a>
                        </div>
                    </div>
                    <div class="dropdown-menu dropleft" style="resize: both;width: 80px;padding: 0px;"><a class="dropdown-item" href="#" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Account Settingt</a></div>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <ul class="nav nav-tabs" style="margin-left: 20px;">
        <li class="nav-item"><a class="nav-link active" href="/barangay/home"><i class="fa fa-home" style="margin-right: 5px;"></i>Home</a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link " aria-expanded="false" data-toggle="dropdown" href="#"><i class="fa fa-server" style="margin-right: 5px;"></i>Services</a>
            <div class="dropdown-menu"><a class="dropdown-item" href="/barangay/schedule">Schedule</a><a class="dropdown-item" href="/barangay/blotter">Blotter</a><a class="dropdown-item" href="/barangay/certificate">Certificates</a></div>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">News</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Info</a></li>
    </ul>
    <div class="container" style="margin-top: 20px;align-items: center;margin-bottom: 70px;">
        <div class="row" style="align-items: center;">
            <div class="col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-size: cover;">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="{{ URL::to('images/Campus.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ URL::to('images/Campus.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ URL::to('images/Campus.jpg') }}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6">
                <p><br>VISION<br>The leading University in human resource development, knowledge and technology generation and environmental stewardship<br><br>MISSION<br>The University of Rizal System is committed to nurture and produce upright and competent graduates and empowered community through relevant and sustainable higher professional and technical instruction, research, extension and production services.<br><br></p>
            </div>
        </div>
    </div>
    <footer class="footer-clean" style="background-color: gray;position: absolute;left: 0;bottom: 0;height: 174px;width: 100%;overflow: hidden;margin-top: 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2017</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>