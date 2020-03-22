@extends('layouts.app')

@section('content')
    <div class="p-10 text-center">
        <h1 class="text-4xl leading-none mb-8">Tafsir Al-Quran Online</h1>

        <div class="flex border rounded-full bg-gray-700 mb-4">
            <input type="search" name="search" placeholder="Cari topik, terjemahan, nama surat..."
                   class="flex-grow px-4 focus:outline-none rounded-l-full">
            <i class="fas fa-search m-3 mr-5 text-lg text-gray-300 w-4 h-4"></i>
        </div>

        <div>
            <h2 class="text-2xl">Pencarian Populer</h2>
            <ol>
                <li><a href="">wabah penyakit</a></li>
                <li><a href="">zakat</a></li>
                <li><a href="">puasa</a></li>
                <li><a href="">pemimpin amanah</a></li>
            </ol>
        </div>

    </div>
@endsection
