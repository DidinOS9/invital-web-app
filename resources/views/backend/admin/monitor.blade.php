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

        

        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End --> --}}


        <!-- Navbar start -->
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="/" class="navbar-brand">
                        <h2 class="text-primary fw-bold mb-0">Dreamy<span class="text-dark">Affairs 
                            <br>Wedding </span> Organizer </h2>
                    </a>
                </nav>
            </div>
        <!-- Navbar End -->

    
        <!-- Hero Start -->
        <style>
            body {
                background-image: url('/images/wedding6.png'); 
                background-size: cover; 
                background-repeat: no-repeat;
            }
        </style>



            <div class="container text-center">
                <h1 class="display-1 mb-4 text-primary">The <span class="text-dark"> Wedding</span></h1>
                <h1 class="display-1 mb-4 text-primary"><span class="text-dark"> {{ Auth::user()->name }} & </span> Qomariatun </h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown"></ol>
                <div class="container-fluid team py-6" id='team'>
                    <div class="container">
                        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                            <div style="width: 100%; height: 100%; position: relative">
                                <div style="width: 1250px; height: 182px; left: 0px; top: 0px; position: absolute; background: rgba(217, 217, 217, 0.70); box-shadow: 0px 7px 4px rgba(0, 0, 0, 0.50); border-radius: 30px">
                                    <br><h2>Selamat Datang</h2>
                                    <h1 class="display-5">{{ isset($nama) ? "$nama" : "Tamu belum datang" }}</h1>
                                    <h2>{{ isset($status) ? "Tamu $status" : "" }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Hero End -->



        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>    --}}

        <script>
            setTimeout(function(){
                location.reload();
            }, 5000); // Auto-reload setiap 5 detik (sesuaikan dengan kebutuhan Anda)
        </script>
        
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

{{-- 
<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <style>
        .animated-text {
            position: absolute;
            text-align: center;
            font-size: 24px;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="animated-text" id="text-container">{{ isset($nama) ? "Selamat Datang: $nama" : "Tamu belum datang" }}
    </div>

    <script>
        var textElement = document.getElementById("text-container");
        var currentPosition = window.innerHeight; // Mulai dari bawah halaman

        function animateText() {
            if (currentPosition < 0) {
                currentPosition = window.innerHeight; // Reset ke bawah halaman saat mencapai atas
            }

            currentPosition -= 1; // Kecepatan pergerakan teks
            textElement.style.bottom = currentPosition + "px";
            requestAnimationFrame(animateText);
        }

        animateText();
    </script>
</body>
</html> --}}
