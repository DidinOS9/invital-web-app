<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Invital - Dreamy Affairs</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="/" class="navbar-brand">
                        <h2 class="text-primary fw-bold mb-0">Dreamy<span class="text-dark">Affairs 
                            <br>Wedding </span> Organizer </h2>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/#home" class="nav-item nav-link">Home</a>
                            <a href="/#about" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="/#services" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="/decoration" class="dropdown-item">Decorations</a>
                                    <a href="/invital" class="dropdown-item">Invital</a>
                                    <a href="/entertaiment" class="dropdown-item">Entertaiment</a>
                                    <a href="/documentation" class="dropdown-item">Documentations</a>
                                    <a href="/catering" class="dropdown-item">Catering</a>
                                    <a href="/vahicle" class="dropdown-item">Wedding Vahicle</a>
                                </div>
                            </div>
                            <a href="/#team" class="nav-item nav-link">Team</a>
                            <a href="/#testimoni" class="nav-item nav-link">Testimonial</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=6285232092773&text=Hallo,%20Saya%20berencana%20untuk%20mengadakan%20pernikahan%20dan%20ingin%20memesan%20jasa%20Dreamy%20Affairs%20Wedding%20Organizer.%20Bisakah%20kita%20mendiskusikan%20detail%20lebih%20lanjut?" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    
        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4 text-primary">Invitation <span class="text-dark"> Digital</span></h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/#services">Services</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Invital</li>
                </ol>
                <div class="container-fluid team py-6" id='team'>
                    <div class="container">
                        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                            <h1 class="display-5 mb-5">Various kinds of digital invitations from me!</h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded">
                                    <img class="img-fluid rounded-top " src="{{ asset('frontend/img/inv-1.jpg') }}" alt="">
                                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                        <h4 class="text-primary">Natural Design</h4>
                                    </div>
                                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="https://ideainvitation.com/wahid-puji/?to=Ahli%20Surga+%26+Pasangan"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded">
                                    <img class="img-fluid rounded-top " src="{{ asset('frontend/img/inv-2.jpg') }}" alt="">
                                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                        <h4 class="text-primary">Urban Design</h4>
                                    </div>
                                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="https://temanhidup.com/ubai-intan//?to=Milaa%F0%9F%8C%BB"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team-item rounded">
                                    <img class="img-fluid rounded-top " src="{{ asset('frontend/img/inv-3.jpg') }}" alt="">
                                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                        <h4 class="text-primary">Sky Design</h4>
                                    </div>
                                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="https://ideainvitation.com/wahid-puji/?to=Ahli%20Surga+%26+Pasangan"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                                <div class="team-item rounded">
                                    <img class="img-fluid rounded-top " src="{{ asset('frontend/img/inv-4.jpg') }}" alt="">
                                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                        <h4 class="text-primary">Abstrack Design</h4>
                                    </div>
                                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="https://temanhidup.com/ubai-intan//?to=Milaa%F0%9F%8C%BB"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary py-3 px-5 rounded-pill">Login Invital<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s" id='contact'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">Dreamy<span class="text-dark">Affairs</span></h1>
                            <p class="lh-lg mb-4">Dreamy Affairs is a website that provides Wedding Organizer services which aims to turn your dream wedding into a beautiful reality. With comprehensive services, Dreamy Affairs helps prospective couples plan, coordinate and execute their wedding perfectly. This site offers a wide selection of packages and services, including wedding location selection, decoration design, guest management, and more.</p>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="https://www.facebook.com/profile.php?id=61553562164276"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="https://www.tiktok.com/@cikwah_official?_t=8hlLmwjjulO&_r=1"><i class="fab fa-tiktok"></i></a>
                                <a href="https://instagram.com/cikwah_official?igshid=OGQ5ZDc2ODk2ZA==" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=6285232092773&text=Hallo,%20Saya%20berencana%20untuk%20mengadakan%20pernikahan%20dan%20ingin%20memesan%20jasa%20Dreamy%20Affairs%20Wedding%20Organizer.%20Bisakah%20kita%20mendiskusikan%20detail%20lebih%20lanjut?" 
                                    class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.linkedin.com/in/miftahzk/" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> Jl. Mastrip, Krajan Timur, Sumbersari, Jember, Jawa Timur 68121</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>  (0331) 333532</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> dreamy_affairs@gmail.com</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>PT. PCA (Pencari Cinta Abadi)</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>