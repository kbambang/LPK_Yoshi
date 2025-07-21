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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />



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
                            <li class="nav-item"><a class="nav-link scroll-link" href="#pricing">Program</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="{{ route('FormDaftar.form') }}">Pendaftaran</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#faq">Kontak</a></li>
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


        @yield('content')


        <footer class="footer pt-5 pb-4" style="background-color: #00255c">
            <div class="container">

                <div class="row justify-content-between mb-5 g-xl-5">
                    <div class="col-md-6 mb-5 mb-lg-0 d-flex">
                        <img src="{{ asset('images/logoysm.png') }}" alt=""
                            style="width: 150px; height: 150px">

                        <p class="mb-4 " style="margin-left: 10px; color: white;">LPK Yoshi Sakatana Mandiri adalah
                            lembaga pelatihan kerja yang berkomitmen mempersiapkan generasi unggul untuk bekerja dan
                            berkarya di Jepang melalui pelatihan bahasa, budaya, dan etika kerja yang berkualitas.

                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-2">
                            <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                                {{-- <h3 class="mb-3">Company</h3>
                            <ul class="list-unstyled">
                                <li><a href="page-about.html">Leadership</a></li>
                                <li><a href="page-careers.html">Careers <span class="badge ms-1">we're
                                            hiring</span></a></li>
                                <li><a href="page-case-studies.html">Case Studies</a></li>
                                <li><a href="page-terms-conditions.html">Terms &amp; Conditions</a></li>
                                <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="page-404.html">404 page</a></li>
                            </ul> --}}
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <h3 class="mb-3" style="color: rgb(255, 255, 255)">Sosial Media</h3>
                                <ul class="list-unstyled" >
                                    <li><a href="https://www.instagram.com/lpk_yoshisakatana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="color: white"><i class="fab fa-instagram me-2"></i>Instagram</a>
                                    </li>
                                    <li><a href="https://www.tiktok.com/@lpk_yoshisakatanamandiri?is_from_webapp=1&sender_device=pc" style="color: white"><i
                                                class="fab fa-tiktok me-2"></i>Tiktok</a></li>
                                    <li><a href="page-signin.html" style="color: white"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
                                    </li>
                                    <li><a href="page-forgot-password.html" style="color: white"><i
                                                class="fab fa-twitter me-2"></i>Twitter</a></li>
                                    <li><a href="https://www.youtube.com/channel/UC_4Uw_33YavH8SbRw9hyrRQ" style="color: white"><i class="fab fa-youtube me-2"></i>Youtube</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact" >
                                <h3 class="mb-3" style="color: rgb(255, 255, 255)">Kontak</h3>
                                <p class="d-flex mb-3" style="color: white"><i class="bi bi-geo-alt-fill me-3" style="color: white"></i><span>Jl.Raya Simpang
                                        Panjalu DsnSriwinangun DesPanjalu RT52RW23 Panjalu Ciamis</span></p><a
                                    class="d-flex mb-3" href="mailto:info@mydomain.com" style="color: white"><i
                                        class="bi bi-envelope-fill me-3" style="color: white"></i><span>yoshisakatanamandiri@gmail.com</span></a><a
                                    class="d-flex mb-3" href="tel://+123456789900"><i
                                        class="bi bi-telephone-fill me-3" style="color: white"></i><span style="color: white">+62 822-1623-2156</span></a><a
                                    class="d-flex mb-3" href="https://freebootstrap.net" style="color: white"><i
                                        class="bi bi-globe me-3" style="color: white"></i><span>yoshisakatanamandiri.com</span></a>
                            </div>
                        </div>
                    </div>
                </div></div><hr style="color: white">
                <div class="row credits pt-3 justify-content-center">
                    <div class="col-12 text-center" style="color: white">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>, Yoshi Sakatana Mandiri
                    </div>
                </div>

            </div>
        </footer>
        <!-- End Footer-->

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

</html>
