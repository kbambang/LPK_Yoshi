  @extends('layout.landing')

  @section('title', 'Yoshi Sakatana Mandiri')

  @section('content')
      <section class="hero__v6 section">
          <div class="container ">

              <div class="row justify-content-center">

                  <div class="col-lg-15 mb-5">


                      <span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">Selamat datang</span>
                      <h3 class="hero-titlee mb-3" data-aos="fade-up">
                          <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">
                              Berita
                          </h2>
                          <p data-aos="fade-up" data-aos-delay="200">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the
                              industry's standard dummy text ever since the 1500s, </p>


                          <div class="row g-3">
                              <!-- Kartu Berita 1 -->
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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

                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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
                          </div>
                          <div class="row g-3">
                              <!-- Kartu Berita 1 -->
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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

                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
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
                          </div>





                  </div>
              </div>

          </div>
          </div>
          <!-- End Hero-->
      </section>


  @endsection
