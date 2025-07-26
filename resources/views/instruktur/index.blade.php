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

    .instruktur-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 8px; /* jarak antar card */
        justify-content: flex-start; /* rapat di kiri */
    }

    .instruktur-card {
        border-radius: 12px;
        background: #00265C;
        color: white;
        overflow: hidden;
        width: 180px;
        position: relative;
        min-height: 320px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s ease;
    }

    .instruktur-card:hover {
        transform: scale(1.03);
    }

    .instruktur-card img {
        object-fit: cover;
        width: 100%;
        height: 200px;
        border-radius: 8px 8px 0 0;
    }

    .instruktur-nama {
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 3px;
        text-align: center;
        font-family: 'Noto Sans JP', sans-serif;
        font-size: 0.95rem;
    }

    .instruktur-profesi {
        font-size: 0.8rem;
        color: #f0f0f0;
        text-align: center;
    }

    .sosmed-icons {
        text-align: center;
        margin-top: 5px;
    }

    .sosmed-icons a {
        margin: 0 4px;
        font-size: 1.1rem;
        color: #fff;
    }

    .sosmed-icons a:hover {
        color: #ffc107;
    }

    /* Detail overlay */
    .instruktur-detail {
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        background: rgba(0, 38, 92, 0.95);
        color: #fff;
        padding: 10px;
        text-align: center;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .instruktur-card.show-detail .instruktur-detail {
        left: 0; /* slide dari kanan ke kiri */
    }

    @media (max-width: 767px) {
        .instruktur-wrapper {
            justify-content: center;
        }
        .instruktur-card {
            width: 85%;
        }
    }
</style>

<div class="container instruktur-section mb-5 pb-5">
    <span class="breadcrumb-custom">Instruktur</span>
    <h2 class="mb-4 fw-bold">Instruktur</h2>
    <p class="text-muted mb-5">Tim instruktur berpengalaman siap membimbing Anda menuju sukses.</p>

    <div class="instruktur-wrapper">
        @foreach ([
            ['nama' => 'Biki Awarudin', 'profesi' => 'Profesor N2', 'foto' => 'images/biki.png'],
            ['nama' => 'Febrian Joko', 'profesi' => 'Profesor N1', 'foto' => 'images/Febri.jpeg'],
        ] as $instruktur)
        <div class="card shadow-sm instruktur-card">
            <img src="{{ asset($instruktur['foto']) }}" alt="{{ $instruktur['nama'] }}"
                 onerror="this.src='https://via.placeholder.com/300x180?text=Foto+Tidak+Tersedia'">
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
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('.instruktur-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('show-detail');
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('show-detail');
        });
    });
</script>
@endsection
