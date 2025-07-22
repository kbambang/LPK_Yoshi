@extends('layout.landing')

@section('title', 'Visi dan Misi - LPK Yoshi Sakatana Mandiri')

@section('content')
<style>
    .bg-teal {
        background-color: #2b7a78;
    }

    .badge-custom {
        font-size: 0.75rem;
        padding: 0.4em 0.75em;
        border-radius: 6px;
        margin-top: 30px;
        display: inline-block;
    }

    .badge-subtitle {
        background: color-mix(in srgb, #B5E9FF, transparent 70%);
        color: #00265C;
        display: inline-block;
        padding: 5px 12px;
        border-radius: 7px;
        font-weight: 600;
        font-size: 0.75rem;
        margin-bottom: 10px;
    }

    .visi-misi-section {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .visi-misi-card {
        background-image: url('https://images.unsplash.com/photo-1570294646119-27ce4f1178b7?auto=format&fit=crop&w=1200&q=60');
        background-size: cover;
        background-position: center;
        padding: 40px;
        border-radius: 16px;
        color: #000000;
        position: relative;
        overflow: hidden;
    }

    .visi-misi-card::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 16px;
        z-index: 0;
    }

    .visi-misi-card * {
        position: relative;
        z-index: 1;
    }

    .visi-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #2b7a78;
    }

    .misi-item {
        margin-bottom: 1rem;
        position: relative;
        padding-left: 1.5rem;
    }

    .misi-item::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #2b7a78;
        font-weight: bold;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #000;
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }

    @media (max-width: 768px) {
        .visi-misi-section {
            padding-top: 80px;
            padding-bottom: 80px;
        }
    }
</style>

<div class="container visi-misi-section">
    <!-- Badge + Judul -->
    <span class="badge-subtitle">Visi dan Misi</span>
    <h2 class="mb-2 fw-bold text-dark">Visi dan Misi</h2>
    <p class="text-muted mb-4">Komitmen LPK Yoshi Sakatana Mandiri dalam membentuk SDM Unggul ke Jepang</p>

    <!-- Card Background ala Jepang -->
    <div class="visi-misi-card mt-3">
        <div class="visi-misi-text">
            <h3 class="visi-title mb-3">Visi</h3>
            <p class="section-subtitle">
                Mewujudkan Lembaga Pelatihan Kerja yang mempunyai peran dalam meningkatkan keterampilan bagi calon tenaga kerja magang dan skill dalam menghadapi era industrialisasi, informasi dan globalisasi.
            </p>

            <h3 class="visi-title mt-5 mb-3">Misi</h3>
            <div class="section-subtitle">
                <div class="misi-item">
                    Pendidikan dan Pelatihan kerja khususnya Bahasa dan budaya Jepang untuk mewujudkan Visi Program, serta menghasilkan lulusan yang berkualitas siap kerja atau berwiraswasta.
                </div>
                <div class="misi-item">
                    Menjalin Kerjasama dengan lembaga S.O di Indonesia yang akan menempatkan para siswa-siswi yang terpilih di Perusahaan yang ada di Jepang, dalam usaha memberdayakan tenaga-tenaga terampil dari Indonesia.
                </div>
                <div class="misi-item">
                    Menyiapkan peserta yang siap kerja dan mandiri melalui pembinaan karakter dan keterampilan.
                </div>
                <div class="misi-item">
                    Menjalin kerja sama dengan lembaga dalam dan luar negeri untuk memperluas akses pemagangan dan kerja.
                </div>
                <div class="misi-item">
                    Memberikan pendampingan kepada peserta dalam proses adaptasi sebelum dan sesudah ke Jepang.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
