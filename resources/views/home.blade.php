@extends('layouts.app')

@section('content')
    <div class="text-white" style="background: #594A3C">
        <div class="px-4 py-12 text-center max-w-4xl m-auto">
            <img src="{{ asset('img/logo-tafsirq.png') }}" alt="" class="m-auto mb-16 mt-8">

            <h1 class="text-2xl font-bold md:text-4xl leading-none mb-4">Tafsir Al-Quran Online</h1>

            <div class="flex rounded-full mb-4 bg-teal-800">
                <input type="search" name="search" placeholder="Cari topik, terjemahan, nama surat..."
                       class="flex-grow px-4 placeholder-teal-600 text-teal-900 focus:outline-none rounded-l-full shadow-inner border-r">
                <i class="fad fa-light fa-search my-3 mx-6 mr-8 text-lg text-gray-900 w-4 h-4"></i>
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
