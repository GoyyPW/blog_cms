@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Kontak {{ $name }}</h1>
    <p class="mb-2">Kontak Saya:</p>
    <ul class="list-disc ml-6">
        @foreach ($kontak as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
@endsection