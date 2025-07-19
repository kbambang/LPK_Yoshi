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
                                    <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up"
                                        data-aos-delay="300"><a class="btn" href="{{ route('FormDaftar.form') }}">Daftar Sekarang</a><a
                                            class="btn btn-white-outline" href="#pricing">Pilih Program
                                            <svg class="lucide lucide-arrow-up-right"
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M7 7h10v10"></path>
                                                <path d="M7 17 17 7"></path>
                                            </svg></a></div>
                                    {{-- <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400"><span class="logos-title text-uppercase mb-4 d-block">Trusted by major companies worldwide</span>
                      <div class="logos-images d-flex gap-4 align-items-center"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-air-bnb__black.svg" alt="Company 1" style="width: 110px;"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-ibm__black.svg" alt="Company 2" style="width: 80px;"><img class="img-fluid js-img-to-inline-svg" src="assets/images/logo/actual-size/logo-google__black.svg" alt="Company 3" style="width: 110px;"></div>
                    </div> --}}

                                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features"
                                        data-aos="fade-up" data-aos-delay="400">
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
                                        <p>Adalah lembaga pendidikan dan pelatihan yang berkomitmen untuk mencetak
                                            generasi unggul dengan memberikan keterampilan praktis yang relevan dengan
                                            perkembangan dunia industri. Berdiri dengan visi untuk menciptakan individu
                                            yang terampil dan siap bersaing di pasar global, kami menyediakan berbagai
                                            program pelatihan yang dirancang untuk memenuhi kebutuhan tenaga kerja yang
                                            berkualitas.</p>
                                        {{-- <p>Our cutting-edge platform ensures your transactions are safe, streamlined, and easy to manage, empowering you to take control of your financial journey with confidence and convenience.</p> --}}
                                    </div><br><br>
                                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features"
                                        data-aos="fade-up" data-aos-delay="400">
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Fasilitas
                                                Lengkap & Nyaman</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Pelatihan
                                                Budaya & Etika Kerja Jepang</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Proses
                                                Pemberangkatan Terstruktur </span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Terdaftar
                                                Resmi & Legal</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Pembelajaran
                                                Bahasa Jepang N5-N3</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text"> Dibimbing
                                                Mentor Berpengalaman</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                    src="{{ asset('images/tentang.png') }}" alt="FreeBootstrap.net image placeholder"
                                    data-aos="fade-up" data-aos-delay="0">
                                <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <div class="mission-icon text-center rounded-circle"><i
                                            class="bi bi-lightbulb fs-4"></i></div>
                                    <div>
                                        <h3 class="text-uppercase fw-bold">Komitmen</h3>
                                        <p class="fs-5 mb-0">Kami berkomitmen untuk menjadi mitra terbaik bagi para
                                            pemuda Indonesia yang ingin bekerja di Jepang. Dengan pendekatan
                                            pembelajaran yang menyeluruh dan bimbingan penuh, kami siap mengantarkan
                                            Anda meraih mimpi hingga Negeri Sakura</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About-->

            <!-- ======= Features =======-->
            <section class="section features__v2" id="features">
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
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-graph-up fs-4"></i></div>
                                                        <h3 class="fs-6 fw-bold mb-3" style="color: white">Penempatan
                                                            Legal & Resmi ke Jepang</h3>
                                                        <p>Kami bekerja sama dengan lembaga resmi untuk memastikan
                                                            proses pemagangan sesuai aturan dan legalitas</p>
                                                    </div>
                                                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-headset fs-4"></i></div>
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
            </section>
            <!-- End Features-->
            <section id="clients" class="clients section" style="background-color: #B5E9FF;">
                <div class="container" data-aos="fade-up">
                    <div class="clients-slider">
                        <div class="clients-track">
                            @php
                                $logos = [
                                    '1.png',
                                    '2.png',
                                    '3.png',
                                    '4.png',
                                    '5.png',
                                    '1.png',
                                    '2.png',
                                    '3.png',
                                    '4.png',
                                    '5.png',
                                    '1.png',
                                    '2.png',
                                    '3.png',
                                    '4.png',
                                    '5.png',
                                ];
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

            <!-- ======= Pricing =======-->
           <section class="section pricing__v2" id="pricing">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-10 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Program Pelatihan</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Pelatihan dan Magang di LPK Yoshi Sakatana Mandiri</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    LPK Yoshi Sakatana Mandiri menawarkan berbagai program pelatihan dan magang yang dirancang untuk memberikan keterampilan praktis yang relevan dengan industri.
                </p>
            </div>
        </div>

        <div class="row">
            <!-- Bimbingan TG -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5 rounded-4 price-table h-100">
                    <h3>Bimbingan TG</h3>
                    <p>Pelatihan untuk persiapan Tokutei Ginou.</p>
                    <div class="price mb-4"><strong>18.000.000</strong><span>/ 6 Bulan</span></div>
                    <div><a class="btn" data-bs-toggle="modal" data-bs-target="#modalProgram">Detail</a>
