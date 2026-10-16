@extends('layouts.app')
 
@section('title', 'Tentang')
 
@section('content')
    <h1 class="text-3xl font-bold mb-4">Tentang {{ $name }}</h1>
    <p class="mb-2">Teknologi yang saya pelajari:</p>
    <ul class="list-disc ml-6">
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection
