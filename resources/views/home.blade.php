@extends('layouts.app')

@section('content')
    <div class="px-4 py-12 text-center max-w-4xl m-auto">
        <h1 class="text-4xl leading-none mb-8">Tafsir Al-Quran Online</h1>

        <div class="flex border rounded-full bg-gray-700 mb-4">
            <input type="search" name="search" placeholder="Cari topik, terjemahan, nama surat..."
                   class="flex-grow px-4 focus:outline-none rounded-l-full">
            <i class="fas fa-search m-3 mr-5 text-lg text-gray-300 w-4 h-4"></i>
        </div>

        <div class="h-8"></div>

        <div>
            <h2 class="text-lg font-bold">Pencarian Populer</h2>
            <ol class="text-gray-500">
                <li><a href="" class="py-1 block">wabah penyakit</a></li>
                <li><a href="" class="py-1 block">zakat</a></li>
                <li><a href="" class="py-1 block">al maidah 3</a></li>
                <li><a href="" class="py-1 block">puasa</a></li>
                <li><a href="" class="py-1 block">pemimpin amanah</a></li>
            </ol>
        </div>

    </div>
@endsection
