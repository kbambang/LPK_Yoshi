@extends('layout.landing')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .instruktur-section {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .instruktur-card {
        border-radius: 12px;
        {{-- background-image: url('https://images.unsplash.com/photo-1586414209403-a7a0cb9dcd1f?auto=format&fit=crop&w=600&q=60'); --}}
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
        min-height: 360px;
        position: relative;
        padding-bottom: 10px;
        transition: all 0.3s ease;
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
        height: 180px;
        border-radius: 8px 8px 0 0;
        display: block;
        cursor: pointer;
    }

    .instruktur-nama {
        font-weight: 600;
        margin-top: 15px;
        margin-bottom: 5px;
        text-align: center;
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
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (min-width: 768px) {
        .row-cols-md-4 > * {
            flex: 0 0 auto;
            width: 25%;
        }
    }
</style>

<div class="container instruktur-section mb-5 pb-5">
    <span class="badge bg-primary mb-3">Instruktur</span>
    <h2 class="mb-4 fw-bold">Instruktur</h2>
    <p class="text-muted mb-5">Tim instruktur berpengalaman siap membimbing Anda menuju sukses.</p>

    <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach ([
            ['nama' => 'Biki Awarudin', 'profesi' => 'Profesor N2', 'foto' => 'images/biki.png'],
            ['nama' => 'Febrian Joko', 'profesi' => 'Profesor N1', 'foto' => 'images/Febri.jpeg'],
            ['nama' => 'Yuta Nakamura', 'profesi' => 'Sensei Bahasa Jepang', 'foto' => 'images/Yuta.jpg'],
            ['nama' => 'Sakura Tanaka', 'profesi' => 'Konsultan Karier', 'foto' => 'images/Sakura.jpg']
        ] as $instruktur)
        <div class="col">
            <div class="card shadow-sm instruktur-card" onclick="toggleDetail(this)" onmouseleave="hideDetail(this)">
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
    function toggleDetail(card) {
        card.classList.toggle('show-detail');
    }

    function hideDetail(card) {
        card.classList.remove('show-detail');
    }
</script>
@endsection
