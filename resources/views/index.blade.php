<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Puskesmas Tempurejo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontpage/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontpage/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontpage/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontpage/css/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345
                        6789</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body ps-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary">
                    <img src="{{ asset('frontpage/img/logo.png') }}" style="width:90px" alt="">
                    Puskesmas Tempurejo</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Tentang</a>
                    <a href="service.html" class="nav-item nav-link">Diagnosa Online</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                    style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Medinova</h5>
                <h1 class="display-1 text-white mb-md-4">Best Healthcare Solution In Your City</h1>
                <div class="pt-2">
                    <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                    <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                    <h1 class="display-4">Best Medical Care For Yourself and Your Family</h1>
                </div>
                <div>

                </div>
                <div class="row g-3 pt-3">
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                            <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                            <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                            <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                            <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" >
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Pelayanan</h5>
            <h1 class="">Melayani bukan Dilayani</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-2">
                        <i class="fa fa-2x fa-user-md text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Gawat Darurat
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-baby text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Persalinan
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fas fa-2x fa-clinic-medical text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Rawat Inap
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-ambulance text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Ambulan
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fas fa-2x fa-tooth text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Gigi & Mulut
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-microscope text-white"></i>
                    </div>
                    <div class="text-primary" style="font-weight: bold; font-size: 16px">
                        Operation & Surgery
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Footer Start -->
<div class="container-fluid bg-light text-light mt-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4"> PUSKESMAS TEMPUREJO</h4>
                <a href="https://www.google.com/maps/dir//PUSKESMAS+Tempurejo+Jl.+KH.+Abdul+Aziz+No.119+Kauman+Kec.+Tempurejo,+Kabupaten+Jember,+Jawa+Timur+68173/@-8.2989688,113.6831778,19z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2dd69a3a94b38e49:0x4fda17e98ae830ec"
                   class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3 "></i>
                    Jl. KH. Abdul Aziz No.119, Kauman, Kec. Tempurejo, Kabupaten Jember, Jawa Timur 68173
                </a>
                <br><br>
                <a href="https://www.instagram.com/puskesmas_tempurejo/" class="text-none">
                    <i class="fab fa-instagram text-primary me-3"></i>
                    @puskesmas_tempurejo
                </a>
                <br><br>
                <a href="tel:+62331757924" class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>033 175 7924</a>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="border border-primary rounded-2 shadow p-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1390.2108906132505!2d113.68256880815323!3d-8.29888424598039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69a3a94b38e49%3A0x4fda17e98ae830ec!2sPUSKESMAS%20Tempurejo!5e0!3m2!1sen!2sid!4v1685969210926!5m2!1sen!2sid"
                            style="border:0; width: 100%; height: 400px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Newsletter</h4>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light text-primary border-top border-secondary py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontpage/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontpage/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontpage/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('frontpage/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('frontpage/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontpage/js/main.js') }}"></script>
</body>

</html>