@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <div class="text-center py-16">
        <p class="text-6xl font-bold text-blue-600 mb-4">404</p>
        <h1 class="text-2xl font-semibold mb-2">Ups, halaman tidak ditemukan</h1>
        <p class="text-gray-600 mb-8">
            Sepertinya alamat yang kamu tuju salah ketik atau halamannya sudah dipindahkan.
            Tenang, kamu tidak tersesat. Yuk kembali ke beranda.
        </p>
        <a href="{{ route('home') }}"
           class="inline-block bg-teal-600 text-white px-5 py-2 rounded hover:bg-blue-700">
            Kembali ke Beranda
        </a>
    </div>
@endsection 