@extends('layout.landing')

@section('title', 'Sejarah - LPK Yoshi Sakatana Mandiri')

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

    .sejarah-section {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .sejarah-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    .sejarah-card {
        background-image: url('https://images.unsplash.com/photo-1570294646119-27ce4f1178b7?auto=format&fit=crop&w=1200&q=60');
        background-size: cover;
        background-position: center;
        padding: 40px;
        border-radius: 16px;
        color: #000000;
        position: relative;
        overflow: hidden;
    }

    .sejarah-card::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 16px;
        z-index: 0;
    }

    .sejarah-card * {
        position: relative;
        z-index: 1;
    }

    .sejarah-text p {
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }

    @media (max-width: 768px) {
        .sejarah-section {
            padding-top: 80px;
            padding-bottom: 80px;
        }
    }
</style>

<div class="container sejarah-section">
    <!-- Badge + Judul -->
    <span class="badge bg-primary mb-3">Sejarah</span>
    <h2 class="mb-2 fw-bold text-dark">Sejarah</h2>
    <p class="text-muted mb-4">Sejarah Terbentuknya LPK Yoshi Sakatana Mandiri</p>

    <!-- Gambar -->
    <img src="{{ asset('images/tentang.png') }}" alt="Sejarah LPK" class="sejarah-image mb-5">

    <!-- Isi dalam Card ala Jepang -->
    <div class="sejarah-card mt-3">
        <div class="sejarah-text">
            <p>
                <strong>LPK Yoshi Sakatana Mandiri</strong> merupakan Lembaga Pendidikan dan Keterampilan (LPK) non-formal yang berdiri pada <strong>13 Juni 2022</strong>. Lembaga ini hadir untuk menjawab kebutuhan akan Sumber Daya Manusia (SDM) yang siap kerja, khususnya di Jepang, melalui program pelatihan bahasa, budaya, dan etos kerja khas Jepang.
            </p>
            <p>
                Program pelatihan ini disesuaikan dengan kebutuhan industri Jepang, dan dilaksanakan bekerja sama dengan <strong>Kementerian Ketenagakerjaan Republik Indonesia (Kemnaker RI)</strong> melalui skema pemagangan <strong>IM Japan</strong> dan jalur Swasta (S.O).
            </p>
            <p>
                Berada di bawah naungan <strong>Yayasan Yoshi Sakatana Mandiri</strong>, LPK ini telah mengantongi izin resmi operasional dan menjadi bagian penting dalam menyiapkan generasi muda Indonesia untuk bersaing di dunia kerja internasional.
            </p>
            <p>
                Seiring meningkatnya kebutuhan tenaga kerja di Jepang, LPK Yoshi Sakatana Mandiri memainkan peran strategis dalam membekali peserta dengan pelatihan menyeluruh: mulai dari <strong>bahasa Jepang, budaya kerja, pembentukan karakter dan disiplin, hingga keterampilan praktis</strong> yang relevan dengan dunia kerja.
            </p>
            <p>
                LPK ini tidak hanya mengajarkan teknis kerja, tetapi juga menanamkan nilai <strong>kemandirian, mental tangguh, dan sikap profesional</strong> agar para peserta siap beradaptasi dalam kehidupan kerja dan sosial di Jepang.
            </p>
            <p>
                Dengan komitmen kuat terhadap kualitas dan integritas, LPK Yoshi Sakatana Mandiri terus berkontribusi dalam mencetak SDM unggul yang mampu bersaing di kancah global.
            </p>
        </div>
    </div>
</div>
@endsection
