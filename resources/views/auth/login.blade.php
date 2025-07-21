<!DOCTYPE html>
<!--
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Yoshi Sakatana Mandiri </title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- End Google Font-->
    <script src="{{ asset('nova/assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Swiper JS & CSS -->
<link href="{{ asset('nova/assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<script src="{{ asset('nova/assets/vendors/swiper/swiper-bundle.min.js') }}"></script>



    <!-- ======= Styles =======-->
    <link href="{{ asset('nova/assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova/assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova/assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova/assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova/assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <!-- End Styles-->

    <!-- ======= Theme Style =======-->
    <link href="{{ asset('nova/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- End Theme Style-->

    <!-- ======= Apply theme =======-->
    <script>
        // Apply the theme as early as possible to avoid flicker
        (function() {
            const storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', storedTheme);
        })();
    </script>
</head>

<body>


    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">
<section class="hero__v10 section">


        <!-- ======= Header =======-->
        <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
            <div class="container d-flex align-items-center justify-content-between">


                <!-- Start Logo-->
                <a class="navbar-brand w-auto" href="index.html">
                    <!-- If you use a text logo, uncomment this if it is commented-->
                    <!-- Vertex-->

                    <!-- If you plan to use an image logo, uncomment this if it is commented-->

                    <!-- logo dark-->
                    <img class="logo dark img-fluid" src="{{ asset('images/logoysm.png') }}" width="50px"
                        height="50px" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.3));"
                        alt="FreeBootstrap.net image placeholder"> </a>
                <h3 class="font-sans font-bold text-4xl text-gray-800 tracking-wider uppercase mb-14"
                    style="margin-left: 10px;">
                    YSM
                </h3>
                <!-- End Logo-->

                <!-- Start offcanvas-->
                <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1"
                    aria-labelledby="fbs__net-navbarsLabel">


                    <div class="offcanvas-header">
                        <div class="offcanvas-header-logo">
                            <!-- If you use a text logo, uncomment this if it is commented-->

                            <!-- h5#fbs__net-navbarsLabel.offcanvas-title Vertex-->

                            <!-- If you plan to use an image logo, uncomment this if it is commented-->
                            <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">


                                <!-- logo dark--><img class="logo dark img-fluid"
                                    src="{{ asset('nova/assets/images/logo-dark.svg') }}"
                                    alt="FreeBootstrap.net image placeholder">

                                <!-- logo light--><img class="logo light img-fluid"
                                    src="{{ asset('nova/assets/images/logo-light.svg') }}"
                                    alt="FreeBootstrap.net image placeholder"></a>

                        </div>
                        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body align-items-lg-center">


                        <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page"
                                    href="{{ route('Landing') }}">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#about">Tentang</a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">profile <i class="bi bi-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li><a class="dropdown-item" href="{{ route('instruktur') }}">Instruktur</a></li>
                            <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                            </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">Program</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#services">Pendaftaran</a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown <i
                                        class="bi bi-chevron-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="#">Multipages</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Services</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#pricing">Pricing</a></li>
                                    <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropstart <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link scroll-link dropdown-item"
                                                    href="#services">Services</a></li>
                                            <li><a class="nav-link scroll-link dropdown-item"
                                                    href="#pricing">Pricing</a></li>
                                            <li class="nav-item dropstart"><a class="nav-link dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">Dropstart <i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-link scroll-link dropdown-item"
                                                            href="#services">Services</a></li>
                                                    <li><a class="nav-link scroll-link dropdown-item"
                                                            href="#pricing">Pricing</a></li>
                                                    <li><a class="nav-link scroll-link dropdown-item"
                                                            href="#">Something else here</a></li>
                                                    <li class="nav-item dropend"><a class="nav-link dropdown-toggle"
                                                            href="#" data-bs-toggle="dropdown"
                                                            aria-expanded="false">Dropend <i
                                                                class="bi bi-chevron-right"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="nav-link scroll-link dropdown-item"
                                                                    href="#services">Services</a></li>
                                                            <li><a class="nav-link scroll-link dropdown-item"
                                                                    href="#pricing">Pricing</a></li>
                                                            <li><a class="nav-link scroll-link dropdown-item"
                                                                    href="#">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Contact</a></li>
                        </ul>

                    </div>
                </div>
                <!-- End offcanvas-->

                <div class="ms-auto w-auto">


                               <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2"  href="{{ route('login') }}">Login</a>


                        <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto"
                            data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars"
                            aria-controls="fbs__net-navbars" aria-label="Toggle navigation" aria-expanded="false">
                            <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="21" x2="3" y1="6" y2="6"></line>
                                <line x1="15" x2="3" y1="12" y2="12"></line>
                                <line x1="17" x2="3" y1="18" y2="18"></line>
                            </svg>
                            <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>

                    </div>

                </div>
            </div>
        </header>









<section class="hero__v10">
<div class="d-flex flex-wrap w-100" style="height: 50vh; font-family: 'Noto Sans JP', sans-serif;">
    <!-- Bagian Form Login -->
    <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center" style="background-color: #00265C;">
        <div class="w-100 px-4" style="max-width: 400px;">
            <h3 class="text-white fw-bold text-center mb-2" style="letter-spacing: 1px;">ようこそ</h3>
            <p class="text-white text-center mb-4" style="font-size: 14px;">Silakan masuk untuk mengakses sistem pelatihan dan pemagangan ke Jepang</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" name="email" id="email" class="form-control input-putih" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-putih" required>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="showPassword" onclick="togglePassword()">
                    <label for="showPassword" class="form-check-label text-white">Tampilkan Password</label>
                </div>

                <button type="submit" class="btn w-100 fw-bold btn-login-japan">Masuk</button>
            </form>
        </div>
    </div>

    <!-- Bagian Gambar Jepang -->
    <div class="col-lg-6 d-none d-lg-block p-0">
        <img src="{{ asset('images/shine1.jpeg') }}" alt="Login Jepang" class="img-fluid w-100" style="height: 100vh; object-fit: cover;">
    </div>

</div>
</section>

<!-- Style -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

    html, body {
        overflow: hidden;
        height: 100%;
    }

    .input-putih {
        background-color: #ffffff !important;
        color: #00265C !important;
        border: 1px solid #ccc !important;
        border-radius: 8px;
        padding: 0.5rem 0.75rem;
    }

    .btn-login-japan {
        background-color: #ffffff;
        color: #00265C;
        border: none;
        border-radius: 8px;
        padding: 0.6rem 1rem;
        transition: all 0.3s ease-in-out;
    }

    .btn-login-japan:hover {
        background-color: #dbe4f3;
        color: #00193f;
    }
</style>

<script>
    function togglePassword() {
        const passField = document.getElementById("password");
        passField.type = passField.type === "password" ? "text" : "password";
    }
</script>

 </main>
    </div>

    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->

    <!-- ======= Javascripts =======-->
    <script src="{{ asset('nova/assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('nova/assets/vendors/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('nova/assets/js/custom.js') }}"></script>
    <script src="{{ asset('nova/assets/js/send_email.js') }}"></script>

    <!-- End JavaScripts-->
</body>
</section>

</html>