</div>
                </div>
            </div>

            <!-- Magang Swasta -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5 rounded-4 price-table h-100">
                    <h3>Magang Swasta</h3>
                    <p>Pengalaman langsung di perusahaan mitra.</p>
                    <div class="price mb-4"><strong>10.000.000</strong><span>/ 3 Bulan</span></div>
                    <div><a class="btn" data-bs-toggle="modal" data-bs-target="#modalProgram">Detail</a>
</div>
                </div>
            </div>

            <!-- IM Japan -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5 rounded-4 price-table h-100">
                    <h3>IM Japan</h3>
                    <p>Program resmi magang ke Jepang.</p>
                    <div class="price mb-4"><strong>Gratis</strong><span>/ 6 Bulan</span></div>
                    <div><a class="btn" data-bs-toggle="modal" data-bs-target="#modalProgram">Detail</a>
</div>
                </div>
            </div>
        </div>
    </div>

  

<!-- Modal: Contoh Detail Program -->
<div class="modal fade" id="modalProgram" tabindex="-1" aria-labelledby="modalProgramLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="card text-white" style="background-color: #002355;">
        <div class="card-body px-4 py-4">

          <h5 class="fw-bold mb-2" id="modalProgramLabel" style="color: white">Lorem Ipsum</h5>
          <p class="small">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
          </p>

          <ul class="list-unstyled small mt-3 mb-4" style="line-height: 1.5;">
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
            <li>• Lorem Ipsum is simply dummy text of the printing</li>
          </ul>

         
            <a href="{{ route('FormDaftar.form') }}" class="btn btn-light text-dark fw-semibold px-4 py-2" style="background-color: #cce9ff;">Daftar</a>
        

        </div>
      </div>
    </div>
  </div>
</div>


</section>

             {{-- <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <div class="p-5 rounded-4 price-table popular h-100">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="mb-3">Business</h3>
                      <p>Optimize your business financial operations with our tailored business plans.</p>
                      <div class="price mb-4"><strong class="me-1">$29</strong><span>/ month</span></div>
                      <div><a class="btn btn-white hover-outline" href="#">Get Started</a></div>
                    </div>
                    <div class="col-md-6 pricing-features">
                      <h4 class="text-uppercase fw-bold mb-3">Features</h4>
                      <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Personalized financial insights and reports</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Priority customer support</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Access to exclusive investment opportunities</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>AI-driven financial recommendations</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> --}}
            <!-- End Pricing-->

            <!-- ======= How it works =======-->
            <section class="section howitworks__v1" id="how-it-works">
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
            </section>
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
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-10 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Testimoni</span>
                            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Testimoni Peserta LPK Yoshi
                                Sakatana Mandiri</h2>
                            <p data-aos="fade-up" data-aos-delay="200">Cerita Nyata dari Mereka yang Telah Berhasil
                                Mewujudkan Mimpi ke Jepang
                                Kami bangga menjadi bagian dari perjalanan mereka. Berikut adalah pengalaman para
                                peserta yang telah mengikuti pelatihan dan berhasil menembus dunia kerja di Jepang
                                melalui LPK Yoshi Sakatana Mandiri.</p>
                        </div>
                    </div>
                    <div class="row g-4" data-masonry="{&quot;percentPosition&quot;: true }">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('nova/assets/images/person-sq-2-min.jpg') }}"
                                            alt="FreeBootstrap.net image placeholder"></div>
                                    <div class="lh-base"><strong class="d-block">John Davis</strong><span>Small
                                            Business Owner</span></div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo;
                                    This platform has completely transformed the way I manage my business finances. The
                                    real-time transaction tracking and seamless payment options have saved me so much
                                    time and effort!
                                    &rdquo;
                                </blockquote>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('nova/assets/images/person-sq-1-min.jpg') }}"
                                            alt="FreeBootstrap.net image placeholder"></div>
                                    <div class="lh-base"><strong class="d-block">Emily
                                            Smith</strong><span>Freelancer</span></div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo;
                                    As a freelancer, managing my finances can be overwhelming. The budgeting tools and
                                    personalized insights have made it so much easier to stay on top of my expenses and
                                    plan for the future.
                                    &rdquo;
                                </blockquote>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="testimonial rounded-4 p-4">
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="{{ asset('nova/assets/images/person-sq-1-min.jpg') }}"
                                            alt="FreeBootstrap.net image placeholder"></div>
                                    <div class="lh-base"><strong class="d-block">Emily
                                            Smith</strong><span>Freelancer</span></div>
                                </div>
                                <blockquote class="mb-3">
                                    &ldquo;
                                    As a freelancer, managing my finances can be overwhelming. The budgeting tools and
                                    personalized insights have made it so much easier to stay on top of my expenses and
                                    plan for the future.
                                    &rdquo;
                                </blockquote>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Testimonials-->


            {{-- berita --}}

            <section class="section testimonials__v2 " id="testimonials">
                <div class="container">
                    <div class="row g-4" data-masonry='{"percentPosition": true }'>

                        <!-- BERITA (lebih besar) -->
                        <div class="col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <div><span class="subtitle text-uppercase mb-4">Berita</span></div>
                            <div class="testimonial rounded-4 p-4">
                                <div class="row g-3">
                                    <!-- Kartu Berita 1 -->
                                    <div class="col-6" data-aos="fade-up" data-aos-delay="0">
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
                                <h4 class="text-center">Selengkapnya ></h4>
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
                                        </div>
                                        <h4 class="text-center mt-3">Selengkapnya ></h4>
                                    </div>
                                </div>

                                <!-- PENGUMUMAN -->
                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div><span class="subtitle text-uppercase mb-4">Pengumuman</span></div>
                                    <div class="testimonial rounded-4 p-4">
                                        @for ($i = 0; $i < 3; $i++)
                                            <div class="rounded-4 overflow-hidden mb-3" style="height: 100px;">
                                                <img src="{{ asset('images/qqq.png') }}" alt=""
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                            </div>
                                        @endfor
                                        <h4 class="text-center mt-3">Selengkapnya ></h4>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

    </div>
    </div>
    </section>

 <section class="text-white d-flex align-items-center" style="background-color: #00255c; min-height: 350px;">
    <div class="container text-center">
        <div class="mx-auto" style="max-width: 1100px;">
            <h2 class="fw-bold mb-4" style="font-size: 2.5rem; color: white;">Siap Daftar LPK?</h2>
            <p class="mb-4" style="font-size: 1.2rem;">
                Inilah saatnya memulai langkah menuju masa depan yang lebih baik! Bergabunglah bersama ratusan alumni kami
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
                    Kami percaya bahwa setiap proses adalah perjalanan berharga. Inilah cuplikan kegiatan kami yang menunjukkan semangat, kebersamaan, dan dedikasi peserta dalam mengejar impian ke Jepang.
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
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 1"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="col-md-4">
                        <div class="overflow-hidden rounded-4" style="height: 200px;">
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 2"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="col-md-4">
                        <div class="overflow-hidden rounded-4" style="height: 200px;">
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 3"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Baris 2 bisa ditambah lagi -->
                    <div class="col-md-4">
                        <div class="overflow-hidden rounded-4" style="height: 200px;">
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 4"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="overflow-hidden rounded-4" style="height: 200px;">
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 4"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="overflow-hidden rounded-4" style="height: 200px;">
                            <img src="{{ asset('images/tentang.png') }}"
                                 alt="Gallery 4"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Tambah lagi sesuka kamu -->

                </div>
                 <h4 class="text-center mt-3">Selengkapnya ></h4>
            </div>
        </div>
    </div>
