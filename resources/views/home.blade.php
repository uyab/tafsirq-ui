@extends('layouts.app')

@section('content')
    <div class="text-white pattern-dark">
        <div class="px-4 py-12 text-center max-w-4xl m-auto">
            <img src="{{ asset('img/logo-tafsirq.png') }}" alt="" class="m-auto mb-20 mt-8">

            <h1 class="text-2xl font-bold md:text-4xl leading-none mb-4">Tafsir Al-Quran Online</h1>


            <div class="relative max-w-xl m-auto">
                <input type="search" name="serch" placeholder="Cari topik, terjemahan, nama surat..." class="w-full text-black placeholder-black h-12 px-5 pr-12 rounded-full focus:outline-none bg-white">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-6">
                    <i class="fad fa-search text-lg text-gray-900 w-4 h-4"></i>
                </button>
            </div>

            <div class="h-8"></div>

            <div>
                <h2 class="font-bold uppercase text-teal-600 tracking-wider text-sm">Trending</h2>
                <ol class="font-bold">
                    <li><a href="" class="py-1 block">wabah penyakit</a></li>
                    <li><a href="" class="py-1 block">zakat</a></li>
                    <li><a href="" class="py-1 block">al maidah 3</a></li>
                    <li><a href="" class="py-1 block">puasa</a></li>
                    <li><a href="" class="py-1 block">pemimpin amanah</a></li>
                </ol>
            </div>
        </div>
    </div>

    <x-feature></x-feature>

@endsection
