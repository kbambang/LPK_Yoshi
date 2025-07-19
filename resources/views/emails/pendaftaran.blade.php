@extends('layout.landing')

@section('title', 'Yoshi Sakatana Mandiri')

@section('content')
<h2>Data Pendaftaran Baru</h2>
<ul>
    <li>Nama: {{ $data['nama'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>No HP: {{ $data['telepon'] }}</li>
    <li>Alamat: {{ $data['alamat'] }}</li>
    <!-- tambahkan semua data lainnya sesuai kebutuhan -->
</ul>


    
@endsection