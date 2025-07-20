@extends('layout.landing')

@section('title', 'Yoshi Sakatana Mandiri')

@section('content')
<section class="hero__v6 section" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-15 mb-5">
                <span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">Selamat datang</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Form Pendaftaran</h2>
                <p data-aos="fade-up" data-aos-delay="200">Silakan isi data berikut, kemudian tekan tombol daftar untuk mengirim ke WhatsApp kami.</p>

                <div class="bg-white p-4 border rounded-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <form id="formPendaftaran" onsubmit="kirimWhatsApp(event)">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control bg-light" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="panggilan" class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control bg-light" id="panggilan" name="panggilan">
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="number" class="form-control bg-light" id="umur" name="umur">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control bg-light" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control bg-light" id="nik" name="nik">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control bg-light" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control bg-light" id="kota" name="kota">
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control bg-light" id="provinsi" name="provinsi">
                        </div>
                        <div class="mb-3">
                            <label for="kodepos" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control bg-light" id="kodepos" name="kodepos">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select bg-light" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="" disabled selected>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program yang Diikuti</label>
                            <input type="text" class="form-control bg-light" id="program" name="program">
                        </div>
                        <div class="mb-3">
                            <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja</label>
                            <textarea class="form-control bg-light" id="pengalaman_kerja" name="pengalaman_kerja" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="nama_ortu" class="form-label">Nama Orang Tua/Wali</label>
                            <input type="text" class="form-control bg-light" id="nama_ortu" name="nama_ortu">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_ortu" class="form-label">Alamat Orang Tua/Wali</label>
                            <input type="text" class="form-control bg-light" id="alamat_ortu" name="alamat_ortu">
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua/Wali</label>
                            <input type="text" class="form-control bg-light" id="pekerjaan_ortu" name="pekerjaan_ortu">
                        </div>
                        <div class="mb-3">
                            <label for="nohp_ortu" class="form-label">No HP Orang Tua / Siswa</label>
                            <input type="text" class="form-control bg-light" id="nohp_ortu" name="nohp_ortu">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control bg-light" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control bg-light" id="telepon" name="telepon">
                        </div>

                        <div class="d-flex gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Script Kirim WhatsApp -->
<script>
    function kirimWhatsApp(event) {
        event.preventDefault();

        const form = event.target;
        const data = new FormData(form);
        const entries = [...data.entries()];
        let pesan = 'Halo Admin, saya ingin mendaftar. Berikut data saya:\n\n';

        entries.forEach(([key, value]) => {
            if (value) {
                const label = form.querySelector(`[for="${key}"]`)?.innerText || key;
                pesan += `${label}: ${value}\n`;
            }
        });

        const noHP = '6282216232156'; // Ubah dari +62 ke format wa.me
        const url = `https://wa.me/${noHP}?text=${encodeURIComponent(pesan)}`;
        window.open(url, '_blank');

        alert("Data berhasil dikirim ke WhatsApp!");
        form.reset();
    }
</script>
@endsection
