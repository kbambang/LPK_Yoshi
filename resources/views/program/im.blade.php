  @extends('layout.landing')

  @section('title', 'Yoshi Sakatana Mandiri')

  @section('content')
      <section class="hero__v6 section">
          <div class="container ">

              <div class="row justify-content-center">

                  <div class="col-lg-15 mb-5">



                      <div class="col-md-10 text-center mx-auto"><span class="hero-subtitle text-uppercase mb-3"
                              data-aos="fade-up" data-aos-delay="0">Program</span>
                          <h2 data-aos="fade-up" data-aos-delay="100">Program Pemagangan Pemerintah
                              ( IM JAPAN )</h2>

                      </div>

                  </div>
                  <p style="font-size: 15px" data-aos="fade-up" data-aos-delay="200">
                      Program Pemerintah/IM Japan merupakan program pemagangan
                      ke Jepang di adakan oleh pemerintah Indonesia yang bekerjasama
                      dengan pemerintah Jepang. Program ini bertujuan untuk membuka
                      peluang bagi masyarakat Indonesia yang ingin pergi ke Jepang.
                      Program IM Japan Memilki persyaratan dan seleksi yang ketat dan
                      sistem gugur. Dimana program ini pemerintah memberikan subsidi
                      untuk biaya pendidikan dan pemberangkatan ke Jepang. Program
                      ini dilakukan setiap 2 kali dalam setahun dan diikuti banyak peserta
                      dari berbagi daerah yang ada di Jawa Barat dan sekitarnya.
                      Program ini memiliki beberapa tahapan yang harus diikuti oleh
                      calon peserta IM Japan. Untuk Sektor kerja yang di butuhkan antara
                      lain : </p>





                  <ul class="list-unstyled small mt-3 mb-4" style="line-height: 1.5; font-size: 15px;" data-aos="fade-up"
                      data-aos-delay="200">
                      <li>• Caregiver/Kaigo (Perawat Lansia)</li>
                      <li>• Pengolahan Makan</li>
                      <li>• Restoran</li>
                      <li>• Manufaktur</li>
                      <li>• Otomotif</li>
                      <li>• Cleaning Building</li>
                      <li>• Kontruksi</li>
                      <li>• Kelistrikan</li>
                      <li>• Furniture</li>
                      <li>• Pengecetan</li>
                      <li>• Permesinan, Dll</li>
                  </ul><br>




                  <div class="col-md-10 text-center mx-auto">
                      <h2 data-aos="fade-up" data-aos-delay="100">KEUNGGULAN PROGRAM IM JAPAN</h2>

                  </div>
              </div>
              <ul class="list-unstyled small mt-3 mb-4" style="line-height: 1.5; font-size: 15px;" data-aos="fade-up"
                  data-aos-delay="200">
                  <li>1 AKOMODASI DAN KONSUMSI
                      SAAT PELATIHAN TAHAP 2</li>
                  <li>2 SUBSIDI PELATIHAN PRA
                      KEBERANGKATAN</li>
                  <li>3 TIKET PESAWAT PULANG PERGI</li>
                  <li>4 ASURANSI KESEHATAN
                      DAN KECELAKAAN KERJA</li>
                  <li>5 MENDAPATKAN
                      TUNJANGAN DAN UANG
                      SAKU SEKITAR 9 JT-13 JT</li>
                  <li>6 DANA USAHA MANDIRI
                      50JT-100 JT</li>
              </ul>

              <p style="font-size: 15px" data-aos="fade-up" data-aos-delay="200">
                  Keterangan : Apabila Siswa tidak Lolos
                  dalam proses seleksi maka akan diahlikan
                  ke program pemagangan Jalur Swasta. </p>

            <div class="container py-5" data-aos="fade-up" data-aos-delay="200">
  <div class="row mb-5">
    <div class="col-md-10 text-center mx-auto">
      <h2>Alur Program IM JAPAN</h2>
    </div>
  </div>

  <div class="row gx-2 gy-4 justify-content-center">

    @for ($i = 1; $i <= 10; $i++)
      <div class="col-12 col-md-auto d-flex align-items-center flex-column flex-md-row text-center text-md-start">
        <div class="step-card text-white px-3 py-3 rounded shadow-sm" style="background-color: #002355; white-space: nowrap;">
          @if ($i == 1)
            1. Pendaftaran
          @elseif ($i == 2)
            2. Pendidikan Pra Test (±2 Bulan)
          @elseif ($i == 3)
            3. Seleksi IM JAPAN
            <ul class="mb-0">
              <li>FISIK / SMAPTA</li>
              <li>MATEMATIKA</li>
              <li>BAHASA JEPANG DASAR</li>
              <li>MCU</li>
            </ul>
          @elseif ($i == 4)
            4. Wawancara Program
          @elseif ($i == 5)
            5. Pendidikan Daerah (±3 Bulan)
          @elseif ($i == 6)
            6. Wawancara dengan User Jepang
          @elseif ($i == 7)
            7. Pendidikan Pusat (±2 Bulan)
          @elseif ($i == 8)
            8. Berangkat ke Jepang
          @elseif ($i == 9)
            9. Kerja / Magang 3-5 Tahun
          @elseif ($i == 10)
            10. Pulang ke Indonesia
          @endif
        </div>

        @if ($i < 10)
          <div class="mt-2 mt-md-0 mx-0 mx-md-2">
            <!-- Panah horizontal (desktop) -->
            <i class="bi bi-arrow-right-circle fs-3 text-primary d-none d-md-inline"></i>
            <!-- Panah vertikal (mobile) -->
            <i class="bi bi-arrow-down-circle fs-3 text-primary d-inline d-md-none"></i>
          </div>
        @endif
      </div>
    @endfor

  </div>
</div>
    


              <p style="font-size: 15px" data-aos="fade-up" data-aos-delay="200">
                  Keterangan : </p>

              <ul class="list-unstyled small mt-3 mb-4" style="line-height: 1.5; font-size: 15px;" data-aos="fade-up"
                  data-aos-delay="200">
                  <li>• Setiap test selama pendidikan bersifat sistem gugur</li>
                  <li>• Wawancara dengan user Jepang sebanyak 3x percobaan</li>
                  <li>• Pemagang yang tiba di Jepang akan berada di asrama / Senta selama satu bulan sebelum masuk kerja /
                      masuk ke
                      perusahaan.</li>
              </ul>

              <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
                  <a href="{{ route('FormDaftar.form') }}" class="btn btn-lg fw-semibold px-4 py-2"
                      style="background-color: #002355; "">
                      Daftar Sekarang
                  </a>
              </div>


          </div>
          </div>
          </div>
          </div>
          <!-- End Hero-->
      </section>


  @endsection
