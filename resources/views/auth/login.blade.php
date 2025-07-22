@extends('layout.login')

@section('title', 'Login | LPK Yoshi Sakatana Mandiri')

@section('content')
<style>
    body {
        font-family: 'Noto Sans JP', sans-serif;
        background-color: #fff;
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow: hidden;
    }

    .login-container {
        display: flex;
        height: 100vh;
        width: 100%;
        position: relative;
    }

    .form-section,
    .image-section {
        flex: 1;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-section {
        background-color: #fff;
        z-index: 2;
    }

    .form-wrapper {
        width: 100%;
        max-width: 400px;
        padding: 40px;
        box-sizing: border-box;
    }

    .form-wrapper h1 {
        color: #00265C;
        margin-bottom: 10px;
        font-size: 2rem;
        text-align: center;
    }

    .form-wrapper .subtitle {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-wrapper label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
        color: #00265C;
    }

    .form-wrapper input {
        width: 100%;
        padding: 10px 14px;
        margin-bottom: 18px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 0.9rem;
    }

    .form-wrapper button {
        width: 100%;
        padding: 10px 14px;
        background-color: #00265C;
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
    }

    .form-wrapper button:hover {
        background-color: #001b40;
    }

    .image-section {
        position: relative;
        overflow: hidden;
        background-color: #00265C;
    }

    .image-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.75);
    }

    .kanji-center {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%) rotate(180deg);
    writing-mode: vertical-rl;
    text-orientation: upright;
    font-size: 8rem; /* bebas lo gas pol */
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: bold;
    color: red;
    opacity: 0.9;
    z-index: 3;
    pointer-events: none;
    display: flex;
    justify-content: center;
    align-items: center;
}


    @media (max-width: 768px) {
        .login-container {
            flex-direction: column;
        }

        .form-section,
        .image-section {
            width: 100%;
            height: 50vh;
        }

        .kanji-center {
            font-size: 3rem;
            transform: translate(-50%, -30%) rotate(180deg);
        }
    }
</style>

<section class="hero__v10 section">
    <div class="login-container">
        <!-- Form -->
        <div class="form-section">
            <div class="form-wrapper">
                <h1>ようこそ</h1>
                <div class="subtitle">Selamat datang di LPK Yoshi Sakatana Mandiri</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Masuk</button>
                </form>
            </div>
        </div>

        <!-- Kanji Tengah -->
        <div class="kanji-center">吉坂棚</div>

        <!-- Gambar -->
        <div class="image-section">
            <img src="{{ asset('images/shine1.jpeg') }}" alt="Gambar Jepang">
        </div>
    </div>
</section>
@endsection
