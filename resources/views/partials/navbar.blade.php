<nav class="bg-white shadow">
    <div class="max-w-4xl mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-bold text-xl">{{ config('app.name') }}</a>
        <div class="space-x-4">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'font-semibold text-red-600' : 'text-gray-600' }}">Beranda</a>
            <a href="{{ route('posts') }}"
               class="{{ request()->routeIs('posts') ? 'font-semibold text-blue-600' : 'text-gray-600' }}">Artikel</a>
            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'font-semibold text-blue-600' : 'text-gray-600' }}">Tentang</a>
            <a href="{{ route('contacts') }}"
               class="{{ request()->routeIs('contacts') ? 'font-semibold text-blue-600' : 'text-gray-600' }}">Kontak</a>
        </div>
    </div>
</nav>