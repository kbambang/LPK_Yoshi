@extends('layout.landing')

@section('title', 'Yoshi Sakatana Mandiri')

@section('content')
    <title>Yoshi Sakatana Mandiri</title>
    <!-- End Header-->

    <!-- ======= Main =======-->
    <main>


        <!-- ======= Hero =======-->
        <section class="hero__v6 section" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-lg-11"><span class="hero-subtitle text-uppercase" data-aos="fade-up"
                                    data-aos-delay="0">Selamat datang</span>
                                <h3 class="hero-titlee mb-3" data-aos="fade-up" data-aos-delay="100">Belajar
                                    Bahasa Jepang & Kerja di Jepang Bersama LPK </h3>
                                <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">Yoshi
                                    Sakatana Mandiri </h1>
                                <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
                                    Raih impianmu bekerja di Jepang melalui pelatihan bahasa dan keterampilan dari
                                    mentor berpengalaman. Resmi, terpercaya, dan terbukti memberangkatkan alumni
                                    setiap tahun.</p>
                                <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300"><a
                                        class="btn" href="{{ route('FormDaftar.form') }}">Daftar Sekarang</a><a
                                        class="btn btn-white-outline" href="#pricing">Pilih Program
                                        <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M7 7h10v10"></path>
                                            <path d="M7 17 17 7"></path>
                                        </svg></a></div>
                                {{-- <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400"><span class="logos-title text-uppercase mb-4 d-block">Trusted by major companies worldwide</span>
                      <div class="logos-images d-flex gap-4 align-items-center"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-air-bnb__black.svg" alt="Company 1" style="width: 110px;"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-ibm__black.svg" alt="Company 2" style="width: 80px;"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-google__black.svg" alt="Company 3" style="width: 110px;"></div>
                    </div> --}}

                                <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Resmi & Terdaftar</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Pelatihan Lengkap</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Jalur Pemberangkatan Aman</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Ratusan Alumni Telah Bekerja di Jepang</span>
                                    </li>

                                </ul>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-img"><img class="img-main img-fluid rounded-4"
                                src="{{ asset('images/anime.png') }}" alt="Hero Image" data-aos="fade-in"
                                data-aos-delay="500"></div>
                    </div>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="400">
                    <div class="row">
                        <div class="col-md-15 order-md-2">
                            <div class="row justify-content-end">
                                <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <div class="mission-icon text-center rounded-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero-->
        </section>
        <!-- End Hero-->


        <!-- ======= About =======-->
        <section class="about__v4 section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <div class="row justify-content-end">
                            <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3"
                                    data-aos="fade-up" data-aos-delay="0">Tentang Kami</span>
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">LPK Yoshi Sakatana
                                    Mandiri.</h2>
                                <div data-aos="fade-up" data-aos-delay="200">
                                    <p>LPK Yoshi Sakatana Mandiri berperan untuk mempersiapkan SDM untuk mengikuti program
                                        magang, kerja dan belajar di Jepang. Mencakup persiapan diantaranya pelatihan bahasa
                                        dan
                                        budaya jepang, membangun etos kerja, serta pemahaman yang mendalam dalam bidang
                                        spesifik
                                        secara insentif. Serta membentuk sikap, mental, disiplin dan keterampilan dan juga
                                        kemandirian
                                        untuk persiapan kerja dan tinggal di Jepang</p>
                                    {{-- <p>Our cutting-edge platform ensures your transactions are safe, streamlined, and easy to manage, empowering you to take control of your financial journey with confidence and convenience.</p> --}}
                                </div><br><br>
                                <ul class="flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Fasilitas Lengkap & Nyaman</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Pelatihan Budaya & Etika Kerja Jepang</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Proses Pemberangkatan Terstruktur</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Terdaftar Resmi & Legal</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Pembelajaran Bahasa Jepang N5-N3</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-3">
                                        <span class="check-icon">
                                            <i class="bi bi-check-lg"></i>
                                        </span>
                                        <span class="text">Dibimbing Mentor Berpengalaman</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="img-wrap position-relative">
                            <div class="image-container">
                                <img src="{{ asset('images/Picture-hitori.png') }}" class="img img1" />
                                <img src="{{ asset('images/Picture-tentang.png') }}" class="img img3" />

                                <img src="{{ asset('images/Picture-sannin.png') }}" class="img img4" />
                                <div class="play-button">
                                    <a class="glightbox d-inline-flex align-items-center gap-2"
                                        href="https://youtu.be/OKIwI3Kcv-M?si=9pmTD16LyQwom4hs" data-gallery="video"> <img
                                            src="{{ asset('images/play.png') }}" alt="Play"
                                            style="width: 50px; height: 50px;" /></i>
                                        <h1 style="color: white; margin-left: 10px; font-size: 20px;">Play Video</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br><br><br><br>
        <!-- End About-->

        <!-- ======= Features =======-->
        {{-- <section class="section features__v2" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                            <div class="row">
                                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="h-100 flex-column justify-content-between d-flex">
                                                <div>
                                                    <h2 class="mb-4" style="color: white">Mengapa Memilih Kami
                                                    </h2>
                                                    <p class="mb-5" style="color: white">LPK Yoshi Sakatana
                                                        Mandiri bukan hanya sekadar lembaga pendidikan dan
                                                        pelatihan, melainkan mitra terpercaya dalam perjalanan Anda
                                                        untuk mencapai kesuksesan LPK Yoshi Sakatana Mandiri adalah
                                                        pilihan tepat untuk Anda yang ingin berkembang dan mencapai
                                                        tujuan karir Anda!</p>
                                                </div>
                                                <div class="align-self-start"><a
                                                        class="glightbox btn btn-play d-inline-flex align-items-center gap-2"
                                                        href="https://youtu.be/OKIwI3Kcv-M?si=9pmTD16LyQwom4hs"
                                                        data-gallery="video"><i class="bi bi-play-fill"></i> Play
                                                        Video</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-11">
                                            <div class="row" style="color: white">
                                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                                                    <div class="icon text-center mb-4"><i
                                                            class="bi bi-person-check fs-4"></i></div>
                                                    <h3 class="fs-6 fw-bold mb-3" style="color: white">Pelatihan
                                                        Bahasa Jepang Intensif</h3>
                                                    <p>Dapatkan pelatihan bahasa Jepang dari pengajar profesional
                                                        untuk mempersiapkan diri secara linguistik dan budaya.</p>
                                                </div>
                                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                                    <div class="icon text-center mb-4"><i class="bi bi-graph-up fs-4"></i>
                                                    </div>
                                                    <h3 class="fs-6 fw-bold mb-3" style="color: white">Penempatan
                                                        Legal & Resmi ke Jepang</h3>
                                                    <p>Kami bekerja sama dengan lembaga resmi untuk memastikan
                                                        proses pemagangan sesuai aturan dan legalitas</p>
                                                </div>
                                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="icon text-center mb-4"><i class="bi bi-headset fs-4"></i>
                                                    </div>
                                                    <h3 class="fs-6 fw-bold mb-3" style="color: white">Peluang
                                                        Karir Internasional</h3>
                                                    <p>Buka jalan menuju karir global dengan pengalaman kerja
                                                        langsung di Jepang.
                                                    <p>
                                                </div>
                                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="icon text-center mb-4"><i
                                                            class="bi bi-shield-lock fs-4"></i></div>
                                                    <h3 class="fs-6 fw-bold mb-3" style="color: white">Alumni
                                                        Sukses dan Jaringan Kuat</h3>
                                                    <p>Bergabung dengan komunitas alumni kami yang telah sukses di
                                                        Jepang dan kembali membangun karir di Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Features-->



        <!-- ======= Pricing =======-->
        <section class="section pricing__v2" id="pricing">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-10 mx-auto text-center">
                        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">PROGRAM YANG
                            DISELENGGARAKAN</span>
                        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Pelatihan dan Magang di LPK Yoshi
                            Sakatana Mandiri</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            LPK Yoshi Sakatana Mandiri menawarkan berbagai program pelatihan dan magang yang dirancang untuk
                            memberikan keterampilan praktis yang relevan dengan industri.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <!-- Bimbingan TG -->
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-5 rounded-4 price-table h-100">
                            <h3>Pemagangan Pemerintah (IM JAPAN)</h3>
                            <p>Program Pemerintah/IM Japan merupakan program pemagangan
                                ke Jepang di adakan oleh pemerintah Indonesia yang bekerjasama
                                dengan pemerintah Jepang. Program ini bertujuan untuk membuka
                                peluang bagi masyarakat Indonesia yang ingin pergi ke Jepang</p>
                            <div><a class="btn" href="{{ route('program.im') }}">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Magang Swasta -->
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-5 rounded-4 price-table h-100">
                            <h3>Pemagangan Swasta</h3>
                            <p>Program Pemagangan Swasta yaitu program Pemagangan yang melalui jalur
                                mandiri atau jalur yang di bantu oleh pihak swasta. Dimana pihak swasta
                                memiliki izin untuk memberangkatkan calon peserta pemagangan ke Jepang.
                                pihak swasta ini di sebut dengan S.O (Sending Organization).</p>
                            <div><a class="btn" href="{{ route('program.magang') }}">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- IM Japan -->
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-5 rounded-4 price-table h-100">
                            <h3>TOKUTEI
                                GINOU
                                VISA KERJA</h3>
                            <p>Tokutei Ginou (特定技能) adalah program visa kerja yang dibuat oleh
                                pemerintah Jepang sejak April 2019 untuk menarik tenaga kerja asing
                                berketerampilan menengah ke Jepang. Tujuannya adalah untuk mengatasi
                                kekurangan tenaga kerja di sektor-sektor industri tertentu.</p>
                            <div><a class="btn" href="{{ route('program.tg') }}">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </section>

        <section id="clients" class="clients section" style="background-color: #B5E9FF;">
            <div class="container" data-aos="fade-up">
                <div class="clients-slider">
                    <div class="clients-track">
                        @php
                            $logos = ['1.png', '2.png', '3.png', '1.png', '2.png', '3.png', '1.png', '2.png', '3.png'];
                        @endphp

                        @foreach ($logos as $logo)
                            <div class="client-logo">
                                <img src="{{ asset('images/' . $logo) }}" alt="logo">
                            </div>
                        @endforeach

                        {{-- Duplikat untuk efek infinite scroll --}}
                        @foreach ($logos as $logo)
                            <div class="client-logo">
                                <img src="{{ asset('images/' . $logo) }}" alt="logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>




        <!-- ======= How it works =======-->
        {{-- <section class="section howitworks__v1" id="how-it-works">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-10 text-center mx-auto"><span class="subtitle text-uppercase mb-3"
                            data-aos="fade-up" data-aos-delay="0">Alur Pendaftaran</span>
                        <h2 data-aos="fade-up" data-aos-delay="100">LPK YOSHI SAKATANA MANDIRI</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Bergabung dengan program pelatihan di LPK Yoshi
                            Sakatana Mandiri membuka kesempatan untuk bekerja di Jepang. Berikut adalah alur dan
                            proses yang perlu Anda ketahui untuk memulai karir di Jepang: </p>
                    </div>
                </div>
                <div class="row g-md-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative"
                            data-aos="fade-up" data-aos-delay="0">
                            <div data-aos="fade-right" data-aos-delay="500"><img class="arch-line"
                                    src="{{ asset('nova/assets/images/arch-line.svg') }}"
                                    alt="FreeBootstrap.net image placeholder"></div><span
                                class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                            <div>
                                <h3 class="fs-5 mb-4">Sign Up</h3>
                                <p>Visit our website or download our app to sign up. Provide basic information to
                                    set up your secure account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div
                            class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <div data-aos="fade-right" data-aos-delay="1100"><img class="arch-line reverse"
                                    src="{{ asset('nova/assets/images/arch-line-reverse.svg') }}"
                                    alt="FreeBootstrap.net image placeholder"></div><span
                                class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                            <h3 class="fs-5 mb-4">Set Up Your Profile</h3>
                            <p>Add your personal or business details to tailor the platform to your specific needs.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                        <div
                            class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <div data-aos="fade-right" data-aos-delay="1700"><img class="arch-line"
                                    src="{{ asset('nova/assets/images/arch-line.svg') }}"
                                    alt="FreeBootstrap.net image placeholder"></div><span
                                class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                            <h3 class="fs-5 mb-4">Explore Features</h3>
                            <p>Access your dashboard for a summary of your finances: balances, recent transactions,
                                and insights.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1800">
                        <div
                            class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                            <div>
                                <h3 class="fs-5 mb-4">Invest and Grow</h3>
                                <p>Discover a variety of investment opportunities tailored to your financial goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End How it works-->

        {{-- <!-- ======= Stats =======-->
        <section class="stats__v3 section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="rounded-borders">
                    <div class="rounded-border-1"></div>
                    <div class="rounded-border-2"></div>
                    <div class="rounded-border-3"></div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2">0</span><span>K+</span></h3>
                      <p class="mb-0">Customer Satisfaction</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="2">0</span><span>%+</span></h3>
                      <p class="mb-0">Revenue Increase</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2">0</span><span>x</span></h3>
                      <p class="mb-0">Business Growth</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- End Stats-->



        <!-- ======= Testimonials =======-->
        <section class="section testimonials__v2" id="testimonials">
            <div class="container position-relative">
                <div class="row mb-5">
                    <div class="col-lg-10 mx-auto text-center">
                        <span class="subtitle text-uppercase mb-3" data-aos="fade-up">Testimoni</span>
                        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Testimoni Peserta LPK Yoshi Sakatana
                            Mandiri</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            Cerita nyata dari mereka yang telah berhasil mewujudkan mimpi ke Jepang.
                        </p>
                    </div>
                </div>

                <!-- Swiper Buttons - Kiri Kanan -->
                <!-- Tombol Prev -->
                <div class="swiper-button-prev testimonial-btn bg-white shadow rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px;">
                    <i class="bi bi-chevron-left" style="font-size: 14px; color: #002355;"></i>
                </div>

                <!-- Tombol Next -->
                <div class="swiper-button-next testimonial-btn bg-white shadow rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px;">
                    <i class="bi bi-chevron-right" style="font-size: 14px; color: #002355;"></i>
                </div>

                <!-- Swiper Slider -->
                <div class="swiper testimonial-swiper" data-aos="fade-up" data-aos-delay="300">
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Biki Awarudin</strong><span>Juragan Jangkrik</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo; Lpk yoshi sakatana mandiri adalah lpk yang bagus, bersih, dan disiplin. soshite
                                    selama saya berada disini saya menjadi lebih baik dari sebelumnya, orang orang nya ramah
                                    serta baik hati.&rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Dickri Bambang Kurniawan</strong><span>CEO Google</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo;Lpk yoshi sakatana mandiri adalah lpk yang yang bagus, disini kita tidak hanya
                                    diajar kan tentang bahasanya saja tapi kita juga di ajarkan bagaimana budaya jepang yang
                                    baik dan benar. &rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Hikais Dika Darma Putra</strong><span>CEO Microsoft</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo; Belajar bahasa Jepang di LPK Yoshi sangat menyenangkan. Metodenya mudah
                                    dipahami, dan instruktur selalu sabar menjelaskan. Setelah lulus, saya lolos JLPT N4 dan
                                    siap melanjutkan karir di Jepang.&rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Febri Yanto</strong><span>Owner seblak jeletot</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo; Senang rasanya bisa belajar bahasa jepang di lpk ini, dari yang tadinya tidak
                                    bisa sama sekali dan sekarang sudah bisa bekerja di jepang dan mempunyai usaha seblak
                                    jeletot &rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Galuh </strong><span>owner barbershope rusdi</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo; Mantap &rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('images/pp.jpg') }}" alt="">
                                    </div>
                                    <div class="lh-base">
                                        <strong class="d-block">Daus</strong><span>Manager Suzuki</span>
                                    </div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo; Lpk yoshi sakatana mandiri adalah lpk yang terbaik menurut saya, disini saya
                                    sangat mudah dalam belajar bahasa jepang dari yang tadinya tidak bisa sama sekali sampai
                                    bisa mendapatkan n2 &rdquo;
                                </blockquote>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak slide seperti ini -->
                    </div>
                </div>
            </div>
        </section>



        <!-- Testimonials-->


        {{-- berita --}}

        <section class="section testimonials__v2 " id="testimonials">
            <div class="container" data-aos="fade-up" data-aos-delay="400">
                <div class="row g-4" data-masonry='{"percentPosition": true }'>

                    <!-- BERITA (lebih besar) -->
                    <div class="col-md-12 col-lg-6">
                        <div><span class="subtitle text-uppercase mb-4">Berita</span></div>
                        <div class="testimonial rounded-4 p-4">
                            <div class="row g-3">
                                <!-- Kartu Berita 1 -->
                                <div class="col-6">
                                    <div class="testimonial p-2 rounded-4">
                                        <!-- Gambar -->
                                        <div class="rounded-4 overflow-hidden mb-2" style="height: 150px;">
                                            <img src="{{ asset('images/berita.png') }}" alt=""
                                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                        </div>
                                        <!-- Konten -->
                                        <h5 class="fw-bold">Upacara Adat di Panjalu</h5>
                                        <p class="small mb-1">
                                            Upacara adat Panjalu adalah tradisi tahunan sebagai ritual pembersihan
                                            keris yang ada di Bumi Alit.
                                        </p>
                                        <p class="text-muted" style="font-size: 0.8rem;">18 Juli 2025</p>
                                    </div>
                                </div>

                                <!-- Kartu Berita 2 -->
                                <div class="col-6" data-aos="fade-up" data-aos-delay="0">
                                    <div class="testimonial p-2 rounded-4">
                                        <div class="rounded-4 overflow-hidden mb-2" style="height: 150px;">
                                            <img src="{{ asset('images/berita1.png') }}" alt=""
                                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                        </div>
                                        <h5 class="fw-bold">Judul Berita Lain</h5>
                                        <p class="small mb-1">Ringkasan singkat berita kedua jika tersedia.</p>
                                        <p class="text-muted" style="font-size: 0.8rem;">17 Juli 2025</p>
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="text-center"><a href="{{ route('informasi.berita') }}"
                                    style=" text-decoration: none;">Selengkapnya ></a></h4>
                        </div>
                    </div>



                    <!-- KOLOM KANAN: Selamat dan Pengumuman (dalam satu kolom besar) -->
                    <div class="col-md-12 col-lg-6">
                        <div class="row g-4">

                            <!-- SELAMAT -->
                            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div><span class="subtitle text-uppercase mb-4">Selamat</span></div>
                                <div class="testimonial rounded-4 p-4 text-center overflow-hidden">
                                    <div class="testimonial p-2 rounded-4 overflow-hidden" style="height: 250px;">

                                        <img src="{{ asset('images/omo.png') }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                    </div><br>
                                    <h4 class="text-center"><a href="{{ route('informasi.selamat') }}"
                                            style=" text-decoration: none;">Selengkapnya ></a></h4>
                                </div>
                            </div>

                            <!-- PENGUMUMAN -->
                            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div><span class="subtitle text-uppercase mb-4">Pengumuman</span></div>
                                <div class="testimonial rounded-4 p-4">

                                    <div class="rounded-4 overflow-hidden mb-3" style="height: 100px;">
                                        <img src="{{ asset('images/qqq.png') }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                    </div>
                                    <div class="rounded-4 overflow-hidden mb-3" style="height: 100px;">
                                        <img src="{{ asset('images/qqq (2).png') }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                    </div>
                                    <div class="rounded-4 overflow-hidden mb-3" style="height: 100px;">
                                        <img src="{{ asset('images/picture(14).png') }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                    </div>

                                    <h4 class="text-center"><a href="{{ route('informasi.pengumuman') }}"
                                            style=" text-decoration: none;">Selengkapnya ></a></h4>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            </div>
            </div>
        </section>

        <section class="text-white d-flex align-items-center" style="background-color: #00255c; min-height: 350px;"
            data-aos="fade-up" data-aos-delay="400">
            <div class="container text-center">
                <div class="mx-auto" style="max-width: 1100px;">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; color: white;">Siap Daftar LPK?</h2>
                    <p class="mb-4" style="font-size: 1.2rem;">
                        Inilah saatnya memulai langkah menuju masa depan yang lebih baik! Bergabunglah bersama ratusan
                        alumni kami
                        yang telah sukses berkarier di Jepang melalui program <strong>Tokutei Ginou</strong>,
                        <strong>Magang Industri</strong>, dan <strong>Nihon Go Gakko</strong>.
                    </p>

                    <!-- Tombol seperti card garis -->
                    <a href="{{ route('FormDaftar.form') }}"
                        class="d-inline-block px-4 py-2 text-white text-decoration-none border border-white rounded"
                        style="font-size: 1rem; transition: 0.3s;">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </section>

        <section class="section testimonials__v2" id="testimonials">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-10 mx-auto text-center">
                        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Gallery</span>
                        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">
                            Momen-Momen Spesial di LPK Yoshi Sakatana Mandiri
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            Kami percaya bahwa setiap proses adalah perjalanan berharga. Inilah cuplikan kegiatan kami yang
                            menunjukkan semangat, kebersamaan, dan dedikasi peserta dalam mengejar impian ke Jepang.
                        </p>
                    </div>
                </div>

                <!-- Gallery Card -->
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="0">
                    <div class="testimonial rounded-4 p-4">
                        <div class="row g-4">

                            <!-- Foto 1 -->
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(1).png') }}" alt="Gallery 1"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <!-- Foto 2 -->
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(5).png') }}" alt="Gallery 2"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <!-- Foto 3 -->
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(11).png') }}" alt="Gallery 3"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <!-- Baris 2 bisa ditambah lagi -->
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(10).png') }}" alt="Gallery 4"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(8).png') }}" alt="Gallery 4"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="overflow-hidden rounded-4" style="height: 200px;">
                                    <img src="{{ asset('images/picture(13).png') }}" alt="Gallery 4"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <!-- Tambah lagi sesuka kamu -->

                        </div><br>
                        <h4 class="text-center"><a href="{{ route('informasi.gallery') }}"
                                style=" text-decoration: none;">Selengkapnya ></a></h4>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= FAQ =======-->
        <section class="section faq__v2" id="faq">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-10 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                            data-aos="fade-up" data-aos-delay="0">FAQ</span>
                        <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Ingin Daftar Tapi Masih
                            Bingung? Cek FAQ Berikut</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Temukan jawaban dari pertanyaan umum seputar pelatihan,
                            proses seleksi, dan keberangkatan ke Jepang melalui LPK Yoshi Sakatana Mandiri.

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-15 mx-auto" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-content">
                            <div class="accordion custom-accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Apa aja persyaratan mengikuti program pelatihan?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Laki-laki / Perempuan
                                                    Usia 18 Tahun - 35 Tahun</li>
                                                <li>Tinggi Badan
                                                    Putri Minimal 150 cm
                                                    Putra Minimal 160 Cm</li>
                                                <li> Sehat Jasmani dan Rohani</li>
                                                <li> Tidak bertato, bertindik
                                                    dan tidak buta warna</li>
                                                <li> Pendidikan Minimal
                                                    SMA/SMK/Sederajat/Paket C</li>
                                                <li>Tidak Buta Warna</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Apakah LPK Yoshi Sakatana Mandiri sudah terdaftar secara resmi?

                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Ya, LPK Yoshi Sakatana Mandiri telah terdaftar resmi dan legal, memiliki izin
                                            operasional dan bekerja sama dengan berbagai lembaga penyalur tenaga kerja ke
                                            Jepang. </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Apakah harus bisa bahasa Jepang dulu sebelum mendaftar?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Tidak harus. Semua peserta akan mulai dari dasar (N5), dan akan dibimbing hingga
                                            bisa memahami bahasa Jepang tingkat menengah.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Berapa lama durasi pelatihannya?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Lama pelatihan biasanya antara 6 bulan hingga 1 tahun, tergantung pada program
                                            yang diambil dan kesiapan peserta.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Apakah tersedia program cicilan atau bantuan biaya?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Untuk beberapa program, kami menyediakan opsi pembayaran bertahap (cicilan).
                                            Silakan konsultasikan langsung dengan admin kami.
                                        </div>
                                    </div>
                                </div>

                                <!-- Tambahkan item lain dengan ID & heading yang sesuai -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End FAQ-->
        </section>
        <!-- End FAQ-->

        <!-- ======= Contact =======-->
        {{-- <section class="section contact__v2" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                        data-aos="fade-up" data-aos-delay="0">Contact</span>
                    <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Contact Us</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Utilize our tools to develop your concepts and
                        bring your vision to life. Once complete, effortlessly share your creations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex gap-5 flex-column">
                        <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="icon d-block"><i class="bi bi-telephone"></i></div><span> <span
                                    class="d-block">Phone</span><strong>+(01 234 567 890)</strong></span>
                        </div>
                        <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span
                                    class="d-block">Email</span><strong>info@mydomain.com</strong></span>
                        </div>
                        <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span
                                    class="d-block">Address</span>
                                <address class="fw-bold">123 Main Street Apt 4B Springfield, <br> IL 62701
                                    United States</address>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <form id="contactForm">
                            <div class="row gap-3 mb-3">
                                <div class="col-md-12">
                                    <label class="mb-2" for="name">Name</label>
                                    <input class="form-control" id="name" type="text" name="name"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-2" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"
                                        required="">
                                </div>
                            </div>
                            <div class="row gap-3 mb-3">
                                <div class="col-md-12">
                                    <label class="mb-2" for="subject">Subject</label>
                                    <input class="form-control" id="subject" type="text" name="subject">
                                </div>
                            </div>
                            <div class="row gap-3 gap-md-0 mb-3">
                                <div class="col-md-12">
                                    <label class="mb-2" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary fw-semibold" type="submit">Send Message</button>
                        </form>
                        <div class="mt-3 d-none alert alert-success" id="successMessage">Message sent
                            successfully!</div>
                        <div class="mt-3 d-none alert alert-danger" id="errorMessage">Message sending failed.
                            Please try again later.</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- End Contact-->

        <!-- ======= Footer =======-->
        <script>
            const swiper = new Swiper('.testimonial-swiper', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-prev',
                    prevEl: '.swiper-button-next',
                },
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    }
                }
            });
        </script>



    @endsection
