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
                              Selamat atas pencapaian yang yang telah di raih
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
                                      <div class="rounded-4 overflow-hidden mb-2" >
                                          <img src="{{ asset('images/omo.png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                      <!-- Konten -->
                                     
                                  </div>
                              </div>

                              <!-- Kartu Berita 2 -->
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
                                  <div class="testimonial p-2 rounded-4">
                                      <div class="rounded-4 overflow-hidden mb-2">
                                          <img src="{{ asset('images/omo (1).png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                     
                                  </div>
                              </div>

                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
                                  <div class="testimonial p-2 rounded-4">
                                      <div class="rounded-4 overflow-hidden mb-2">
                                          <img src="{{ asset('images/omo (2).png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row g-3">
                              <!-- Kartu Berita 1 -->
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
                                  <div class="testimonial p-2 rounded-4">
                                      <!-- Gambar -->
                                      <div class="rounded-4 overflow-hidden mb-2">
                                          <img src="{{ asset('images/omo (3).png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                      <!-- Konten -->
                                   
                                  </div>
                              </div>

                              <!-- Kartu Berita 2 -->
                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
                                  <div class="testimonial p-2 rounded-4">
                                      <div class="rounded-4 overflow-hidden mb-2">
                                          <img src="{{ asset('images/omo (4).png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                     
                                  </div>
                              </div>

                              <div class="col-4" data-aos="fade-up" data-aos-delay="0">
                                  <div class="testimonial p-2 rounded-4">
                                      <div class="rounded-4 overflow-hidden mb-2">
                                          <img src="{{ asset('images/omo (5).png') }}" alt=""
                                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                      </div>
                                    
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
