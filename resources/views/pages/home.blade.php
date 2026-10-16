@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1 class="text-3xl font-bold mb-4 text-emerald-900">Selamat datang di {{ config('app.name') }}</h1>
    <p class="text-gray-600">Ini adalah project pertama portofolio Laravel saya.</p>
    <a href="{{ route('posts') }}" class="inline-block mt-6 bg-purple-600 hover:bg-rose-900 text-white px-4 py-2 rounded">
        Lihat artikel
    </a>
@endsection