</section>


    <!-- ======= FAQ =======-->
    <section class="section faq__v2" id="faq">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                        data-aos="fade-up" data-aos-delay="0">FAQ</span>
                    <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Frequently Asked
                        Questions</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Utilize our tools to develop your concepts and
                        bring your vision to life. Once complete, effortlessly share your creations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-content">
                        <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne"> What services does your web
                                        agency offer? </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseOne">
                                    <div class="accordion-body">Our web agency offers a comprehensive range of
                                        services including web design and development, e-commerce solutions, SEO
                                        optimization, content creation, website maintenance, and digital
                                        marketing strategies. We tailor our services to meet the unique needs of
                                        each client, ensuring a customized approach to every project.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"> How
                                        much does it cost to build a website? </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo">
                                    <div class="accordion-body">The cost of building a website can vary widely
                                        depending on the complexity, features, and specific requirements of your
                                        project. We offer several pricing packages to accommodate different
                                        budgets and needs. After an initial consultation, we can provide a
                                        detailed quote based on your specific goals and objectives.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"> How long
                                        does it take to
                                        design and develop a website? </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree">
                                    <div class="accordion-body">The timeline for designing and developing a
                                        website depends on the project&apos;s complexity and scope. Typically, a
                                        standard business website takes about 4-6 weeks to complete, while more
                                        complex projects like e-commerce sites or custom applications may take
                                        longer. We work closely with our clients to establish a realistic
                                        timeline and keep you informed throughout the process.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFour"> Will my
                                        website be
                                        mobile-friendly? </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFour">
                                    <div class="accordion-body">Absolutely! All the websites we design and
                                        develop are fully responsive, meaning they are optimized to work
                                        seamlessly across all devices, including desktops, tablets, and
                                        smartphones. Ensuring a great user experience on mobile devices is a top
                                        priority in our development process.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFive"> Do you
                                        provide ongoing
                                        support and maintenance for websites? </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFive">
                                    <div class="accordion-body">Yes, we offer ongoing support and maintenance
                                        services to ensure your website remains up-to-date, secure, and
                                        functioning smoothly. Our maintenance packages can include regular
                                        updates, security monitoring, backups, and technical support to address
                                        any issues that may arise. We&apos;re here to help you keep your website
                                        running efficiently long after it&apos;s launched.</div>
                                </div>
                            </div>
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
 @endsection
