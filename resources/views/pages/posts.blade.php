@extends('layouts.app')
 
@section('title', 'Artikel')
 
@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Artikel</h1>
 
    @forelse ($posts as $post)
        <article class="bg-white rounded shadow p-4 mb-4">
            <h2 class="text-xl font-semibold">{{ $post['title'] }}</h2>
            <p class="text-sm text-gray-500">
                oleh {{ $post['author'] }} | {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}
            </p>
        </article>
    @empty
        <p class="text-gray-500">Belum ada artikel.</p>
    @endforelse
@endsection