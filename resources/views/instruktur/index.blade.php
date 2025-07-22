@extends('layout.landing')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .instruktur-section {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .breadcrumb-custom {
        background: color-mix(in srgb, #B5E9FF, transparent 70%);
        color: #00265C;
        display: inline-block;
        padding: 5px 12px;
        border-radius: 7px;
        font-weight: 600;
        font-size: 0.75rem;
        margin-bottom: 10px;
        font-family: 'Noto Sans JP', sans-serif;
    }

    .instruktur-card {
        border-radius: 12px;
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
        width: 250px;
        margin: 0 auto;
        position: relative;
        padding-bottom: 10px;
        transition: all 0.3s ease;
        min-height: 380px;
    }

    .instruktur-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: #00265C;
        z-index: 1;
        border-radius: 12px;
    }

    .instruktur-card * {
        position: relative;
        z-index: 2;
    }

    .instruktur-card img {
        object-fit: cover;
        width: 100%;
        height: 240px;
        border-radius: 8px 8px 0 0;
    }

    .instruktur-nama {
        font-weight: 600;
        margin-top: 15px;
        margin-bottom: 5px;
        text-align: center;
        font-family: 'Noto Sans JP', sans-serif;
    }

    .instruktur-profesi {
        font-size: 0.9rem;
        color: #f0f0f0;
        text-align: center;
    }

    .sosmed-icons {
        text-align: center;
        margin-top: 10px;
    }

    .sosmed-icons a {
        margin: 0 6px;
        font-size: 1.3rem;
        color: #fff;
    }

    .sosmed-icons a:hover {
        color: #ffc107;
    }

    .instruktur-detail {
        display: none;
        text-align: center;
        padding: 10px 20px;
        font-size: 0.9rem;
        color: #ddd;
    }

    .instruktur-card.show-detail .instruktur-detail {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (min-width: 768px) {
        .row-cols-md-2 > * {
            flex: 0 0 auto;
            width: 50%;
        }
    }
</style>

<div class="container instruktur-section mb-5 pb-5">
    <span class="breadcrumb-custom">Instruktur</span>
    <h2 class="mb-4 fw-bold">Instruktur</h2>
    <p class="text-muted mb-5">Tim instruktur berpengalaman siap membimbing Anda menuju sukses.</p>

    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">

        @foreach ([
            ['nama' => 'Biki Awarudin', 'profesi' => 'Profesor N2', 'foto' => 'images/biki.png'],
            ['nama' => 'Febrian Joko', 'profesi' => 'Profesor N1', 'foto' => 'images/Febri.jpeg'],
        ] as $instruktur)
        <div class="col d-flex justify-content-center">
            <div class="card shadow-sm instruktur-card"
                 onmouseenter="showOnlyThisDetail(this)"
                 onmouseleave="hideAllDetails()">
                <img src="{{ asset($instruktur['foto']) }}" alt="{{ $instruktur['nama'] }}" onerror="this.src='https://via.placeholder.com/300x180?text=Foto+Tidak+Tersedia'">
                <div class="instruktur-nama">{{ $instruktur['nama'] }}</div>
                <div class="instruktur-profesi">{{ $instruktur['profesi'] }}</div>
                <div class="sosmed-icons">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-tiktok"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                </div>
                <div class="instruktur-detail">
                    {{ $instruktur['nama'] }} adalah seorang {{ $instruktur['profesi'] }} yang telah memiliki pengalaman bertahun-tahun di bidangnya.
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<script>
    function showOnlyThisDetail(el) {
        document.querySelectorAll('.instruktur-card').forEach(card => {
            card.classList.remove('show-detail');
        });
        el.classList.add('show-detail');
    }

    function hideAllDetails() {
        document.querySelectorAll('.instruktur-card').forEach(card => {
            card.classList.remove('show-detail');
        });
    }
</script>
@endsection
